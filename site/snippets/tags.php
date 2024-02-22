<ul class="tags">
    <?php foreach ($page->tags()->split() as $tag) : ?>
        <li class="tolower"><a href="<?= url('notes', ['params' => ['tag' => $tag]]) ?>">#<?= $tag ?></a></li>
    <?php endforeach; ?>
</ul>