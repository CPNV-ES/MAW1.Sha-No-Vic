<ul class="ansering-list">
    <?php
    foreach ($data['exercises'] as $exercise): ?>
        <li class="row">
            <div class="column card">
                <div class="title"><?= htmlspecialchars($exercise->getTitle(), ENT_QUOTES, 'UTF-8');  ?></div>
                <a class="button" href="/exercises/<?= htmlspecialchars($exercise->getId(), ENT_QUOTES, 'UTF-8'); ?>/fulfillments/new">Take it</a>
            </div>
        </li>
    <?php
    endforeach; ?>
</ul>