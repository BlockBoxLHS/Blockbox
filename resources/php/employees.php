<?php
    
   include("main.php");
   
    $employees  = getEmployees();
    $rows       = array();
    $rowCounter = 0;
    
    while ($row = $employees->fetch_assoc()) {
        
        $rows[$rowCounter] = $row;
        
        $rowCounter++;
       
    }
    
    $rows = json_encode($rows);
    
    echo "<script>
    
        let employees = $rows;
    
        console.log(employees);
    
        for (let i = 0; i < employees.length; i++) {
        
        console.log(i);
        
            createEmployee(\".employees\", employees[i][\"FirstName\"] + \".jpg\", employees[i][\"FirstName\"] + \" \" + employees[i][\"LastName\"], employees[i][\"Job\"], employees[i][\"Description\"]);
        
        }
    
    </script>";

?>