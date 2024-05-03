<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><i class="bx bx-user bx-md"></i> <?php echo lang('Auth.create_group_heading');?></h1>
<p><?php echo lang('Auth.create_group_subheading');?></p>

<?php echo $message;?>

<?php echo form_open("auth/create_group");?>

      <?php 
            $attributesLabel = [
                  'class' => 'form-label',
            ];
            $attributesSubmit = [
                  'class' => 'btn btn-primary',
            ];
      ?>

<div class="row g-3">
    <div class="col-md-6"> 
      <div class="mb-3">
            <?php echo form_label(lang('Auth.create_group_name_label'), 'group_name', $attributesLabel);?>
            <?php echo form_input($group_name);?>
      </div>

      <div class="mb-3">
            <?php echo form_label(lang('Auth.create_group_desc_label'), 'description', $attributesLabel);?> <br />
            <?php echo form_input($description);?>
      </div>
      </div>
</div>
<div class="row g-3">
      <div class="mb-3">
      <?php echo form_submit('submit', lang('Auth.create_group_submit_btn'), $attributesSubmit);?>
      </div>
</div>

<?php echo form_close();?>

<?= $this->endSection() ?>