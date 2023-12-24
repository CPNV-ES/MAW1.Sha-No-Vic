<h1><?= htmlspecialchars($data['fulfillment']->getTimestamp(), ENT_QUOTES, 'UTF-8') ?></h1>
<dl class="answer">
    <?php foreach ($data['answers'] as $key => $answer):?>
        <dt><?= htmlspecialchars($data['questions'][$key]->getTitle(), ENT_QUOTES, 'UTF-8') ?></dt>
        <dd><?= htmlspecialchars($answer->getAnswer(), ENT_QUOTES, 'UTF-8') ?></dd>
    <?php endforeach; ?>
</dl>