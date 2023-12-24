<main class="container">
    <h1>Your take</h1>
    <p>If you'd like to come back later to finish, simply submit it with blanks</p>

    <form action="/exercises/<?= htmlspecialchars($data['exercise_id'], ENT_QUOTES, 'UTF-8');  ?>/fulfillments/<?= htmlspecialchars($data['fulfillment_id'], ENT_QUOTES, 'UTF-8'); ?>/edit"
        accept-charset="UTF-8" method="post">
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        <input type="hidden" name="_method" value="PUT">
        <?php
        foreach ($data['questions'] as $question): ?>

            <div class="field">
                <label for="answers_attributes__value">
                    <?= htmlspecialchars($question->getTitle(), ENT_QUOTES, 'UTF-8'); ?>
                </label>

                <?php
                foreach ($data['answers'] as $answer): ?>

                    <?php
                    if ($answer->getQuestionsId() == $question->getId() && $question->getType() == "single_line"): ?>
                        <input type="text" name="answers[attributes][<?= htmlspecialchars($question->getId(), ENT_QUOTES, 'UTF-8'); ?>]"
                            id="fulfillment_answers_attributes__value" value="<?= htmlspecialchars($answer->getAnswer(), ENT_QUOTES, 'UTF-8'); ?>">
                        <?php
                    elseif (
                        $answer->getQuestionsId() == $question->getId() && ($question->getType(
                        ) == 'single_line_list' || $question->getType() == 'multi_line')
                    ): ?>
                        <textarea name="answers[attributes][<?= htmlspecialchars( $question->getId() , ENT_QUOTES, 'UTF-8');?>]"
                            id="fulfillment_answers_attributes__value"><?= htmlspecialchars($answer->getAnswer(), ENT_QUOTES, 'UTF-8'); ?></textarea>
                        <?php
                    endif; ?>
                    <?php
                endforeach; ?>
            </div>


            <?php
        endforeach; ?>

        <div class="actions">
            <input type="submit" name="commit" value="Save" data-disable-with="Save">
        </div>
    </form>


</main>