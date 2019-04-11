<?php

    include("main.php");
    
    $products   = getProducts();
    $rows       = array();
    $rowCounter = 0;
    
    while ($row = $products->fetch_assoc()) {
        
        $rows[$rowCounter] = $row;
        
        $rowCounter++;
       
    }
    
    $rows = json_encode($rows);
    
    echo "<script>
    
        let products = $rows;
    
        console.log(products);
    
        for (let i = 0; i < products.length; i++) {
        
        console.log(i);
        
            createProduct(\"#products-list\", products[i][\"Name\"] + \".jpg\", products[i][\"Name\"], products[i][\"ID\"], products[i][\"Price\"], products[i][\"Rating\"]);
        
        }
    
    </script>";

?>