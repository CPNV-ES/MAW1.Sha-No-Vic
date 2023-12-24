<body>
    <header class="heading <?= isset($data['header']['color']) ? htmlspecialchars($data['color'] , ENT_QUOTES, 'UTF-8') : NULL ?>">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <p class="exercise-label"><?= isset($data['header']['type']) ? htmlspecialchars($data['header']['type'] , ENT_QUOTES, 'UTF-8') . " :" : NULL ?><b>
                <a href="<?= isset($data['header']['link']) ? htmlspecialchars($data['header']['link'] , ENT_QUOTES, 'UTF-8') : NULL ?>">
                    <?= isset($data['header']['title']) ? htmlspecialchars($data['header']['title'] , ENT_QUOTES, 'UTF-8') : NULL ?></b></a><?= isset($data['header']['staticTitle']) ? htmlspecialchars($data['header']['staticTitle'], ENT_QUOTES, 'UTF-8') : NULL ?></p>
        </section>
    </header>
<main class="container">