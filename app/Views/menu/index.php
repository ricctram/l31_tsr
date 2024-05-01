<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Elenco Menu</h2>
<?php if (empty($menus)): ?>
    <p>Nessun menu presente nel database al momento.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Prezzo per persona</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menus as $menu): ?>
            <tr>
                <td><?= $menu['menu_name'] ?></td>
                <td><?= $menu['description'] ?></td>
                <td><?= $menu['price_per_person'] ?></td>
                <td>
                    <a href="<?= site_url('menu/edit/'.$menu['menu_id']) ?>">Modifica</a>
                    <a href="<?= site_url('menu/delete/'.$menu['menu_id']) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo cliente?')">Elimina</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?= $this->endSection() ?>
