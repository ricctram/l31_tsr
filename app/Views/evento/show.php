<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h2>Dettagli Evento</h2>
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
            <tr>
                <td><?= $evento['event_date'] ?></td>
                <td><?= $evento['event_type'] ?></td>
                <td><?= $evento['guest_count']?></td>
                <td><?= $evento['notes']?></td>
                <td>
                    <a href="<?= site_url('evento/edit/'.$evento['event_id']) ?>">Modifica</a>
                    <a href="<?= site_url('evento/delete/'.$evento['event_id']) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo evento?')">Elimina</a>
                </td>
            </tr>
    </tbody>
</table>
<?= $this->endSection() ?>
