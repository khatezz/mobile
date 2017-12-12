<?php


    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); // In your case also add x-id or what you are also using. 
    header('Access-Control-Allow-Methods: POST, PUT, DELETE, GET, OPTIONS');
    
    
    $data = json_decode(file_get_contents("php://input"));
    $connection = new mysqli("localhost","root","","biocai");
    $result = $connection->query("select * from users where username= '$data->username' and password  = '$data->password'  ");    
      

    if(mysqli_num_rows($result)>0){
        echo json_encode(1);
    }else{
         echo json_encode(0);
    }    


   

 ?>