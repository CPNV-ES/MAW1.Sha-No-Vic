<main class="container">
    <h1>Editing Field</h1>
    <form action="/exercises/<?= $data['id'][0] ?>/fields/<?= $data['id'][1] ?>" accept-charset="UTF-8" method="post">
        <input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input
            type="hidden" name="authenticity_token"
            value="BC3BYOkO0D/4TQ8ebHUHsJw0KWXP3AyzlMgrNViNr78m9Mv026WH6b6JWHPvjItzxXKZbk6df1+nj2z/IG20pw==">

        <div class="field">
            <label for="field_label">Label</label>
            <input type="text" value="<?= $data['question'][0]->getTitle(); ?>" name="label" id="field_label">
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