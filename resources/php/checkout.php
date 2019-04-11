<?php

    include("main.php");
    
    if(isset($_COOKIE["BlockCart"])) {
     
        $products = json_decode($_COOKIE["BlockCart"]);
        $array    = array();
        
        foreach ($products as $product) {
            
            $data = getProduct($product);
            
            if ($data != NULL) {
            
                $supplier = getSupplier($data["SupplierId"]);
                
                if ($supplier != NULL) {
            
                    array_push($array, array($data, $supplier));
                    
                }
                
            }
            
        }
        
        $array = json_encode($array);
        
        echo "<script>
    
            let products = $array;
            let amount   = 0;
            
            for (let i = 0; i < products.length; i++) {
            
                amount += Number(products[i][0][\"Price\"]);
            
                createCartItem(\".checkout-items\", products[i][0][\"Name\"] + \".jpg\", products[i][0][\"Name\"], products[i][0][\"ID\"], products[i][1][\"Name\"], products[i][0][\"Price\"], products[i][0][\"Rating\"]);
            
            }
            
            changeTotal(amount);
        
        </script>";
        
    }
    
?>