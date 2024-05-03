<?= $this->extend('layout') ?>

<?= $this->section('content') ?>


<div class="row">
    <div class="col">
    <h1> <i class="bx bx-dish bx-md"></i> Elenco Menu</h1>
    </div>
    <div class="col mt-3">
        <a class="btn btn-primary float-end" href="<?= base_url(); ?>menu/create">Aggiungi menu</a>
    </div>
</div>


<?php if (empty($menus)): ?>
    <p>Nessun menu presente nel database al momento.</p>
<?php else: ?>

<p>Lista di menu disponibili</p>

<div class="table-responsive">
  <table class="table">
    <thead>
		<tr>
			<th>Nome</th>
			<th>Descrizione</th>
			<th>Prezzo per persona</th>
            <th>Azioni</th>
		</tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $menu): ?>
            <tr>
                <td><?= $menu['menu_name'] ?></td>
                <td><?= $menu['description'] ?></td>
                <td><?= "€" . $menu['price_per_person'] ?></td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <?php echo anchor('menu/edit/' . $menu['menu_id'], '<i class="bx bx-edit-alt me-1"></i> Modifica', 'class = "dropdown-item"') ;?>
                            <?php echo anchor('menu/delete/' . $menu['menu_id'], '<i class="bx bx-trash me-1"></i> Elimina', 'class = "dropdown-item" onclick="return confirm(\'Sei sicuro di voler eliminare questo menu?\')"') ;?>
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
