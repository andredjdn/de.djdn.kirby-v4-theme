<?php snippet('header') ?>

<section id="search">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <form>
                    <input type="search" name="q" value="<?= html($query) ?>">
                    <input type="submit" value="Search">
                </form>
                <ul>
                    <?php foreach ($results as $result) : ?>
                        <li>
                            <a href="<?= $result->url() ?>"><?= $result->title() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>