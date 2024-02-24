<?php snippet('header') ?>

<section id="post">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <article>
                    <header>
                        <time datetime="<?= $page->date() ?>"><?= $page->date()->toDate('Y-m-d') ?></time>
                        <h1><?= $page->title()->html() ?></h1>
                        <?php snippet('cover') ?>
                    </header>
                    <div class="content">
                        <?= $page->text()->toBlocks() ?>
                    </div>
                    <?php snippet('tags') ?>
                    <footer>
                        <a href="<?= url('notes') ?>">⟵ zurück</a>
                    </footer>
                </article>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>