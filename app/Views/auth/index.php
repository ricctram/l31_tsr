<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><?php echo lang('Auth.index_heading');?></h1>
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
		<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link')) : anchor("auth/activate/". $user->id, lang('Auth.index_inactive_link'));?></td>
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

<p><?php echo anchor('auth/create_user', lang('Auth.index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('Auth.index_create_group_link'))?></p>

<?= $this->endSection() ?>
