<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><?php echo lang('Auth.login_heading');?></h1>
<p><?php echo lang('Auth.login_subheading');?></p>

<?php echo $message;?>

<?php echo form_open('auth/login');?>

<?php 
    $attributesLabel = [
          'class' => 'form-label',
    ];
    $attributesSubmit = [
          'class' => 'btn btn-success btn-submit',
    ];
    ?>

<div class="row g-3">
    <div class="col-md-6">
      
      <div class="mb-3">
        <?php echo form_label(lang('Auth.login_identity_label'), 'identity', $attributesLabel);?>
        <?php echo form_input($identity);?>
      </div>
      
      <div class="mb-3">
        <?php echo form_label(lang('Auth.login_password_label'), 'password', $attributesLabel);?>
        <?php echo form_input($password);?>
      </div>
      
      <div class="mb-3">
        <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
        <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
      </div>
    
    </div>    
</div>

<div class="row g-3 mb-3">
    <div class="col-md-6">
      <?php echo form_submit('submit', lang('Auth.login_submit_btn'), $attributesSubmit);?>
    </div>
</div>

<?php echo form_close();?>

<div class="row g-3">
  <div class="col-md-6">
    <p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password');?></a></p>
  </div>
</div>

<?= $this->endSection() ?>
