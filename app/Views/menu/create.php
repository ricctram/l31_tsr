<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Crea nuovo Menu</h2>

<form action="<?= site_url('menu/store') ?>" method="post">

    <div>
    <label for="menu_name">Nome menu:</label>
    <input type="text" name="menu_name" id="menu_name" required>
    </div>

    <div>
    <label for="description">Descrizione:</label>
    <input type="text" name="description" id="description" required>
    </div>

    <div>
    <label for="price_per_person">Prezzo per persona:</label>
    <input type="text" name="price_per_person" id="price_per_person" required>
    </div>

    <?php if (!empty($menu_items)) :?>
        <h3>Scegli cosa inserire nel menù</h3>
        <?php foreach ($menu_items as $menu_item) : ?>
            <input type="checkbox" name="menu_items[]" value="<?= $menu_item['item_id'] ?>">
            <label for="menu_item_<?= $menu_item['item_id'] ?>"> <?= $menu_item['item_name'] ?></label><br>
        <?php endforeach; ?>        
        <?php else:?>
            <p>Non ci sono elementi disponibili per il menù. <a href="#">Aggiungili da qui</a></p>
    <?php endif;?>
    
    <button type="submit">Aggiungi menu</button>
</form>
<?= $this->endSection() ?>
