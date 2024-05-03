<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1> <i class="bx bx-bowl-hot bx-md"></i> Elenco Piatti</h1>
<?php if (empty($menu_items)): ?>
    <p>Nessun piatto al momento disponibile.</p>
<?php else: ?>

<div class="table-responsive">
  <table class="table">
    <thead>
		<tr>
            <th>Nome piatto</th>
            <th>Descrizione</th>
            <th>Prezzo piatto</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menu_items as $menu_item): ?>
            <tr>
                <td><?= $menu_item['item_name'] ?></td>
                <td><?= $menu_item['description'] ?></td>
                <td><?= $menu_item['price'] ?></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <?php echo anchor('menu_item/edit/'.$menu_item['item_id'], '<i class="bx bx-edit-alt me-1"></i> Modifica', 'class = "dropdown-item"') ;?>
                            <?php echo anchor('menu_item/delete/'.$menu_item['item_id'], '<i class="bx bx-trash me-1"></i> Elimina', 'class = "dropdown-item" onclick="return confirm(\'Sei sicuro di voler eliminare questo piatto?\')"') ;?>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php endif; ?>
<?= $this->endSection() ?>
