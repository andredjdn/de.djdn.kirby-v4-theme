<?php snippet('header') ?>
<?php $resources = $page->resources()->toStructure(); ?>

<section id="page">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <article>
                    <header>
                        <h1><?= $page->title()->html() ?></h1>
                    </header>
                    <div class="content">
                        <?= $page->text()->toBlocks() ?>
                    </div>
                    <?php if ($resources) : ?>
                        <div class="resources">
                            <table>
                                <tr>
                                    <th>Ressource</th>
                                    <th>Typ</th>
                                    <th>Lizenz</th>
                                </tr>
                                <?php foreach ($resources as $resouce) : ?>
                                    <tr>
                                        <td><a href="<?= $resouce->link()->toHtml() ?>"><?= $resouce->title() ?></a></td>
                                        <td><?= $resouce->category() ?></td>
                                        <td><?= $resouce->license() ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                    <?php endif ?>
                    <footer>
                        <a href="<?= url('/') ?>">⟵ Home</a>
                    </footer>
                </article>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>