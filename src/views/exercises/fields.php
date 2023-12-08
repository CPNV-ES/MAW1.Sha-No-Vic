<div class="row">
    <section class="column">
        <h1>Fields</h1>
        <table class="records">
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Value kind</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php //TODO:Move this view in questions folder ?>
                <?php foreach ($data['questions'] as $question): ?>
                    <tr>
                        <td>
                            <?= $question->getTitle(); ?>
                        </td>
                        <td>
                            <?= $question->getType(); ?>
                        </td>
                        <td>
                            <a title="Edit"
                                href="/exercises/<?= $data['exercise_id'] ?>/fields/<?= $question->getId(); ?>"><i
                                    class="fa fa-edit"></i>
                            </a>
                            <form id="deleteQuestion" method="post" class="icon-form action-icon"
                                action="/exercises/<?= $data['exercise_id'] ?>/fields/<?= $question->getId(); ?>">
                                <input type="hidden" name="_method" value="DELETE">
                                <button data-confirm="Are you sure?" class="no-css" type="submit"><i
                                        class="fa fa-trash purple"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form id="changeExerciseStatus" method="POST" class="" action="/exercises/<?= $data['exercise_id'] ?>">
            <input type="hidden" name="_method" value="PUT">
            <button class="button" type="submit"><i class="fa fa-comment"></i> Complete and be ready for
                answers</button>
        </form>
    </section>
    <section class="column">
        <h1>New Field</h1>
        <form action="/exercises/<?= $data['exercise_id'] ?>/fields" accept-charset="UTF-8" method="post">
            <div class="field">
                <label for="field_label">Label</label>
                <input type="text" name="label" id="field_label" />
            </div>

            <div class="field">
                <label for="field_value_kind">Value kind</label>
                <select name="value_kind" id="field_value_kind">
                    <option selected="selected" value="single_line">Single line text</option>
                    <option value="single_line_list">List of single lines</option>
                    <option value="multi_line">Multi-line text</option>
                </select>
            </div>

            <div class="actions">
                <input type="submit" value="Create Field" data-disable-with="Create Field" />
            </div>
        </form>
    </section>
</div>