<?php if ($cover = $page->cover()->toFile()) : ?>
    <figure class="cover" aria-hidden="true">
        <img src="<?= $cover->crop(768, 350)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
        <?php if ($cover->photographer()->isNotEmpty() || $cover->tool()->isNotEmpty() || $cover->license()->isNotEmpty()) : ?>
            <figcaption class="flex">
                <?php $link = $cover->link()->url(); ?>
                <?php if ($cover->photographer()->isNotEmpty()) : ?>
                    <div>
                        <label>Urheber*in:</label>
                        <?php if ($link->isNotEmpty()) : ?>
                            <a href="<?= $link ?>"><?= $cover->photographer() ?></a>
                        <?php else : ?>
                            <?= $cover->photographer() ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if ($cover->tool()->isNotEmpty()) : ?>
                    <div>
                        <label>Tool:</label>
                        <?php if ($link->isNotEmpty()) : ?>
                            <a href="<?= $link ?>"><?= $cover->tool() ?></a>
                        <?php else : ?>
                            <?= $cover->tool() ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if ($cover->license()->isNotEmpty()) : ?>
                    <div>
                        <label>Lizenz:</label>
                        <?= $cover->license() ?>
                    </div>
                <?php endif ?>
            </figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>