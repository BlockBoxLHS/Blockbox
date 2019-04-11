<?php

    include("sqlHandler.php");

    $requestType = $_SERVER["REQUEST_METHOD"];
    
    if ($requestType == "POST") {

        if (!empty($_POST["type"])) {

            if (!empty($_POST["item"])) {
                
                if ($_POST["type"] == "Add") {
        
                    if (!isset($_COOKIE["BlockCart"])) {
                        
                        $cart = array($_POST["item"]);
                        
                        setcookie("BlockCart", json_encode($cart), time() + (86400 * 30), "/");
                        
                    } else {
                        
                        $cart = json_decode($_COOKIE["BlockCart"]);
                        
                        array_push($cart, $_POST["item"]);
                        
                        setcookie("BlockCart", json_encode($cart), time() + (86400 * 30), "/");
                        
                    }
                    
                } elseif ($_POST["type"] == "Remove") {
                 
                    if (isset($_COOKIE["BlockCart"])) {
                        
                        $cart = json_decode($_COOKIE["BlockCart"]);
                        
                        $pos = array_search($_POST["item"], $cart);
                        
                        if ($pos !== FALSE) {
                            
                            array_splice($cart, $pos, 1);
                         
                            setcookie("BlockCart", json_encode($cart), time() + (86400 * 30), "/");
                            
                        }
                        
                    }
                    
                } elseif ($_POST["type"] == "Cancel") {
                         
                    setcookie("BlockCart", json_encode(array()), time() + (86400 * 30), "/");
                    
                } elseif ($_POST["type"] == "Submit") {
                         
                    if(isset($_COOKIE["BlockKey"])) {
                     
                        $user = getUserByKey($_COOKIE["BlockKey"]);
                        
                        if ($user !== NULL) {
                         
                            if (isset($_COOKIE["BlockCart"])) {
                            
                                $cart = json_decode($_COOKIE["BlockCart"]);
                                
                                $cart = implode(", ", $cart);
                                
                                if ($cart !== NULL || $cart !== FALSE) {
                            
                                    addOrder($cart, $user["ID"]);
                                    
                                    setcookie("BlockCart", json_encode(array()), time() + (86400 * 30), "/");
                                    header("HTTP/1.1 200 success");   
                                    
                                }
                                
                            }
                            
                        }
                        
                    } else {
                        
                        header("HTTP/1.1 200 error");
                        
                    }
                    
                }
                
            }
        
        }
        
    }

?>