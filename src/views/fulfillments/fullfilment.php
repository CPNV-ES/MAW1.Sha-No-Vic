<h1><?= $data['fulfillment']['timestamp'] ?></h1>
<dl class="answer">
    <?php foreach ($data['fulfillment']['query'] as $query):?>
    <dt><?= $query['question'] ?></dt>
    <dd><?= $query['answer'] ?></dd>
    <?php endforeach; ?>
</dl>