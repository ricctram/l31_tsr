<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1> <i class="bx bx-bowl-hot bx-md"></i> Modifica Piatto</h1>

<form action="<?= site_url('menu_item/update/'.$menu_item['item_id']) ?>" method="post">

<div class="row g-3">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="item_name" class="form-label">Nome piatto:</label>
                <input type="text" name="item_name" class="form-control form-control-lg" id="item_name" aria-describedby="defaultFormControlHelp" value="<?= $menu_item['item_name'] ?>" required/>
            <div id="defaultFormControlHelp" class="form-text">Inserisci un nome descrittivo per il tuo menù</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
                <input type="text" name="description" class="form-control form-control-lg" id="description" aria-describedby="defaultFormControlHelp" value="<?= $menu_item['description'] ?>" required/>
            <div id="defaultFormControlHelp" class="form-text">Puoi inserire una descrizione più dettagliata qui per i tuoi clienti</div>            
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
                <div class="input-group">
                    <span class="input-group-text">€</span>
                    <input type="number" name="price" class="form-control form-control-lg" id="price" aria-describedby="defaultFormControlHelp" value="<?= $menu_item['price'] ?>" required/>
                    <span class="input-group-text">.00</span>
                </div>
            <div id="defaultFormControlHelp" class="form-text">Inserisci il prezzo del piatto</div>            
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Salva piatto</button>
    </div>
</div>
    
</form>

<?= $this->endSection() ?>
