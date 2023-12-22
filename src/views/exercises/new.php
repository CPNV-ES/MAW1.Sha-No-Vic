<h1>New Exercise</h1>

<form action="/exercises" accept-charset="UTF-8" method="post">
  <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
  <div class="field">
    <label for="exercise_title">Title</label>
    <input type="text" name="title" id="exercise_title" />
  </div>

  <div class="actions">
    <input type="submit" name="commit" value="Create Exercise" data-disable-with="Create Exercise" />
  </div>
</form>