<?php if ($cover = $page->cover()->toFile()) : ?>
    <figure class="cover" aria-hidden="true">
        <img src="<?= $cover->crop(768, 200)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
        <?php if ($cover->photographer()->isNotEmpty()) : ?>
            <figcaption>
                <?php if ($cover->link()->isNotEmpty()) : ?>
                <a href="<?= $cover->link()->url() ?>"><?= $cover->photographer() ?></a>
                <?php else : ?>
                <?= $cover->photographer() ?>
                <?php endif ?>
            </figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>