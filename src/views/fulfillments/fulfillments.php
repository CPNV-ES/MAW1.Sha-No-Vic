<h1>Fulfillments for <?= $data['question']['title'] ?></h1>

<table>
    <thead>
    <tr>
        <th>Taken at</th>
        <th colspan="3"></th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($data['fulfillments'] as $fulfillment):?>
    <tr>
        <td><?= $fulfillment['timestamp'] ?></td>
        <td><a href="fulfillments/390.html">Show</a></td>
        <td><a href="fulfillments/390/edit.html">Edit</a></td>
        <td><a data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="fulfillments/390.html">Destroy</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>