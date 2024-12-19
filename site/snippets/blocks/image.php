<?php

/** @var \Kirby\Cms\Block $block */
$image   = $block->image()->toFile();
$alt     = $block->alt()->or($image->alt());
$caption = $block->caption()->or($image->caption());
$crop    = $block->crop()->isTrue();
$link    = $block->link()->or($image->link());
$photographer = $block->photographer()->or($image->photographer());
$tool    = $block->tool()->or($image->tool());
$license = $block->license()->or($image->license());
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image) {
    $src = $image->url();
}

?>
<?php if ($src) : ?>
    <figure class="image"<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
        <img src="<?= $src ?>" alt="<?= $alt->esc() ?>">
        <?php if ($photographer->isNotEmpty() || $tool->isNotEmpty() || $license->isNotEmpty() || $caption->isNotEmpty()) : ?>
        <figcaption>
            <div class="flex">
                <?php if ($photographer->isNotEmpty()) : ?>
                <div>
                    <label>Urheber*in:</label>
                    <?php if ($link->isNotEmpty()) : ?>
                        <a href="<?= $link ?>"><?= $photographer ?></a>
                    <?php else : ?>
                        <?= $photographer ?>
                    <?php endif ?>
                </div>
                <?php endif ?>
                <?php if ($tool->isNotEmpty()) : ?>
                    <div>
                        <label>Tool:</label>
                        <?php if ($link->isNotEmpty()) : ?>
                            <a href="<?= Str::esc($link->toUrl()) ?>"><?= $tool ?></a>
                        <?php else : ?>
                            <?= $tool ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if ($license->isNotEmpty()) : ?>
                <div>
                    <label>Lizenz:</label>
                    <?= $license ?>
                </div>
                <?php endif ?>
            </div>
            <?php if ($caption->isNotEmpty()) : ?>
            <div class="description"><?= $caption ?></div>
            <?php endif ?>
        </figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>