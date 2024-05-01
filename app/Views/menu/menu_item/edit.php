<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Modifica Piatto</h2>

<form action="<?= site_url('menu_item/update/'.$menu_item['item_id']) ?>" method="post">

    <label for="item_name">Nome piatto:</label>
    <input type="text" name="item_name" id="item_name" value="<?= $menu_item['item_name'] ?>" required>

    <label for="description">Descrizione:</label>
    <input type="text" name="description" id="description" value="<?= $menu_item['description'] ?>" required>

    <label for="price">Prezzo:</label>
    <input type="text" name="price" id="price" value="<?= $menu_item['price'] ?>" required>
    
    <button type="submit">Salva piatto</button>
</form>

<?= $this->endSection() ?>
