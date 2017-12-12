<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); // In your case also add x-id or what you are also using. 
    header('Access-Control-Allow-Methods: POST, PUT, DELETE, GET, OPTIONS');
    $data = json_decode(file_get_contents("php://input"));

    $connection = new mysqli("localhost","root","","biocai");
    
    if($data!=null) {
        $connection->query("insert into users(fname,lname,section,username,password) values('$data->fname','$data->lname','$data->section','$data->username','$data->password')"); 
    }



    echo json_encode ($data); 

?>