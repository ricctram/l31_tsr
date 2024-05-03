        <!-- Footer -->
        <footer class="content-footer footer bg-light">
          <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 py-3">
            <div>
              <small>Riccardo Tramonte © <?= date('Y') ?> - Tutti i diritti riservati</small><br>
            </div>
            <div>
              <a href="<?= base_url('downloads/tesi.pdf'); ?>" class="footer-link me-4">Tesi</a>
              <a href="<?= base_url(); ?>contatti" class="footer-link">Contatti</a>
            </div>
          </div>
        </footer>
        <!--/ Footer -->

        <!-- Content area backdrop -->
        <div class="content-backdrop fade"></div>
      </div>
      <!--/ Content wrapper -->

    </div>
    <!--/ Layout page -->

  </div>
  <!--/ Layout container -->

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>
</div>
<!--/ Layout wrapper -->


<!-- Script JavaScript -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?=base_url('assets/vendor/libs/jquery/jquery.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/popper/popper.js');?>"></script>
<script src="<?=base_url('assets/vendor/js/bootstrap.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/hammer/hammer.js');?>"></script>
<script src="<?=base_url('assets/vendor/js/menu.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/i18n/i18n.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/bs-stepper/bs-stepper.js');?>"></script>
<script src="<?=base_url('assets/vendor/libs/sweetalert2/sweetalert2.js');?>"></script>
<!-- endbuild -->

<!-- Main JS -->
<script src="<?=base_url('assets/js/main.js');?>"></script>

<!-- Custom JS globali -->
<script src="<?=base_url('assets/js/custom.js');?>"></script>

<!-- Custom JS locali -->
<?= $this->renderSection('script') ?>