<section id="teaser-shorts">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <?php if ($short = page('shorts')->children()->published()->filterBy('date', 'date >', date('Y-m-d', strtotime('- 14 days')))->flip()->first()) : ?>
                    <article class="short bubble">
                        <?= $short->text()->kirbytext() ?>
                        <time datetime="<?= $short->date() ?>" class="flex"><img src="<?= url('assets/icons/link-m.svg') ?>" width="15" height="15" arial-hidden="true"><a href="<?= $short->url() ?>"><?= $short->date()->toDate('Y-m-d') ?></a></time>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>