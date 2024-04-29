<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Elenco Clienti</h2>
<?php if (empty($clienti)): ?>
    <p>Nessun cliente presente nel database al momento.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clienti as $cliente): ?>
            <tr>
                <td><?= $cliente->first_name ?></td>
                <td><?= $cliente->last_name ?></td>
                <td><?= $cliente->phone ?></td>
                <td><?= $cliente->email ?></td>
                <td>
                    <a href="<?= site_url('auth/edit_user/'.$cliente->id) ?>">Modifica</a>
                    <a href="<?= site_url('auth/delete_user/'.$cliente->id) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo cliente?')">Elimina</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?= $this->endSection() ?>
