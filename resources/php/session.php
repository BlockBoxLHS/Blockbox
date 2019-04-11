<?php

    if(session_id() == '' || !isset($_SESSION)) {
        
        session_start();
        $_SESSION["Cart"] = array();
        
    }

?>