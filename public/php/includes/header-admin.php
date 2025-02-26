<?php
require_once "session.php";
require_once(__DIR__ . "../../queries/user_search.php");
?>
<header id="header">
    <nav class="container header-admin">
        <div class="logo">
            <a href="../../public/usuario/search_anime.php">
                <img src="../../public/icon/logo.svg" alt="Logo do Site">
            </a>
        </div>
        <div class="flex">
            <form action="" method="post">
                <input type="text" class="input" placeholder="Pesquisar" name="search">
                <img src="./../icon/search.svg" alt="">
            </form>
            <div class="user flex">
                <li data-dropdown class="flex">
                    <a href="#"><?php foreach ($usuario as $user): ?>
                            <p><?php echo htmlspecialchars($user['username']); ?></p>
                        <?php endforeach; ?>
                    </a>
                    <img src="./../icon/arrow.svg" alt="">
                    <ul class="dropdown">
                        <li>
                            <a href="../../public/usuario/add_anime.php">Adicionar anime</a>
                        </li>
                        <li>
                            <a href="../../public/usuario/perfil.php">Alterar perfil</a>
                        </li>
                        <li>
                            <a href="../php/logoff.php">
                                Sair
                            </a>
                        </li>
                    </ul>
                </li>

            </div>
        </div>
    </nav>
    <script src="./../js/script.js"></script>
    <script src="./../js/modal.js"></script>
    <?php
    require_once("warning.php");
    ?>
</header>