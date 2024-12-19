<?php 
$rows = $block->rows()->toStructure();
if($rows->isNotEmpty()):
?>
<div>
    <table>
        <tr>
            <th>#</th>
            <th>Key</th>
            <th>Fingerprint</th>
        </tr>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?= $row->value()->kirbytextinline() ?></td>
            <?php if ($row->key()->isNotEmpty()) : ?>
            <td><?= $row->key()->kirbytextinline() ?></td>
            <?php endif ?>
            <?php if ($row->fingerprint()->isNotEmpty()) : ?>
            <td><code><?= $row->fingerprint()->html() ?></code></td>
            <?php endif ?>
        </tr>
        <?php endforeach ?>
    </table>
</div>
<?php endif; ?>