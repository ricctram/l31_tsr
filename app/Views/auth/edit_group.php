<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><i class="bx bx-user bx-md"></i> <?php echo lang('Auth.edit_group_heading');?></h1>
<p><?php echo lang('Auth.edit_group_subheading');?></p>

<?php echo $message;?>

<?php echo form_open(current_url());?>

      <?php 
            $attributesLabel = [
                  'class' => 'form-label',
            ];
            $attributesSubmit = [
                  'class' => 'btn btn-primary',
            ];
      ?>

      <div class="mb-3">
            <?php echo form_label(lang('Auth.edit_group_name_label'), 'group_name', $attributesLabel);?> <br />
            <?php echo form_input($group_name);?>
            
            <?php if ($group_default || $group_admin): ?>
                  <small>Campo non modificabile</small>
            <?php endif; ?>
      </div>

      <div class="mb-3">
            <?php echo form_label(lang('Auth.edit_group_desc_label'), 'description', $attributesLabel);?> <br />
            <?php echo form_input($group_description);?>
      </div>

      <div class="mb-12">
            <?php echo form_submit('submit', lang('Auth.edit_group_submit_btn'), $attributesSubmit);?>
            <?php if (!$group_default && !$group_admin): ?>
                  <a class="btn btn-danger" href="<?= site_url('auth/delete_group/'.$id) ?>" onclick="return confirm('Sei sicuro di voler eliminare questo gruppo?')">Elimina</a>
            <?php endif; ?>
      </div>


<?php echo form_close();?>

<?= $this->endSection() ?>