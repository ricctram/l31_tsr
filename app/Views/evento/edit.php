<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<h1> <i class="bx bx-calendar bx-md"></i> Modifica Evento</h1>

    <form action="<?= base_url('evento/update/' . $evento['event_id']) ?>" method="post">


    <div class="row g-3">
      <div class="col-md-6">
          
          <div class="mb-3">            
            <label for="user_id" class="form-label">Utente:</label>
            <select name="user_id" id="user_id" class="form-select form-select-lg mb-3" data-style="btn-default" required>
              <option value="">Seleziona un utente</option>
              <?php foreach ($utenti as $utente) : ?>
                  <option value="<?= $utente['id'] ?>" <?= ($utente['id'] == $evento['user_id']) ? 'selected' : '' ?>>
                      <?= $utente['first_name'] ?> <?= $utente['last_name'] ?> - <?= $utente['email'] ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <a class="btn btn-primary btn-sm" onclick="return confirm('Sei sicuro di lasciare la pagina?')" href="<?= base_url(); ?>auth/create_user"><i class='bx bx-link-external' ></i> Aggiungi utente</a>
          </div>
          
          <div class="mb-3">
            <label for="event_date" class="form-label">Data Evento:</label>
            <input type="date" class="form-control form-control-lg" name="event_date" id="event_date" value="<?= $evento['event_date'] ?>" required>
          </div>
          
          <div class="mb-3">
            <label for="event_type" class="form-label">Tipo Evento:</label>
            <input type="text" class="form-control form-control-lg" name="event_type" id="event_type" value="<?= $evento['event_type'] ?>" required>
          </div>
          
          <div class="mb-3">
            <label for="guest_count" class="form-label">Numero Ospiti:</label>
            <input type="number" class="form-control form-control-lg" name="guest_count" id="guest_count" value="<?= $evento['guest_count'] ?>" required>
          </div>
          
          <div class="mb-3">
              <label for="notes" class="form-label">Note:</label>
              <textarea class="form-control form-control-lg" name="notes" id="notes"><?= $evento['notes'] ?></textarea>
          </div>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-md-6">
          <div class="mb-3">
          <input type="submit" class="btn btn-primary" value="Salva Modifiche">
          </div>
      </div>
    </div>

    </form>

<?= $this->endSection() ?>