<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Modifica Cliente</h2>

<form action="<?= site_url('cliente/update/'.$customer['customer_id']) ?>" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="first_name" id="first_name" value="<?= $customer['first_name'] ?>" required>

    <label for="name">Cognome:</label>
    <input type="text" name="last_name" id="last_name" value="<?= $customer['last_name'] ?>" required>

    <label for="name">Telefono:</label>
    <input type="tel" name="phone" id="phone" value="<?= $customer['phone'] ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $customer['email'] ?>" required>
    
    <button type="submit">Salva</button>
</form>

<?= $this->endSection() ?>
