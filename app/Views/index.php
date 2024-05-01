<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- CONTENT -->

<section>

<h1>Tesi di laurea</h1>

    <pre><code>app/Views/welcome_message.php</code></pre>

    <p>The corresponding controller for this page can be found at:</p>

    <pre><code>app/Controllers/Home.php</code></pre>

</section>

<div>

    <section>        

        <h2>
            Titolo 2
        </h2>

    </section>

</div>
<?= $this->endSection() ?>

<?php $this->section('additional_data') ?>
    <?php
    // Includi $ionAuth nel layout per renderlo disponibile in tutto il layout
    echo view('partials/additional_data', ['ionAuth' => $ionAuth]);
    ?>
<?php $this->endSection() ?>
