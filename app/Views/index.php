<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- CONTENT -->

<section>
    <h1>TSR: Tesi Sala Ricevimenti</h1>
    <p>
        Benvenuti nell'applicazione per la gestione delle sale ricevimenti. Sviluppata con cura e attenzione, questa piattaforma offre un sistema completo per semplificare e ottimizzare la gestione di eventi e ricevimenti in ambienti dedicati. Grazie alla sua interfaccia intuitiva e alle sue potenti funzionalità, è possibile gestire facilmente ogni aspetto dell'organizzazione degli eventi, dalla pianificazione dei menù alla disposizione dei tavoli, dalla gestione delle prenotazioni alla gestione dei pagamenti.</p>
    <p>
        L'applicazione utilizza le più recenti tecnologie web per garantire un'esperienza utente fluida e piacevole. Il design responsive consente di accedere e gestire l'applicazione da qualsiasi dispositivo, offrendo flessibilità e mobilità agli utenti. Inoltre, l'integrazione con un sistema SaaS (Software as a Service) consente un accesso rapido e sicuro alle funzionalità dell'applicazione da qualsiasi luogo e in qualsiasi momento, senza la necessità di installare software aggiuntivo.
    </p>
    <p>
        Sia che siate proprietari di sale ricevimenti, organizzatori di eventi o clienti in cerca del luogo perfetto per il vostro evento speciale, questa applicazione vi offre gli strumenti necessari per pianificare e gestire con successo ogni dettaglio. Siamo entusiasti di accompagnarvi in questo viaggio verso eventi indimenticabili e esperienze straordinarie.
    </p>
</section>

<?= $this->endSection() ?>

<?php $this->section('additional_data') ?>
    <?php
    // Includi $ionAuth nel layout per renderlo disponibile in tutto il layout
    echo view('partials/additional_data', ['ionAuth' => $ionAuth]);
    ?>
<?php $this->endSection() ?>
