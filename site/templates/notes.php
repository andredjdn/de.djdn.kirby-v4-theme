<?php snippet('header') ?>
<?php $callback = function ($p) {
    return $p->date()->toDate('Y');
}
?>

<section id="posts">
    <div class="container">
        <div class="pure-g">
            <div class="pure-u-1">
                <?php if ($tag) : ?>
                    <h3>Notes über <span class="secondary"><?= $tag ?></span></h3>
                <?php else : ?>
                    <h3>Notes</h3>
                <?php endif; ?>
                <?php foreach ($groupedNotes = $notes->group($callback) as $year => $notesPerYear) : ?>
                    <h4><?= $year ?></h4>
                    <ul>
                        <?php foreach ($notesPerYear as $note) : ?>
                            <li><time datetime="<?= $note->date() ?>"><?= $note->date()->toDate('Y-m-d') ?></time>&nbsp;<a href="<?= $note->url() ?>"><?= $note->title() ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
                <?php if ($groupedNotes->count() <= 0) : ?>
                    <p>--keine Notes zu finden--</p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>