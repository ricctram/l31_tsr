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



<div class="nav-align-top">
  <ul class="nav nav-tabs tabs-line" role="tablist">
    <li class="nav-item">
      <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#nav-info-evento" aria-controls="navs-tabs-line-top-home" aria-selected="true">Info evento</button>
    </li>
    <li class="nav-item">
      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#nav-menu" aria-controls="navs-tabs-line-top-profile" aria-selected="false">Menu</button>
    </li>
    <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#nav-tavoli" aria-controls="navs-tabs-line-top-messages" aria-selected="false">Tavoli</button>
    </li>
    <li class="nav-item">
        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#nav-pagamenti" aria-controls="navs-tabs-line-top-messages" aria-selected="false">Pagamenti</button>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade show active" id="nav-info-evento" role="tabpanel">
    <p class="mb-0">
        Info evento
      </p>
    </div>
    <div class="tab-pane fade" id="nav-menu" role="tabpanel">
      <p class="mb-0">
        Lista menù scelta
      </p>
    </div>
    <div class="tab-pane fade" id="nav-tavoli" role="tabpanel">
        <p class="mb-0">
        Impostazione tavoli modificabile entro ...
      </p>
    </div>
    <div class="tab-pane fade" id="nav-pagamenti" role="tabpanel">
    <p class="mb-0">
        Tabella pagamenti
      </p>
    </div>
  </div>
</div>


<?= $this->endSection() ?>
