<?php snippet('header') ?>

<section id="post">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <article>
                    <header>
                        <time datetime="<?= $page->date() ?>"><?= $page->date()->toDate('Y-m-d') ?></time>
                        <h1 class="flex"><img src="<?= url('assets/icons/arrow-right-up-line.svg') ?>" width="50" height="50" arial-hidden="true"><a href="<?= $page->link() ?>" alt="<?= $page->alt() ?>"><?= $page->title()->html() ?></a></h1>
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