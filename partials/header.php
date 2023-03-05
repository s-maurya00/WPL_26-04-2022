<?php
    echo '<!-- header section starts  -->

        <header>

            <a href="#" class="logo"><span>real</span>Estate</a>

            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="featured.php">featured</a>
                <a href="agents.php">agents</a>
                <a href="'.(isset($_SESSION['user_name']) ? 'sell.php' : '#').'" onclick="callLogin()">rent / sell</a>
                <a href="contact.php">contact</a>
            </nav>

            <div class="icons">
                <div id="menu-bars" class="fas fa-bars"></div>
                <a id="user-favs" href="#" class="fas fa-heart"></a>
                <div id="login-btn" class="fas fa-user"></div> '

                .(isset($_SESSION['user_name']) ? '<div class="account-box"> <p>username: <span>'.$_SESSION['user_name'].'</span> </p>': '').'
                '.(isset($_SESSION['user_email']) ? '<p>email: <span>'.$_SESSION['user_email'].'</span> </p>': '').'
                '.(isset($_SESSION['user_name']) ? '<a href="partials/logout.php" class="delete-btn">logout</a> </div>': '').'

            </div>

        </header>

        <!-- header section ends -->';
?>