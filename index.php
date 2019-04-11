<?php
    require("resources/php/session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BlockBox</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700" rel="stylesheet"> 
        <link href="resources/css/normalize.css" rel="stylesheet" type="text/css">
        <link href="resources/css/all.css" rel="stylesheet" type="text/css">
        <link href="resources/css/header.css" rel="stylesheet" type="text/css">
        <link href="resources/css/products.css" rel="stylesheet" type="text/css">
        <link href="resources/css/footer.css" rel="stylesheet" type="text/css">
        <script src="resources/js/jquery.js"></script>
        <script src="resources/js/itemCreation.js"></script>
        <script src="resources/js/main.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div id="header" class="navbar navbar-extended-sm">
          <div id="header-top"> <!-- Top Container -->
            <a href="index.php"><img src="resources/assets/images/blockboxlogo.png" id="header-logo" class="unselectable"></a>
            <div id="header-top-buttons-div">
                <ul id="header-top-buttons" class="list-v">
                    <a href="resources/html/login.php"><li class="header-btn header-login unselectable">Login</li></a>
                    <a href="resources/html/signup.php"><li class="header-btn header-signup unselectable">Signup</li></a>
                    <a href=""><li class="header-username unselectable hidden"></li></a>
                    <a href="resources/html/account.php"><li class="header-btn header-account unselectable hidden">Account</li></a>
                </ul>
            </div>
            <a href="resources/html/checkout.php"><img src="resources/assets/images/cart.png" id="header-cart" class="unselectable"></a>
          </div>
          <div id="header-bottom"> <!-- Bottom Container -->
            <ul id="cat-btns" class="list-v">
                <a href="index.php"><li id="cat-Home" class="header-btn-secondary unselectable">Home</li></a>
            </ul>
          </div>
        </div>
        <!-- Body -->
        <div class="products-container">
            <div class="products-subcontainer" id="products-list">
                <div class="products-title">
                    <h2>Products</h2>
                </div>
                <ul class="products-container-items">
                    <li class="product-li product-template hidden">
                        <div class="product"> <!-- product container -->
                            <input class="product-input hidden" type="text" name="Product">
                            <div class="product-visual"> 
                               <img src="resources/assets/images/laptop.jpg" class="product-image"> <!-- size: 1200x600 pixels -->
                            </div>
                            <div class="product-info"> <!-- product info -->
                                <ul class="product-info-list"> <!-- info -->
                                    <li class="product-rating">Rating: 4/5</li>
                                    <li class="product-name">Laptop</li>
                                    <li class="product-price">$599.99</li>
                                    <li class="product-id">#0</li>
                                </ul>
                            </div>
                            <div class="product-cart"> <!-- buttons -->
                                <ul class="product-cart-list">
                                    <li class="product-add"><button class="product-submit" onclick="addToCart(event)">Add To Cart</button></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <ul id="footer-links"> <!-- Links -->
                <li class="footer-link"><a href="resources/html/about.php">About Us</a></li>
            </ul>
            <p id="footer-copyright">Copyright 2020</p>
        </div>
        <?php
            require("resources/php/products.php");
        ?>
    </body>
</html>