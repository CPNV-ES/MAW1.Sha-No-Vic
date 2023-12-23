<table>
  <thead>
    <tr>
        <th>Take</th>
        <?php foreach ($data['questions'] as $question) : ?>
      <th><a href="/exercises/<?= htmlspecialchars($data['exercise_id'], ENT_QUOTES, 'UTF-8');  ?>/results/<?= htmlspecialchars($question->getId(), ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($question->getTitle(), ENT_QUOTES, 'UTF-8'); ?></a></th>
        <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($data['fulfillments'] as $key => $fulfillment):?>
      <tr>
          <td><a href="fulfillments/<?= htmlspecialchars($fulfillment->getId(), ENT_QUOTES, 'UTF-8');  ?>"><?= htmlspecialchars($fulfillment->getTimestamp(), ENT_QUOTES, 'UTF-8'); ?></a></td>
            <?php foreach ($data['answers'][$key] as $answer) : ?>
                <td class="answer"><i
                    <?php if(strlen($answer->getAnswer()) >= 10)
                        echo 'class="fa fa-check-double filled"';
                    elseif(strlen($answer->getAnswer()) == 0 )
                        echo 'class="fa fa-times empty"';
                    elseif (strlen($answer->getAnswer()) < 10)
                        echo 'class="fa fa-check short"'; ?>
            ></i></td>
            <?php endforeach; ?>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>