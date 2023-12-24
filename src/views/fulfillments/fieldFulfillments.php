<h1><?= htmlspecialchars($data['question'][0]->getTitle(), ENT_QUOTES, 'UTF-8') ?></h1>


<table>
    <thead>
    <tr>
        <th>Take</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['fulfillments'] as $key => $fulfillment):?>
        <tr>
            <td><a href="/exercises/<?= htmlspecialchars($data['exercise_id'], ENT_QUOTES, 'UTF-8') ?>/fulfillments/<?= htmlspecialchars($fulfillment->getId(), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($fulfillment->getTimestamp(), ENT_QUOTES, 'UTF-8') ?></a></td>
            <td><?= htmlspecialchars($data['answers'][$key]->getAnswer(), ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>