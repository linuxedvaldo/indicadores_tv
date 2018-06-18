<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
 
$id = 'consolidado';

    $conn = new PDO('mysql:host=localhost;dbname=indicadores_tv', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     



 ?>