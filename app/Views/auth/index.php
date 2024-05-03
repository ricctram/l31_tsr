<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col">
    <h1><i class="bx bx-user bx-md"></i> <?php echo lang('Auth.index_heading');?></h1>
    </div>
    <div class="col mt-3">
        <a class="btn btn-secondary float-end" href="<?= base_url(); ?>auth/create_group">Aggiungi gruppo</a>
        <a class="btn btn-primary float-end me-3" href="<?= base_url(); ?>auth/create_user">Aggiungi utente</a>
    </div>
</div>

<p><?php echo lang('Auth.index_subheading');?></p>

<?php echo $message;?>


<div class="table-responsive">
  <table class="table">
    <thead>
		<tr>
			<th><?php echo lang('Auth.index_fname_th');?></th>
			<th><?php echo lang('Auth.index_lname_th');?></th>
			<th><?php echo lang('Auth.index_email_th');?></th>
			<th><?php echo lang('Auth.index_groups_th');?></th>
			<th><?php echo lang('Auth.index_status_th');?></th>
			<th><?php echo lang('Auth.index_action_th');?></th>
		</tr>
    </thead>
    <tbody>
	<?php foreach ($users as $user):?>
      <tr>
        <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
        <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
		<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
        <td>
			<?php foreach ($user->groups as $group):?>
				<?php if ($group->name == "admin") :?>					
					<?php echo anchor('auth/edit_group/' . $group->id, '<span class="badge bg-danger">' . htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?>
				<?php elseif ($group->name == "cliente") : ?>					
					<?php echo anchor('auth/edit_group/' . $group->id, '<span class="badge bg-success">' . htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?>
				<?php else : ?>					
					<?php echo anchor('auth/edit_group/' . $group->id, '<span class="badge bg-primary">' . htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?>
				<?php endif; ?>
			<?php endforeach?>
		</td>
		<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, '<i class=\'bx bx-check-circle bx-sm text-success\' ></i>') : anchor("auth/activate/". $user->id, '<i class=\'bx bx-check-circle bx-sm text-danger\' ></i>');?></td>
        <td>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
            <div class="dropdown-menu">
				<?php echo anchor('auth/edit_user/' . $user->id, '<i class="bx bx-edit-alt me-1"></i>' . lang('Auth.index_edit_link'), 'class = "dropdown-item"') ;?>
				<?php echo anchor('auth/delete_user/' . $user->id, '<i class="bx bx-trash me-1"></i>' . lang('Auth.index_delete_link'), 'class = "dropdown-item" onclick="return confirm(\'Sei sicuro di voler eliminare questo gruppo?\')"') ;?>
            </div>
          </div>
        </td>
      </tr>
	<?php endforeach;?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>




<?= $this->section('script') ?>

<script>

const confirmText = document.querySelector('#confirm-text');

// ALERT WITH FUNCTIONAL CONFIRM BUTTON
confirmText.onclick = function() {
  Swal.fire({
    title: 'Sei sicuro?',
    text: "Non si torna indietro!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, eliminalo!',
    customClass: {
      confirmButton: 'btn btn-primary me-1',
      cancelButton: 'btn btn-label-secondary'
    },
    buttonsStyling: false
  }).then(function(result) {
    if (result.value) {
      Swal.fire({
        icon: 'success',
        title: 'Eliminato!',
        text: 'Il record è stato correttamente eliminato.',
        customClass: {
          confirmButton: 'btn btn-success'
        }
      });
    }
  });
}

</script>

<?= $this->endSection() ?>
