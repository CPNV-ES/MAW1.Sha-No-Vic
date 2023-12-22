<body>
    <header class="heading <?= $data['color'] ?? NULL; ?>">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <p class="exercise-label"><?= $data['header']['type'] ? $data['header']['type'] . " :" : NULL; ?><b>
                <a href="<?= $data['header']['link'] ?? NULL ?>">
                    <?= $data['header']['title'] ?? NULL ?></b></a><?= $data['header']['staticTitle'] ?? NULL ?></p>
        </section>
    </header>
<main class="container">