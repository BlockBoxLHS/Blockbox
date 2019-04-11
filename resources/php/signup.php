<?php

    $errorEmail           = NULL;
    $errorUsername        = NULL;
    $errorPassword        = NULL;
    $errorConfirmPassword = NULL;
    
   include("sqlHandler.php");

    if(isset($_COOKIE["BlockKey"])) {
     
        header("Location: ../../index.php");
        exit();
        
    }

    $requestType = $_SERVER["REQUEST_METHOD"];
    
    if ($requestType == "POST") {

        $success = TRUE;

        $email           = $_POST["Email"];
        $username        = $_POST["Username"];
        $password        = $_POST["Password"];
        $confirmPassword = $_POST["ConfirmPassword"];
        
        if (empty($username)) {
            
            $errorUsername = "Username is required";
            
            $success = FALSE;
            
        } else {
            
            if (!preg_match("/^[a-zA-Z]*$/", $username)) {
                
                $errorUsername = "Username is invalid";
                
                $success = FALSE;
                
            } else {
                
                if (strlen($username) > 16 || strlen($username) < 6) {
                    
                    $errorUsername = "Username needs to be within 6 and 16 characters";
                    
                    $success = FALSE;
                    
                } else {
                    
                    $usernameQuery = checkForUsername(strtolower($username));

                    if ($usernameQuery === TRUE) {
                        
                        $errorUsername = "This username already exists";
                        
                        $success = FALSE;
                        
                    }
                    
                }
                
            }
        }
                
        if (empty($email)) {
            
            $errorEmail = "Email is required";
            
            $success = FALSE;
            
        } else {
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                $errorEmail = "Email format is invalid";
                
                $success = FALSE;
                
            } else {
                
                $emailQuery = checkForEmail(strtolower($email));
    
                if ($emailQuery === TRUE) {
                    
                    $errorEmail = "Email is already in use";
                    
                    $success = FALSE;
                    
                }
                
            }
        }
        
        if (empty($password)) {
            
            $errorPassword = "Password is required";
            
        } else {
                
            if (strlen($password) > 20 || strlen($password) < 4) {
                
                $errorPassword = "Password needs to be within 4 and 20 characters";
                
                $success = FALSE;
                
            }
            
        }
        
        if (empty($confirmPassword)) {
            
            $errorConfirmPassword = "Confirm Password is required";
            
        } else {
                
            if (strlen($confirmPassword) > 20 || strlen($confirmPassword) < 4) {
                
                $errorConfirmPassword = "Confirm Password needs to be within 4 and 20 characters";
                
                $success = FALSE;
                
            } else {
                
                if ($confirmPassword != $password) {
                    
                    $errorConfirmPassword = "Confirm Password is not the same as Password";
                    
                    $success = FALSE;
                    
                }
                
            }
            
        }
        
        if ($success) {
            
            addUser(strtolower($email), strtolower($username), $password);
            
            header("Location: ../html/login.php");
            exit();
            
        }
        
    }

?>