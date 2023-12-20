<body>
    <header class="heading <?= $data['color'] ?? NULL; ?>">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <?php if (isset($data['header'])) : ?>
            <p class="exercise-label"><?= $data['header']['type'] ?? NULL; ?> :<b>
                <?php if(isset($data['header']['link'])) : ?>
                <a href="<?= $data['header']['link'] ?? NULL ?>"><?php endif; ?>
                    <?= $data['header']['title'] ?? NULL ?></a><?php endif; ?></b></p>
        </section>
    </header>
<main class="container">