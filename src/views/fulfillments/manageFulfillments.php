<h1>Fulfillments for <?= $data['header']['title'] ?></h1>

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
            <td><?= $fulfillment->getTimestamp() ?></td>
            <td><a href="fulfillments/<?= $fulfillment->getId() ?>">Show</a></td>
            <td><a href="fulfillments/<?= $fulfillment->getId() ?>/edit">Edit</a></td>
            <td>
                <form id="destroyFulfillmentForm" method="post" class="icon-form action-icon" action="fulfillments/<?= $fulfillment->getId() ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="#" onclick="document.getElementById('destroyFulfillmentForm').submit();">Destroy</a>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>