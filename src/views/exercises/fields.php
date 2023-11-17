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
            <?php foreach ($data['questions'] as $question): ?>
            <tr>
                <td><?= $question['title'] ?></td>
                <td><?= $question['type'] ?></td>
                <td>
                    <a title="Edit" href="fields/218/edit.html"><i class="fa fa-edit"></i></a>
                    <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="fields/218.html"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <a data-confirm="Are you sure? You won&#39;t be able to further edit this exercise" class="button" rel="nofollow" data-method="put" href="../960cfc.html?exercise%5Bstatus%5D=answering"><i class="fa fa-comment"></i> Complete and be ready for answers</a>

    </section>
    <section class="column">
        <h1>New Field</h1>
        <form action="http://exercice-looper.mycpnv.ch/exercises/96/fields" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="0MXQdADtABr/nscVE/Z8tzvLnmyIF6yhdz3TTGwpDI58mISIDlepAcrEy99rZuaBZkZQ+wal8re8NmcSgzDYDQ==" />

            <div class="field">
                <label for="field_label">Label</label>
                <input type="text" name="field[label]" id="field_label" />
            </div>

            <div class="field">
                <label for="field_value_kind">Value kind</label>
                <select name="field[value_kind]" id="field_value_kind"><option selected="selected" value="single_line">Single line text</option>
                    <option value="single_line_list">List of single lines</option>
                    <option value="multi_line">Multi-line text</option></select>
            </div>

            <div class="actions">
                <input type="submit" name="commit" value="Create Field" data-disable-with="Create Field" />
            </div>
        </form>
    </section>
</div>