<h1><?= $data['fulfillment']->getTimestamp() ?></h1>
<dl class="answer">
    <?php foreach ($data['answers'] as $key => $answer):?>
        <dt><?= $data['questions'][$key]->getTitle() ?></dt>
        <dd><?= $answer->getAnswer() ?></dd>
    <?php endforeach; ?>
</dl>