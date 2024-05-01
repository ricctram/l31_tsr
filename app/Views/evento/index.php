<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Elenco Eventi</h2>
<?php if (empty($eventi)): ?>
    <p>Nessun evento presente nel database al momento.</p>
<?php else: ?>
<table>
    <thead>
        <tr>
            <th>Data evento</th>
            <th>Tipo evento</th>
            <th>Riferimento cliente</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>N. Ospiti</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($eventi as $evento): ?>
            <tr>
                <td><?= $evento['event_date'] ?></td>
                <td><?= $evento['event_type'] ?></td>
                <td><?= $evento['first_name'] ?> <?= $evento['last_name'] ?></td>
                <td><a href="mailto:<?= $evento['email'] ?>"><?= $evento['email'] ?></a></td>
                <td><a href="tel:<?= $evento['phone'] ?>"><?= $evento['phone'] ?></a></td>
                <td><?= $evento['guest_count']?></td>
                <td><?= $evento['notes']?></td>
                <td>
                    <a href="<?= site_url('evento/edit/'.$evento['event_id']) ?>">Modifica</a>
                    <a href="<?= site_url('evento/delete/'.$evento['event_id']) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo evento?')">Elimina</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?= $this->endSection() ?>
