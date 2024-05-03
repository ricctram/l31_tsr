
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><?php echo lang('Auth.deactivate_heading');?></h1>
<p><?php echo sprintf(lang('Auth.deactivate_subheading'), $user->username);?></p>

<?php echo form_open('auth/deactivate/' . $user->id);?>

<?php 
    $attributesLabel = [
          'class' => 'form-check-label',
    ];
    $attributesSubmit = [
          'class' => 'btn btn-success btn-submit',
    ];
    ?>

<div class="row g-3">
    <div class="col-md-6">      
        <div class="mb-3">
          
          <div class="form-check form-check-primary mt-3">
            <input type="radio" name="confirm" value="yes" checked="checked" class="form-check-input"/>
            <?php echo form_label('Si', 'confirm', $attributesLabel);?>
          </div>
          
        </div>
        <div class="mb-3">
          <input type="radio" name="confirm" value="no" class="form-check-input"/>
          <?php echo form_label('No', 'confirm', $attributesLabel);?>
        </div>
    </div>
</div>

<div class="row g-3 mb-3">
    <div class="col-md-6">
      <?php echo form_submit('submit', lang('Auth.deactivate_submit_btn'), $attributesSubmit);?>
    </div>
</div>

  <?php echo form_hidden('id', $user->id); ?>

<?php echo form_close();?>

<?= $this->endSection() ?>
