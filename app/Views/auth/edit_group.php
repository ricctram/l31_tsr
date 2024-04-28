<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><?php echo lang('Auth.edit_group_heading');?></h1>
<p><?php echo lang('Auth.edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo form_label(lang('Auth.edit_group_name_label'), 'group_name');?> <br />
            <?php echo form_input($group_name);?>
            
            <?php if ($group_default || $group_admin): ?>
                  <small>Campo non modificabile</small>
            <?php endif; ?>
      </p>

      <p>
            <?php echo form_label(lang('Auth.edit_group_desc_label'), 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('Auth.edit_group_submit_btn'));?></p>

      <?php if (!$group_default && !$group_admin): ?>
            <a href="<?= site_url('auth/delete_group/'.$id) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo gruppo?')">Elimina</a>
      <?php endif; ?>


<?php echo form_close();?>

<?= $this->endSection() ?>