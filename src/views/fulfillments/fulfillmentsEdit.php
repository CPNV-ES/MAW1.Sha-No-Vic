<main class="container">
    <h1>Your take</h1>
    <p>If you'd like to come back later to finish, simply submit it with blanks</p>


        <?php foreach ($data['questions'] as $question) : ?>

        <?php
        foreach ($data['questions'] as $question) : ?>

            <?php
            if ($question->getType() == "single_line") : ?>
                <div class="field">
                    <label for="answers_attributes__value"><?= $question->getTitle(); ?></label>
                    <?php
                    foreach ($data['answers'] as $answer) : ?>
                        <?php
                        if ($answer->getQuestionsId() == $question->getId()) : ?>
                            <input type="text" name="answers[attributes][<?= $question->getId() ?>]"
                                   id="fulfillment_answers_attributes__value" value="<?= $answer->getAnswer(); ?>">

                        <?php
                        elseif ($question->getType() == 'single_line_list' || $question->getType() == 'multi_line') : ?>

                            <div class="field">
                                <label for="fulfillment_answers_attributes__value"><?= $question->getTitle(); ?></label>
                                <textarea name="fulfillment[answers_attributes][<?= $question->getId() ?>]"
                                          id="fulfillment_answers_attributes__value"
                                          value="<?= $answer->getAnswer(); ?>"></textarea>
                            </div>
                        <?php
                        endif; ?>
                    <?php
                    endforeach; ?>
                </div>


            <?php
            endif ?>
        <?php
        endforeach; ?>

        <div class="actions">
            <input type="submit" name="commit" value="Update" data-disable-with="Save">
        </div>
    </form>


</main>