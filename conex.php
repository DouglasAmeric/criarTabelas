<?php 
    $host = 'localhost';
    $user = 'root';
    $password = 'bancoDeDados@1';
    $database =  'teste';

    $con = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()){
        die('erro! :('. mysqli_connect_error());
    }