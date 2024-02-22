<?php snippet('header') ?>

<section id="short">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <article class="short bubble">
                    <?= $page->text()->kirbytext() ?>
                    <time datetime="<?= $page->date() ?>" class="flex"><img src="<?= url('assets/icons/link-m.svg') ?>" width="15" height="15" arial-hidden="true"><?= $page->date()->toDate('Y-m-d') ?></time>
                </article>
            </div>
        </div>
</section>

<?php snippet('footer') ?>