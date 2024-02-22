<?php $callback = function ($p) {
    return $p->date()->toDate('Y');
} ?>
<section id="teaser-posts">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <?php if ($notes = page('notes')) : ?>
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