<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Elenco Piatti</h2>
<?php if (empty($menu_items)): ?>
    <p>Nessun piatto al momento disponibile.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Nome piatto</th>
            <th>Descrizione</th>
            <th>Prezzo piatto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menu_items as $menu_item): ?>
            <tr>
                <td><?= $menu_item['item_name'] ?></td>
                <td><?= $menu_item['description'] ?></td>
                <td><?= $menu_item['price'] ?></td>
                <td>
                    <a href="<?= site_url('menu_item/edit/'.$menu_item['item_id']) ?>">Modifica</a>
                    <a href="<?= site_url('menu_item/delete/'.$menu_item['item_id']) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?= $this->endSection() ?>
