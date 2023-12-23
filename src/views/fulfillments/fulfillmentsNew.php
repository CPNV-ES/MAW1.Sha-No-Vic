<main class="container">
    <h1>Your take</h1>
    <p>If you'd like to come back later to finish, simply submit it with blanks</p>
    <form action="/exercises/<?= htmlspecialchars($data['exercise_id'], ENT_QUOTES, 'UTF-8'); ?>/fulfillments" accept-charset="UTF-8" method="post">
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        <?php foreach ($data['questions'] as $question): ?>
            <?php if ($question->getType() == "single_line"): ?>
                <div class="field">
                    <label for="fulfillment_answers_attributes__value">
                        <?= htmlspecialchars($question->getTitle(), ENT_QUOTES, 'UTF-8'); ?>
                    </label>
                    <input type="text" name="fulfillment[<?= htmlspecialchars( $question->getId(), ENT_QUOTES, 'UTF-8'); ?>]"
                        id="fulfillment_answers_attributes__value">
                </div>
            <?php elseif ($question->getType() == 'single_line_list' || 'multi_line'): ?>
                <div class="field">
                    <label for="fulfillment_answers_attributes__value">
                        <?= htmlspecialchars($question->getTitle(), ENT_QUOTES, 'UTF-8'); ?>
                    </label>
                    <textarea name="fulfillment[<?= $question->getId(); ?>]"
                        id="fulfillment_answers_attributes__value"></textarea>
                </div>

            <?php endif ?>
        <?php endforeach; ?>

        <div class="actions">
            <input type="submit" name="commit" value="Save" data-disable-with="Save">
        </div>
    </form>


</main>