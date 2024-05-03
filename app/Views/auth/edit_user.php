<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h1><i class="bx bx-user bx-md"></i> <?php echo lang('Auth.edit_user_heading');?></h1>
<p><?php echo lang('Auth.edit_user_subheading');?></p>

<?php echo $message;?>

<div class="bs-stepper wizard-numbered mt-2">
      <div class="bs-stepper-header">
            
            <div class="step" data-target="#informazioni-personali">
                  <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label mt-1">
                        <span class="bs-stepper-title">Informazioni personali</span>
                        <span class="bs-stepper-subtitle">Aggiungi informazioni personali</span>
                        </span>
                  </button>
            </div>
            <div class="line"></div>
            
            <div class="step" data-target="#dettagli-account">
                  <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label mt-1">
                        <span class="bs-stepper-title">Dettagli account</span>
                        <span class="bs-stepper-subtitle">Aggiungi informazioni account</span>
                        </span>
                  </button>
            </div>

            <div class="step" data-target="#dettagli-gruppo">
                  <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                        <span class="bs-stepper-title">Dettagli gruppo utente</span>
                        <span class="bs-stepper-subtitle">Imposta gruppo utente</span>
                        </span>
                  </button>
            </div>

      </div>

      <div class="bs-stepper-content">

            <?php echo form_open(uri_string());?>

                  <?php 
                  $attributesLabel = [
                        'class' => 'form-label',
                  ];
                  $attributesSubmit = [
                        'class' => 'btn btn-success btn-submit',
                  ];
                  ?>

                  <!-- Informazioni Personali -->
                  <div id="informazioni-personali" class="content">
                        <div class="row g-3">
                              <div class="col-md-6">
                                    <?php echo form_label(lang('Auth.edit_user_fname_label'), 'first_name', $attributesLabel);?> <br />
                                    <?php echo form_input($first_name);?>
                              </div>
                              <div class="col-md-6">
                                    <?php echo form_label(lang('Auth.edit_user_lname_label'), 'last_name', $attributesLabel);?> <br />
                                    <?php echo form_input($last_name);?>
                              </div>
                              <div class="col-md-6">
                                    <?php echo form_label(lang('Auth.edit_user_phone_label'), 'phone', $attributesLabel);?> <br />
                                    <?php echo form_input($phone);?>
                              </div>
                              <div class="col-md-6">
                                    <?php echo form_label(lang('Auth.edit_user_company_label'), 'company', $attributesLabel);?> <br />
                                    <?php echo form_input($company);?>
                              </div>

                              <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" type="button" disabled>
                                          <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                          <span class="align-middle d-sm-inline-block d-none">Indietro</span>
                                    </button>
                                    <button class="btn btn-primary btn-next" type="button">
                                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Avanti</span>
                                          <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                    </button>
                              </div>
                        </div>
                  </div>

                  <!-- Dettagli account -->
                  <div id="dettagli-account" class="content">
                        <div class="row g-3">                  
                              
                              <div class="col-md-6 form-password-toggle">
                                    <?php echo form_label(lang('Auth.edit_user_password_label'), 'password', $attributesLabel);?> <br />
                                    <div class="input-group input-group-merge">
                                          <?php echo form_input($password);?>
                                          <span class="input-group-text cursor-pointer" id="password2"><i class="bx bx-hide"></i></span>
                                    </div>
                              </div>
                              
                              <div class="col-md-6 form-password-toggle">
                                    <?php echo form_label(lang('Auth.edit_user_password_confirm_label'), 'password_confirm', $attributesLabel);?><br />
                                    <div class="input-group input-group-merge">
                                          <?php echo form_input($password_confirm);?>
                                          <span class="input-group-text cursor-pointer" id="confirm-password2"><i class="bx bx-hide"></i></span>
                                    </div>
                              </div>
                              
                              <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" type="button" disabled>
                                          <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                          <span class="align-middle d-sm-inline-block d-none">Indietro</span>
                                    </button>
                                    <button class="btn btn-primary btn-next" type="button">
                                          <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Avanti</span>
                                          <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                    </button>
                              </div>
                        
                        </div>
                  </div>
                  
                  <?php if ($ionAuth->isAdmin()): ?>
                  <!-- Dettagli gruppo -->
                  <div id="dettagli-gruppo" class="content">
                        <div class="content-header mb-3">
                              <h6 class="mb-0"><?php echo lang('Auth.edit_user_groups_heading');?></h6>
                              <small>Imposta il gruppo utente per questo utente</small>
                        </div>
                        <div class="row g-3">                  
                              
                              <div class="col-md-6">                                    
                                    <?php foreach ($groups as $group):?>
                                          
                                          <label class="checkbox switch switch-primary">
                                                <?php
                                                      $gID = $group['id'];
                                                      $checked = null;
                                                      $item = null;
                                                      foreach($currentGroups as $grp) {
                                                            if ($gID == $grp->id) {
                                                                  $checked = ' checked="checked"';
                                                            break;
                                                            }
                                                      }
                                                ?>
                                                <input type="checkbox" class="switch-input" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                                
                                                <span class="switch-toggle-slider">
                                                <span class="switch-on">
                                                      <i class="bx bx-check"></i>
                                                </span>
                                                <span class="switch-off">
                                                      <i class="bx bx-x"></i>
                                                </span>
                                                </span>
                                                <span class="switch-label"><?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8');?></span>
                                          </label>
                                    <?php endforeach ?>

                              </div>
                              
                              <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev" type="button">
                                          <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                          <span class="align-middle d-sm-inline-block d-none">Indietro</span>
                                    </button>
                                    <?php echo form_hidden('id', $user->id);?>
                                    <?php echo form_submit('submit', lang('Auth.edit_user_submit_btn'),$attributesSubmit);?>   
                              </div>   

                        </div>
                  </div>
                  <?php endif ?>

            <?php echo form_close();?>

      </div>
</div>

<?= $this->endSection() ?>
