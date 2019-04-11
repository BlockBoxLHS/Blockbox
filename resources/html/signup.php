<?php
    require("../php/session.php");
    include("../php/signup.php");
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
        <link href="../css/loginsignup.css" rel="stylesheet" type="text/css">
        <link href="../css/footer.css" rel="stylesheet" type="text/css">
        <script src="../js/jquery.js"></script>
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
        <div class="login-form">
            <h2 class="login-form-title">Signup</h2>
            <div class="login-form-content">
                <div class="login-form-info">
                    <p style="color: red;"><?php echo $errorEmail; ?></p>
                    <input form="SignupForm" type="email" name="Email" placeholder="Email"><br>
                    <p style="color: red;"><?php echo $errorUsername; ?></p>
                    <input form="SignupForm" type="text" name="Username" placeholder="Username"><br>
                    <p style="color: red;"><?php echo $errorPassword; ?></p>
                    <input form="SignupForm" type="password" name="Password" placeholder="Password"><br>
                    <p style="color: red;"><?php echo $errorConfirmPassword; ?></p>
                    <input form="SignupForm" type="password" name="ConfirmPassword" placeholder="Confirm Password"><br>
                    <input form="SignupForm" type="submit" value="Signup" class="form-signup">
                </div>
            </div>
            <div class="login-form-extra">
                <ul class="login-form-extra-list">
                    <li><a href="login.php">Have an account? Login!</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <ul id="footer-links"> <!-- Links -->
                <li class="footer-link"><a href="about.php">About Us</a></li>
            </ul>
            <p id="footer-copyright">Copyright 2020</p>
        </div>
        <form id="SignupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"></form>
        <?php
            require("../php/main.php");
        ?>
    </body>
</html>