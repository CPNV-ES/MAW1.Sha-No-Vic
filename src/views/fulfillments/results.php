<table>
  <thead>
    <tr>
        <th>Take</th>
        <?php foreach ($data['questions'] as $question) : ?>
      <th><a href="/exercises/<?= $data['exercise_id'] ?>/results/<?= $question->getId() ?>"><?= $question->getTitle() ?></a></th>
        <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($data['fulfillments'] as $key => $fulfillment):?>
      <tr>
          <td><a href="fulfillments/<?= $fulfillment->getId() ?>"><?= $fulfillment->getTimestamp()?></a></td>
            <?php foreach ($data['answers'][$key] as $answer) : ?>
                <td class="answer"><i
                    <?php if(strlen($answer->getAnAnswer()) >= 10)
                        echo 'class="fa fa-check-double filled"';
                    elseif(strlen($answer->getAnAnswer()) == 0 )
                        echo 'class="fa fa-times empty"';
                    elseif (strlen($answer->getAnAnswer()) < 10)
                        echo 'class="fa fa-check short"'; ?>
            ></i></td>
            <?php endforeach; ?>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>