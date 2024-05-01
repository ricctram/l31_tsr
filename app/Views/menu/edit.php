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

    <?php if (!empty($menu_items)) :?>
        <h3>Scegli cosa inserire nel menù</h3>
        
        <?php foreach ($menu_items as $menu_item) : ?>
            <?php $checked = in_array($menu_item['item_id'], $menu_selected_items) ? 'checked' : ''; ?>  
            <input type="checkbox" name="menu_items[]" value="<?= $menu_item['item_id'] ?>" <?= $checked ?>>
            <label for="menu_item_<?= $menu_item['item_id'] ?>"> <?= $menu_item['item_name'] ?></label><br>
        <?php endforeach; ?>        
        
        <?php else:?>
            <p>Non ci sono elementi disponibili per il menù. <a href="#">Aggiungili da qui</a></p>
    <?php endif;?>
    
    <button type="submit">Salva modifiche</button>
</form>

<?= $this->endSection() ?>
