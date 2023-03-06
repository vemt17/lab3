<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>
        <div class="main">
            <h4><?= esc($guest_item['name'])?></h4>
            <?= esc($guest_item['email'])?>
            <br>
            <?= esc($guest_item['project'])?>
            <br>
            <?= esc($guest_item['message'])?>
        </div>
    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>