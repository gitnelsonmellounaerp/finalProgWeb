<?php 


    //Conexão com o Banco de Dados
    $conn = new mysqli('localhost', 'root', '', 'finalapi');

    if(!$conn){
        
        die (mysqli_error($conn));
    } 


?>