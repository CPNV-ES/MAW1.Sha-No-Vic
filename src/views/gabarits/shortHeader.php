<body>
    <header class="heading <?= htmlspecialchars($data['color'] , ENT_QUOTES, 'UTF-8') ?? NULL; ?>">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <p class="exercise-label"><?= $data['header']['type'] ? htmlspecialchars($data['header']['type'] , ENT_QUOTES, 'UTF-8') . " :" : NULL; ?><b>
                <a href="<?= htmlspecialchars($data['header']['link'] , ENT_QUOTES, 'UTF-8') ?? NULL ?>">
                    <?= htmlspecialchars($data['header']['title'] , ENT_QUOTES, 'UTF-8') ?? NULL ?></b></a><?= htmlspecialchars($data['header']['staticTitle'] , ENT_QUOTES, 'UTF-8') ?? NULL ?></p>
        </section>
    </header>
<main class="container">