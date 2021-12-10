<?php

$con = new mysqli('localhost', 'root', '', 'finalapi');

    if(!$con){
        die (mysqli_error($con));
    } 
?>