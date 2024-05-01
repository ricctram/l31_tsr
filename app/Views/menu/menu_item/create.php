<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Crea nuovo Piatto</h2>

<form action="<?= site_url('menu_item/store') ?>" method="post">

    <label for="item_name">Nome piatto:</label>
    <input type="text" name="item_name" id="item_name" required>

    <label for="description">Descrizione:</label>
    <input type="text" name="description" id="description" required>

    <label for="price">Prezzo:</label>
    <input type="text" name="price" id="price" required>
    
    <button type="submit">Aggiungi piatto</button>
</form>
<?= $this->endSection() ?>
