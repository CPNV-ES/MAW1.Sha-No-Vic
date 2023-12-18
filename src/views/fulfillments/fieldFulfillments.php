<h1><?= $data['question'][0]->getTitle() ?></h1>

<?php //dd($data); ?>

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
            <td><a href="/exercises/<?= $data['exercise_id'] ?>/fulfillments/<?= $fulfillment->getId() ?>"><?= $fulfillment->getTimestamp() ?></a></td>
            <td><?= $data['answers'][$key]->getAnAnswer() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>