<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
  data-assets-path="<?=base_url('assets/');?>" data-template="vertical-menu-template-starter">

    <?= $this->include('partials/head'); ?>

    <?= $this->renderSection('additional_data') ?>

<body>

    <?= $this->include('partials/header'); ?>
    <?= $this->include('partials/main'); ?>
    <?= $this->include('partials/footer'); ?>

</body>

</html>
