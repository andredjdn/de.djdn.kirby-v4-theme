<?php snippet('header') ?>

<section id="page">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <article>
                    <header>
                        <h1><?= $page->title()->html() ?></h1>
                    </header>
                    <div class="content">
                        <?= $page->text()->toBlocks() ?>
                    </div>
                    <footer>
                        <a href="<?= url('/') ?>">⟵ Home</a>
                    </footer>
                </article>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>