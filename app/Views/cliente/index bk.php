<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Elenco Clienti</h2>
<?php if (empty($customers)): ?>
    <p>Nessun cliente presente nel database al momento.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer['customer_id'] ?></td>
                <td><?= $customer['first_name'] ?></td>
                <td><?= $customer['last_name'] ?></td>
                <td><?= $customer['phone'] ?></td>
                <td><?= $customer['email'] ?></td>
                <td>
                    <a href="<?= site_url('cliente/edit/'.$customer['customer_id']) ?>">Modifica</a>
                    <a href="<?= site_url('cliente/delete/'.$customer['customer_id']) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo cliente?')">Elimina</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?= $this->endSection() ?>
