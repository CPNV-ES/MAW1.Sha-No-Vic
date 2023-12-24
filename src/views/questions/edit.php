<main class="container">
    <h1>Editing Field</h1>
    <form action="/exercises/<?= htmlspecialchars($data['id'][0] , ENT_QUOTES, 'UTF-8') ?>/fields/<?= htmlspecialchars($data['id'][1] , ENT_QUOTES, 'UTF-8') ?>" accept-charset="UTF-8" method="post">
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        <div class="field">
            <label for="field_label">Label</label>
            <input type="text" value="<?= htmlspecialchars($data['question'][0]->getTitle(), ENT_QUOTES, 'UTF-8') ?>" name="label" id="field_label">
        </div>

        <div class="field">
            <label for="field_value_kind">Value kind</label>
            <select name="value_kind" id="field_value_kind">
                <option <?php if ($data['question'][0]->getType() == 'single_line') {
                    echo 'selected="selected"';
                } ?>   value="single_line">Single line text</option>
                <option <?php if ($data['question'][0]->getType() == 'single_line_list') {
                    echo 'selected="selected"';
                } ?> value="single_line_list">List of single lines</option>
                <option <?php if ($data['question'][0]->getType() == 'multi_line') {
                    echo 'selected="selected"';
                } ?> value="multi_line">Multi-line text</option>
            </select>
        </div>

        <div class="actions">
            <input type="submit" name="commit" value="Update Field" data-disable-with="Update Field">
        </div>
    </form>




</main>