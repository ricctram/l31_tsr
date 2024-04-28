<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Nuovo Cliente</h2>
<form action="<?= site_url('cliente/store') ?>" method="post">
    <label for="first_name">Nome:</label>
    <input type="text" name="first_name" id="first_name" required>
    
    <label for="last_name">Cognome:</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="email">Telefono:</label>
    <input type="phone" name="phone" id="phone" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
    <button type="submit">Salva</button>
</form>
<?= $this->endSection() ?>
