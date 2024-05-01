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

<?= $this->renderSection('additional_data') ?>

<body>
    <header>
        <!-- Header -->
        <!-- Menu -->
        <nav>
            <ul>
                <li><a href="<?= base_url(); ?>">Bacheca</a></li>
                <?php if ($ionAuth->loggedIn()): ?>
                    <?php if ($ionAuth->inGroup('admin')): ?>
                    <li>
                        <a href="#">Eventi</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>evento">Tutti gli Eventi</a></li>
                            <li><a href="<?= base_url(); ?>evento/create">Aggiungi Evento</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Menu</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>menu">Tutti i Menu</a></li>
                            <li><a href="<?= base_url(); ?>menu/create">Aggiungi Menu</a></li>
                            <li><a href="<?= base_url(); ?>menu_item">Tutti i Piatti</a></li>
                            <li><a href="<?= base_url(); ?>menu_item/create">Aggiungi Piatto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pagamenti</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>pagamenti">Tutti i Pagamenti</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Utenti</a>
                        <ul>
                            <li><a href="<?= base_url(); ?>auth">Tutti gli Utenti</a></li>
                            <li><a href="<?= base_url(); ?>auth/create_user">Aggiungi Utente</a></li>
                            <li><a href="<?= base_url(); ?>auth/create_group">Aggiungi Gruppo</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url(); ?>profilo">Profilo</a></li>
                    <li><a href="<?= base_url(); ?>auth/logout">Esci</a></li>
                    <?php else: ?>
                        <li>
                            <a href="<?= base_url(); ?>evento/miei">Miei eventi</a>
                        </li>
                        <li><a href="<?= base_url(); ?>profilo">Profilo</a></li>
                        <li><a href="<?= base_url(); ?>auth/logout">Esci</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="<?= base_url(); ?>auth/login">Accedi</a></li>
                <?php endif; ?>
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
