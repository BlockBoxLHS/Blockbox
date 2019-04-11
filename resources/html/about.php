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
        <link href="../css/about.css" rel="stylesheet" type="text/css">
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
        <div class="employees">
           <div class="employee">
                <ul class="employee-info">
                    <li class="employee-name">Block Box</li>
                    <li class="employee-job">A Online Retailer You Can Trust</li>
                </ul>
                <p class="employee-desc">Block Box is a online retail company that was founded by Bradley Autry, Matthew Simmons, and Tyler Whybrew. We started this company because we had problems finding the right kind of technology for the projects we wanted to design.
                We decided to create a company to meet the needs of the people who want to find everything tech in a hurry and for a fair price. We sell products such as: fans, processors, CPUs, keyboards, consoles, and games.</p>
            </div>
            <div class="employee employee-template hidden">
                <img src="../assets/images/tyler.jpg" class="employee-image">
                <ul class="employee-info">
                    <li class="employee-name">Tyler Whybrew</li>
                    <li class="employee-job">CEO</li>
                </ul>
                <p class="employee-desc"> As a CEO I am the highest-ranking executive in the corporation, I make major corporate decisions and manage overall operations of the company.  </p>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <ul id="footer-links"> <!-- Links -->
                <li class="footer-link"><a href="about.php">About Us</a></li>
            </ul>
            <p id="footer-copyright">Copyright 2020</p>
        </div>
        <?php
            require("../php/employees.php");
        ?>
    </body>
</html>