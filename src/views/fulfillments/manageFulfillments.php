<h1>Fulfillments for
    <?= $data['header']['title'] ?>
</h1>

<table>
    <thead>
        <tr>
            <th>Taken at</th>
            <th colspan="3"></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data['fulfillments'] as $fulfillment): ?>
            <tr>
                <td>
                    <?= htmlspecialchars($fulfillment->getTimestamp(), ENT_QUOTES, 'UTF-8');  ?>
                </td>
                <td><a href="fulfillments/<?= htmlspecialchars($fulfillment->getId(), ENT_QUOTES, 'UTF-8'); ?>">Show</a></td>
                <td><a href="fulfillments/<?= htmlspecialchars($fulfillment->getId(), ENT_QUOTES, 'UTF-8'); ?>/edit">Edit</a></td>
                <td>
                    <form id="destroyFulfillmentForm" method="post" class="icon-form action-icon"
                        action="fulfillments/<?= htmlspecialchars($fulfillment->getId(), ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="#" onclick="document.getElementById('destroyFulfillmentForm').submit();">Destroy</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>