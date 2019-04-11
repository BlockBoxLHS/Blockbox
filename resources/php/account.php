<?php
    
    if(!isset($_COOKIE["BlockKey"])) {
    
        header("Location: ../../index.php");
        exit();
        
    }
    
    include("main.php");
    
    $user = getUserByKey($_COOKIE["BlockKey"]);
   
    if ($user) {
   
        $orders = getOrders($user["ID"]);
        $rows   = json_encode($orders);
        
        echo "<script>
        
            let orders = $rows;
        
            for (let i = 0; i < orders.length; i++) {
            
                createOrder(\".list-items\", orders[i][\"List\"], orders[i][\"ID\"]);
            
            }
        
        </script>";

    }

?>