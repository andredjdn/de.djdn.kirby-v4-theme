<?php snippet('header') ?>

<section id="shorts">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <h3>Aktuelle Shorts</h3>
                <p>Zu wenig für eine Note und zu viel für den Papierkorb.</p>
                <?php foreach ($shorts as $short) : ?>
                    <article class="short">
                        <?= $short->text()->kirbytext() ?>
                        <time datetime="<?= $short->date() ?>" class="flex"><img src="<?= url('assets/icons/link-m.svg') ?>" width="15" height="15" arial-hidden="true"><a href="<?= $short->url() ?>"><?= $short->date()->toDate('Y-m-d') ?></a></time>
                    </article>
                <?php endforeach; ?>
                <?php if ($shorts->count() <= 0) : ?>
                    <p>--empty--</p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>