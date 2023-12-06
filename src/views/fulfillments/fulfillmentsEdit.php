
<main class="container">
    <h1>Your take</h1>
    <p>If you'd like to come back later to finish, simply submit it with blanks</p>

    <form action="/exercises/<?= $data['exercise_id']; ?>/fulfillments" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="7d+vB3MFNW/SkvfwldHqj4osZMOnHQmKod4m/iXa4q0V1mFpAat6j3S46ZTxwVYrvPvcdHHbFLYOc1JXVJZT5w==">

        <?php foreach ($data['questions'] as $question) : ?>

            <?php if ($question->getType() == "single_line") : ?>
                <input type="hidden" value="<?= $question->getId(); ?>" name="fulfillment[answers_attributes][][field_id]" id="fulfillment_answers_attributes__field_id">
                <div class="field">
                    <label for="fulfillment_answers_attributes__value"><?= $question->getTitle(); ?></label>
                    <input type="text" name="fulfillment[answers_attributes][][value]" id="fulfillment_answers_attributes__value">
                </div>
            <?php elseif ($question->getType() == 'single_line_list' || $question->getType() == 'multi_line') : ?>
                <input type="hidden" value="<?= $question->getId(); ?>" name="fulfillment[answers_attributes][][field_id]" id="fulfillment_answers_attributes__field_id">
                <div class="field">
                    <label for="fulfillment_answers_attributes__value"><?= $question->getTitle(); ?></label>
                    <textarea name="fulfillment[answers_attributes][<?= $question->getId() ?>][value]" id="fulfillment_answers_attributes__value"></textarea>
                </div>

            <?php endif ?>
        <?php endforeach; ?>

        <div class="actions">
            <input type="submit" name="commit" value="Save" data-disable-with="Save">
        </div>
    </form>


</main>