<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Modifica Menu</h2>

<form action="<?= site_url('menu/update/'.$menu['menu_id']) ?>" method="post">
    <label for="name">Nome menù:</label>
    <input type="text" name="menu_name" id="menu_name" value="<?= $menu['menu_name'] ?>" required>

    <label for="name">Descrizione:</label>
    <input type="text" name="description" id="description" value="<?= $menu['description'] ?>" required>

    <label for="name">Prezzo per persona:</label>
    <input type="text" name="price_per_person" id="price_per_person" value="<?= $menu['price_per_person'] ?>" required>
    
    <button type="submit">Salva modifiche</button>
</form>

<?= $this->endSection() ?>
