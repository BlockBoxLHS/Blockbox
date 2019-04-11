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
        <link href="../css/checkout.css" rel="stylesheet" type="text/css">
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
         <div class="checkout-container">
            <h2 class="checkout-title">Checkout</h2>
            <ul class="checkout-items">
                <li class="checkout-item-li item-template hidden">
                    <img src="../assets/images/laptop.jpg" class="checkout-item-image">
                    <ul class="checkout-item-info">
                        <li class="checkout-item-info-li checkout-item-name">Some Laptop</li>
                        <li class="checkout-item-info-li checkout-item-id">#43453</li>
                        <li class="checkout-item-info-li checkout-item-supplier">Fireport</li>
                    </ul>
                    <ul class="checkout-item-numbers">
                        <li class="checkout-item-rating">Rating: 0</li>
                        <li class="checkout-item-price">$0.00</li>
                    </ul>
                    <button class="checkout-item-remove" onclick="removeFromCart(event)">X</button>
                </li>
            </ul>
        </div>
        <div class="checkout-buttons">
            <ul class="checkout-prices">
                <li class="checkout-total">Total: $0</li>
            </ul>
            <ul class="checkout-options">
                <li class="checkout-cancel"><input type="button" value="Cancel" onclick="cancelCheckout()"></li>
                <li class="checkout-submit"><input type="submit" value="Submit" onclick="submitCheckout()"></li>
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
            require("../php/checkout.php");
        ?>
    </body>
</html>
