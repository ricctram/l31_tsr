<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1> <i class="bx bx-dish bx-md"></i> Crea nuovo Menu</h1>

<form action="<?= site_url('menu/store') ?>" method="post">

<div class="row g-3">
    
    <div class="col-md-6">
        <div class="mb-3">
            <label for="menu_name" class="form-label">Nome menù:</label>
                <input type="text" name="menu_name" class="form-control form-control-lg" id="menu_name" aria-describedby="defaultFormControlHelp" required/>
            <div id="defaultFormControlHelp" class="form-text">Inserisci un nome descrittivo per il tuo menù</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
                <input type="text" name="description" class="form-control form-control-lg" id="description" aria-describedby="defaultFormControlHelp" required/>
            <div id="defaultFormControlHelp" class="form-text">Puoi inserire una descrizione più dettagliata qui per i tuoi clienti</div>        
        </div>
        <div class="mb-3">
            <label for="price_per_person" class="form-label">Prezzo per persona:</label>
            <div class="input-group">
                <span class="input-group-text">€</span>
                <input type="number" name="price_per_person" class="form-control form-control-lg" id="price_per_person" aria-describedby="defaultFormControlHelp" required/>
                <span class="input-group-text">.00</span>
            </div>
            <div id="defaultFormControlHelp" class="form-text">Inserisci il prezzo a persona per il tuo menù</div>        
        </div>
    </div>

    <div class="col-12 my-5">

        <?php if (!empty($menu_items)) :?>
            <h3>Scegli cosa inserire nel menù</h3>
            
            <?php foreach ($menu_items as $menu_item) : ?>
                <label class="checkbox switch switch-primary">
                    
                    <input type="checkbox" class="switch-input" name="menu_items[]" value="<?= $menu_item['item_id'] ?>">
                                            
                    <span class="switch-toggle-slider">
                        <span class="switch-on">
                        <i class="bx bx-check"></i>
                        </span>
                        <span class="switch-off">
                        <i class="bx bx-x"></i>
                        </span>
                    </span>
                    <span class="switch-label"><?= $menu_item['item_name'] ?></span>
            
                </label>
            <?php endforeach; ?>

        <?php else:?>
                <p>Non ci sono elementi disponibili per il menù. <a href="#">Aggiungili da qui</a></p>
        <?php endif;?>

    </div>
</div>

<div class="row g-3">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Aggiungi menu</button>
    </div>
</div>

</form>
<?= $this->endSection() ?>
