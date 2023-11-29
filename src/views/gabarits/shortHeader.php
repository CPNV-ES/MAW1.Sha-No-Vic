<body>
    <header class="heading results">
        <section class="container">
            <a href="/"><img src="/img/logo.png" /></a>
            <?php if (isset($data['header'])) : ?>
            <p><?= $data['header']['type'] ?? NULL; ?> :
                <?php if(isset($data['header']['link'])) : ?>
                <a href="<?= $data['header']['link'] ?? NULL ?>">
                    <?= $data['header']['title'] ?? NULL ?></a> <?php endif; ?></p>
            <?php endif; ?>
        </section>
    </header>
<main class="container">