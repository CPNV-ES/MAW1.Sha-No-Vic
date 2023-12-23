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
                <?php foreach ($data['exercises'] as $exercise):
                    if ($exercise->getStatus() == "building"): ?>
                        <tr>
                            <td class="no-css-td" class="text-widen">
                                <?= htmlspecialchars($exercise->getTitle(), ENT_QUOTES, 'UTF-8');  ?>
                            </td>
                            <td class="no-css-td">
                                <div class="container widen">

                                    <?php if ($exercise->hasQuestions()): ?>
                                        <form id="changeExerciseStatus" method="post" class="icon-form action-icon"
                                            action="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>">
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                                            <button class="no-css" type="submit"><i class="fa fa-comment purple"></i></button>
                                        </form>
                                    <?php endif; ?>

                                    <a title="Manage fields" href="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8');  ?>/fields"><i
                                            class="fa fa-edit action-icon"></i></a>
                                    <form id="deleteForm" method="post" class="icon-form action-icon"
                                        action="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>">
                                        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="no-css" type="submit"><i class="fa fa-trash purple"></i></button>
                                    </form>
                                </div>
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
                <?php foreach ($data['exercises'] as $exercise):
                    if ($exercise->getStatus() == "answering"): ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($exercise->getTitle(), ENT_QUOTES, 'UTF-8');  ?>
                            </td>
                            <td class="no-css-td">
                                <a title="Show results" href="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>/results"><i
                                        class="fa fa-chart-column"></i></a>
                                <form id="changeExerciseStatus" method="post" class="icon-form action-icon"
                                    action="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>">
                                    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                                    <input type="hidden" name="_method" value="PUT">
                                    <button class="no-css" type="submit"><i class="fa fa-minus-circle purple"></i></button>
                                </form>
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
                <?php foreach ($data['exercises'] as $exercise):
                    if ($exercise->getStatus() == "closed"): ?>
                        <tr>
                            <td>
                                <?= htmlspecialchars($exercise->getTitle(), ENT_QUOTES, 'UTF-8');  ?>
                            </td>
                            <td class="no-css-td">
                                <a title="Show results" href="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>/results"><i
                                        class="fa fa-chart-bar"></i></a>
                                <form id="deleteForm" method="post" class="icon-form action-icon"
                                    action="exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8');  ?>">
                                    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="no-css" type="submit"><i class="fa fa-trash purple"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endif; endforeach; ?>
            </tbody>

        </table>
    </section>
</div>