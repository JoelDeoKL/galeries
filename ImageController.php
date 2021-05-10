<?php

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=galeries', "root", "");

        
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
