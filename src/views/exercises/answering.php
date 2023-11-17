<ul class="ansering-list">
    <?php foreach ($data['exercises'] as $exercise): ?>
    <li class="row">
        <div class="column card">
            <div class="title"><?= $exercise['title'] ?></div>
            <a class="button" href="7/fulfillments/new.html">Take it</a>
        </div>
    </li>
    <?php endforeach; ?>
</ul>