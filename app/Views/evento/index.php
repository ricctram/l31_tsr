<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1> <i class="bx bx-calendar bx-md"></i> Elenco Eventi</h1>
<?php if (empty($eventi)): ?>
    <p>Nessun evento presente nel database al momento.</p>
<?php else: ?>

<p>Lista eventi</p>

<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th>Data evento</th>
            <th>Tipo evento</th>
            <th>Riferimento cliente</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>N. Ospiti</th>
            <th>Azioni</th>
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
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <?php echo anchor('evento/edit/'.$evento['event_id'], '<i class="bx bx-edit-alt me-1"></i> Modifica', 'class = "dropdown-item"') ;?>
                            <?php echo anchor('evento/delete/'.$evento['event_id'], '<i class="bx bx-trash me-1"></i> Elimina', 'class = "dropdown-item" onclick="return confirm(\'Sei sicuro di voler eliminare questo evento?\')"') ;?>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php endif; ?>
<?= $this->endSection() ?>
