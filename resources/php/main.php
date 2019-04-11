<?php

    include("sqlHandler.php");

    if(isset($_COOKIE["BlockKey"])) {
        
        $row = getUserByKey($_COOKIE["BlockKey"]);
        
        if ($row) {
        
            $_SESSION["User"] = $row;
            
            $username = $row["Username"];
            
            echo "<script>setLogin(\"$username\");</script>";
            
        }
        
    }
        
?>