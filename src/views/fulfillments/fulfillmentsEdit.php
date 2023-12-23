<main class="container">
    <h1>Your take</h1>
    <p>Bookmark this page, it's yours. You'll be able to come back later to finish.</p>

    <form action="/exercises/<?= $data['exercise_id']; ?>/fulfillments/<?= $data['fulfillment_id'] ?>/edit"
        accept-charset="UTF-8" method="post">
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        <input type="hidden" name="_method" value="PUT">
        <?php
        foreach ($data['questions'] as $question): ?>

            <div class="field">
                <label for="answers_attributes__value">
                    <?= $question->getTitle(); ?>
                </label>

                <?php
                foreach ($data['answers'] as $answer): ?>

                    <?php
                    if ($answer->getQuestionsId() == $question->getId() && $question->getType() == "single_line"): ?>
                        <input type="text" name="answers[attributes][<?= $question->getId() ?>]"
                            id="fulfillment_answers_attributes__value" value="<?= $answer->getAnswer(); ?>">
                        <?php
                    elseif (
                        $answer->getQuestionsId() == $question->getId() && ($question->getType(
                        ) == 'single_line_list' || $question->getType() == 'multi_line')
                    ): ?>
                        <textarea name="answers[attributes][<?= $question->getId() ?>]"
                            id="fulfillment_answers_attributes__value"><?= $answer->getAnswer(); ?></textarea>
                        <?php
                    endif; ?>
                    <?php
                endforeach; ?>
            </div>


            <?php
        endforeach; ?>

        <div class="actions">
            <input type="submit" name="commit" value="Update" data-disable-with="Save">
        </div>
    </form>


</main>