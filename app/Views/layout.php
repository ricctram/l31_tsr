<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Senza titolo' ?></title>
    <meta name="description" content="The small framework with powerful features">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <!-- Header -->
        <h1>Header del Sito</h1>
        <nav>
            <ul>
                <li><a href="<?= base_url(); ?>">Bacheca</a></li>
                <li>
                    <a href="<?= base_url(); ?>cliente">Clienti</a>
                    <ul>
                        <li><a href="<?= base_url(); ?>cliente/create">Aggiungi Cliente</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url(); ?>evento">Eventi</a></li>
                <li><a href="<?= base_url(); ?>prenotazione">Prenotazioni</a></li>
                <li><a href="<?= base_url(); ?>menu">Menu</a></li>
                <li>
                    <a href="<?= base_url(); ?>auth">Utenti</a>
                    <ul>
                        <li><a href="<?= base_url(); ?>auth/create_user">Aggiungi Utente</a></li>
                        <li><a href="<?= base_url(); ?>auth/create_group">Aggiungi Gruppo</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url(); ?>profilo">Profilo</a></li>
            </ul>
        </nav>
    </header>

    <hr>

    <main>
        <!-- Area messaggi -->
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
            <div class="alert alert-error">
                <?= session('error') ?>
            </div>
        <?php endif; ?>
        
        <!-- Contenuto dinamico -->
        <?= $this->renderSection('content') ?>
    </main>

    <hr>

    <footer>
        <!-- Footer -->
        <p>Tutti i diritti riservati &copy; <?= date('Y') ?> - Corso di Laurea L31 - Insegnamento: Tecnologie Web - Anno accademico: 2023/24</p>
        <p>Relatore: Prof. Stefano D'Urso - Candidato: Riccardo Tramonte (Matr. 0312200265)</p>
    </footer>

    <!-- Script JavaScript -->
    <script src="/js/script.js"></script>
    <script {csp-script-nonce}>
        document.getElementById("menuToggle").addEventListener('click', toggleMenu);
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>
</body>

</html>
