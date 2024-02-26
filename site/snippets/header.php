<!doctype html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="author" content="<?= $site->author() ?>">
    <meta name="keywords" content="<?= $site->keywords() ?>">

    <link rel="shortcut icon" href="<?= $kirby->url('assets') ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= $kirby->url('assets') ?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url('assets') ?>/img/apple-touch-icon.png">

    <link rel="alternate" type="application/json" title="Aktuelle Notes" href="<?= site()->url() ?>/notes.json">
    <link rel="alternate" type="application/rss+xml" title="Aktuelle Notes" href="<?= site()->url() ?>/feed">
    <link rel="preload" href="<?= $kirby->url('assets') ?>/fonts/HubotSans.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= $kirby->url('assets') ?>/fonts/MonaSans.woff2" as="font" type="font/woff2" crossorigin>

    <meta property="og:site_name" content="<?= $site->title()->html() ?>">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:type=" content="website">
    <meta property="og:title" content="<?= $page->title()->html() ?>">
    <meta property="og:description" content="<?= $page->text()->toBlocks()->excerpt(50) ?>">
    <meta property="og:image:type" content="image/png">

    <meta property="og:image" content="<?= e($page->template()->name() === 'note', $page->url() . '.png', $kirby->url('assets') . '/img/og-default.png') ?>">

    <title><?= $site->title() ?> &middot; <?= $page->title() ?></title>

    <?= css(['assets/css/pure-base.min.css', '@auto']) ?>
    <?= css(['assets/css/pure-grid.min.css', '@auto']) ?>
    <?= css(['assets/css/pure-grid-responsive.min.css', '@auto']) ?>
    <?= css(['assets/css/styles.min.css', '@auto']) ?>

</head>

<body>

    <header id="header" class="container">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3 margin-center-md flex">
                <a href="/"><img src="<?= url('assets/img/logo.svg') ?>" alt="Andr&eacute; Dujardin" class="logo"></a>
            </div>
            <div class="pure-u-1 pure-u-md-2-3 margin-center-md flex">
                <nav class="navigation d-sm-pull-right">
                    <ul>
                    <?php foreach ($site->children()->listed() as $item) : ?>
                        <li <?php e($item->isActive(), 'class="active"') ?>><?= $item->title()->link() ?></li>
                    <?php endforeach ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>