<?php


    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); // In your case also add x-id or what you are also using. 
    header('Access-Control-Allow-Methods: POST, PUT, DELETE, GET, OPTIONS');
    
    
    $response = json_decode(file_get_contents("php://input"));
    $connection = new mysqli("localhost","root","","scicai");
    $result = $connection->query("update * from students where username= '$response->username' and password  = '$response->password' ");    
      

    if(mysqli_num_rows($result)>0){
        echo json_encode(1);
    }else{
         echo json_encode(0);
    }    


   

 ?>