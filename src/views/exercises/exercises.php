<div class="row">
    <section class="column">
        <h1>Building</h1>
        <table class="records">
            <thead>
            <tr>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['exercises'] as  $exercise) : if ($exercise->getStatus()) : ?>
            <tr>
                <td><?= $exercise->getTitle() ?></td>
                <td>
                    <a title="Be ready for answers" rel="nofollow" data-method="put" href="exercises/1060cfc.html?exercise%5Bstatus%5D=answering"><i class="fa fa-comment"></i></a>
                    <a title="Manage fields" href="exercises/<?= $exercise->getId() ?>/fields"><i class="fa fa-edit"></i></a>
                    <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/<?= $exercise->getId() ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endif; endforeach; ?>
            </tbody>
        </table>
    </section>

    <section class="column">
        <h1>Answering</h1>
        <table class="records">
            <thead>
            <tr>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['exercises'] as  $exercise) : if ($exercise->getStatus() == "answering") : ?>
            <tr>
                <td><?= $exercise->getTitle() ?></td>
                <td>
                    <a title="Show results" href="exercises/<?= $exercise->getId() ?>/results"><i class="fa fa-chart-bar"></i></a>
                    <a title="Close" rel="nofollow" data-method="put" href="exercises/120785c.html?exercise%5Bstatus%5D=closed"><i class="fa fa-minus-circle"></i></a>
                </td>
            </tr>
            <?php endif; endforeach; ?>
            </tbody>
        </table>
    </section>

    <section class="column">
        <h1>Closed</h1>
        <table class="records">
            <thead>
            <tr>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($data['exercises'] as  $exercise) : if ($exercise->getStatus() == "closed") : ?>
            <tr>
                <td><?= $exercise->getTitle() ?></td>
                <td>
                    <a title="Show results" href="exercises/<?= $exercise->getId() ?>/results"><i class="fa fa-chart-bar"></i></a>
                    <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/<?= $exercise->getId() ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endif; endforeach; ?>
            </tbody>

        </table>
    </section>
</div>