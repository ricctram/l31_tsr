<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Nuovo Evento</h2>
<form action="<?= site_url('evento/store') ?>" method="post">

    <label for="user_id">Utente:</label>
    
    <select name="user_id" id="user_id" required>
        <option value="">Seleziona utente</option>
        <?php foreach ($utenti as $utente) : ?>
            <option value="<?= $utente['id'] ?>">
                <?= $utente['first_name'] ?> <?= $utente['last_name'] ?> - <?= $utente['email'] ?>
            </option>
        <?php endforeach; ?>
    </select> <a href="<?= base_url(); ?>auth/create_user">Aggiungi Utente</a><br>
    
    <label for="event_date">Data Evento:</label>
    <input type="date" name="event_date" id="event_date" required><br>

    <label for="event_type">Tipo Evento:</label>
    <input type="text" name="event_type" id="event_type" required><br>

    <label for="guest_count">Numero Ospiti:</label>
    <input type="number" name="guest_count" id="guest_count" required><br>

    <label for="notes">Note:</label>
    <textarea name="notes" id="notes"></textarea><br>

    <input type="submit" value="Aggiungi evento">

</form>
<?= $this->endSection() ?>