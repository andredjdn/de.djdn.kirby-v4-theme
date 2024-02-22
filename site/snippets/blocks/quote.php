<?php

/** @var \Kirby\Cms\Block $block */ ?>
<blockquote>
    <p><?= $block->text() ?></p>
    <?php if ($block->citation()->isNotEmpty()) : ?>
        <footer>
            <cite><?= $block->citation() ?></cite>
        </footer>
    <?php endif ?>
</blockquote>