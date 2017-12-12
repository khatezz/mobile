<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); // In your case also add x-id or what you are also using. 
    header('Access-Control-Allow-Methods: POST, PUT, DELETE, GET, OPTIONS');
    
    $users = array (
        [ "name" => "Edwin", "username" => "username","password" => "password" ],
        [ "name" => "Palomar", "username" => "username","password" => "password" ]
    );   

    echo json_encode($users);

   
    
 ?>