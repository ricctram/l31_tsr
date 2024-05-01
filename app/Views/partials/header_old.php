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