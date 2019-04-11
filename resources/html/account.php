<?php
    require("../php/session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BlockBox</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700" rel="stylesheet"> 
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link href="../css/all.css" rel="stylesheet" type="text/css">
        <link href="../css/header.css" rel="stylesheet" type="text/css">
        <link href="../css/account.css" rel="stylesheet" type="text/css">
        <link href="../css/products.css" rel="stylesheet" type="text/css">
        <link href="../css/footer.css" rel="stylesheet" type="text/css">
        <script src="../js/jquery.js"></script>
        <script src="../js/itemCreation.js"></script>
        <script src="../js/main.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div id="header">
          <div id="header-top"> <!-- Top Container -->
            <a href="../../index.php"><img src="../assets/images/blockboxlogo.png" id="header-logo" class="unselectable"></a>
            <div id="header-top-buttons-div">
                <ul id="header-top-buttons" class="list-v">
                    <a href="login.php"><li class="header-btn header-login unselectable">Login</li></a>
                    <a href="signup.php"><li class="header-btn header-signup unselectable">Signup</li></a>
                    <a href=""><li class="header-username unselectable hidden"></li></a>
                    <a href="account.php"><li class="header-btn header-account unselectable hidden">Account</li></a>
                </ul>
            </div>
            <a href="checkout.php"><img src="../assets/images/cart.png" id="header-cart" class="unselectable"></a>
          </div>
          <div id="header-bottom"> <!-- Bottom Container -->
            <ul id="cat-btns" class="list-v">
                <a href="../../index.php"><li id="cat-Home" class="header-btn-secondary unselectable">Home</li></a>
            </ul>
          </div>
        </div>
        <!-- Body -->
        <a onclick="logout()" href="../../index.php" class="header-logout unselectable">Logout</a>
         <div class="list-container">
            <h2 class="list-title">Orders</h2>
            <ul class="orders list-items">
                <li class="list-item-li order-template hidden">
                    <ul class="list-item-info">
                        <li class="list-item-info-li list-item-list"></li>
                        <li class="list-item-info-li list-item-id"></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Footer -->
        <div id="footer">
            <ul id="footer-links"> <!-- Links -->
                <li class="footer-link"><a href="about.php">About Us</a></li>
            </ul>
            <p id="footer-copyright">Copyright 2020</p>
        </div>
        <?php
            require("../php/account.php");
        ?>
    </body>
</html>
