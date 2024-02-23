<?php $callback = function ($p) {
    return $p->date()->toDate('Y');
} ?>
<section id="teaser-posts">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <?php if ($notes = page('notes')) : ?>
                    <?php if ($latestNotes = $notes->children()->published()->filter(function ($child) { return $child->pinned()->toBool(); })->sortBy('date', 'desc')) : ?>
                        <?php foreach ($latestNotes as $latestNote) : ?>
                            <div class="pinned-note" style="background-image:url('<?= $latestNote->cover()->toFile()->url() ?>');">
                                <time datetime="<?= $latestNote->date() ?>"><img src="<?= url('assets/icons/pushpin-2-line.svg') ?>" class="flex" width="15" height="15" arial-hidden="true"><?= $latestNote->date()->toDate('Y-m-d') ?></time>
                                <div><h4><a href="<?= $latestNote->url() ?>"><?= $latestNote->title() ?></a></h4></div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                    <?php $groupedNotes = $notes->children()->published()->group($callback)->flip(); ?>
                    <?php foreach ($groupedNotes as $year => $notesPerYear) : ?>
                        <h3><?= $year ?></h3>
                        <ul>
                            <?php foreach ($notesPerYear->flip() as $note) : ?>
                                <li><time datetime="<?= $note->date() ?>"><?= $note->date()->toDate('Y-m-d') ?></time>&nbsp;&nbsp;<a href="<?= $note->url() ?>"><?= $note->title() ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
