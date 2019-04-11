<?php

$server = "sql302.gungoos.com";
$user   = "gungo_23258930";
$pass   = "bcmt000_";
$dbname = "gungo_23258930_general";

$conn = NULL;

function createSQLConnection() {
    
    global $server;
    global $user;
    global $pass;
    global $dbname;

    $success = TRUE;
    
    $conn = mysqli_connect($server, $user, $pass, $dbname);
    
    if ($conn->connect_error) {
        
        die("Connection failed: " . $conn->connect_error);
        
    }

    return array($success, $conn, $error);
    
}

function pushSQL($sql) {
    
    global $conn;
    
    if ($conn === NULL) {
    
        $conn = createSQLConnection()[1];
    
    }
    
    $success = TRUE;
    
    $result = $conn->query($sql);
    
    if ($result == TRUE) {
        
        $success = FALSE;
        
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
    
    return array($success, $result);
 
}

function addUser($email, $username, $password) {

    $sql = "INSERT INTO `Users`(`Username`, `Password`, `Email`) VALUES ('$username', '$password', '$email');";
    
    $returned = pushSQL($sql);

    return $returned;
    
}

function checkForEmail($email) {
    
    $sql = "SELECT * FROM `Users` WHERE `Email` = '$email';";
    
    $returned = pushSQL($sql)[1];
    
    $success = FALSE;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["Email"] == $email) {
                
                $success = TRUE;
                
            }
           
        }
        
    }

    return $success;
    
}

function checkForUsername($username) {
    
    $sql = "SELECT * FROM `Users` WHERE `Username` = '$username';";
    
    $returned = pushSQL($sql)[1];
    
    $success = FALSE;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["Username"] == $username) {
                
                $success = TRUE;
                
            }
           
        }
        
    }

    return $success;
    
}

function checkForPassword($username, $password) {
    
    $sql = "SELECT * FROM `Users` WHERE `Username` = '$username';";
    
    $returned = pushSQL($sql)[1];
    
    $success = FALSE;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["Username"] == $username) {
                
                if ($row["Password"] == $password) {
                
                    $success = TRUE;
                    
                }
                
            }
           
        }
        
    }

    return $success;
    
}

function getUserByKey($key) {
    
    $sql = "SELECT * FROM `Users` WHERE `CurrentKey` = '$key';";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["CurrentKey"] == $key) {
                
                $success = $row;
                
            }
           
        }
        
    }

    return $success;
    
}

function setCurrentKey($username, $key) {
    
    $sql = "UPDATE `Users` SET `CurrentKey`= '$key' WHERE `Username` = '$username';";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["Username"] == $username) {
                
                $success = TRUE;
                
            }
           
        }
        
    }

    return $success;
    
}

function getEmployees() {
    
    $sql = "SELECT * FROM `Employees`;";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        $success = $returned;
        
    }
    
    return $success;
    
}

function getProducts() {
    
    $sql = "SELECT * FROM `Products`;";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        $success = $returned;
        
    }
    
    return $success;
    
}

function getProduct($product) {
 
    $sql = "SELECT * FROM `Products` WHERE `Name` = '$product';";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["Name"] == $product) {
     
                $success = $row;
                
            }
           
        }
        
    }
    
    return $success;
    
}

function getSupplier($supplierId) {
 
    $sql = "SELECT * FROM `Suppliers` WHERE `ID` = '$supplierId';";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["ID"] == $supplierId) {
    
                $success = $row;
                
            }
           
        }
        
    }
    
    return $success;
    
}

function addOrder($items, $userId) {
    
    $sql = "INSERT INTO `Orders`(`List`, `UserId`) VALUES ('$items', '$userId');";
    
    $returned = pushSQL($sql);

    return $returned[0];
    
}

function getOrders($userId) {
    
    $sql = "SELECT * FROM `Orders`;";
    
    $returned = pushSQL($sql)[1];
    
    $success = NULL;
    
    if ($returned->num_rows > 0) {
        
        $array = array();
     
        while ($row = $returned->fetch_assoc()) {
        
            if ($row["UserId"] == $userId) {
        
                array_push($array, $row);
                
            }
           
        }
        
        $success = $array;
        
    }
    
    return $success;
    
}

?>