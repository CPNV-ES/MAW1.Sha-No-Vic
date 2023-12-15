<h1><?= $data['fulfillment']->getTimestamp() ?></h1>
<dl class="answer">
    <?php foreach ($data['question'] as $key => $question):?>
    <dt><?= $question->getTitle() ?></dt>
    <dd><?= $data['answer'][$key] ?></dd>
    <?php endforeach; ?>
</dl>