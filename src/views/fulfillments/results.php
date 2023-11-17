<h1><?= $data['question']['title'] ?></h1>
<table>
  <thead>
    <tr>
      <th>Take</th>
      <th>Content</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['fulfillments'] as $fulfillment):?>
      <tr>
          <td><a href="../fulfillments/1.html"><?= $fulfillment['timestamp']?></a></td>
          <td><?= $fulfillment['answer']?></td>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>