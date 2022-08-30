<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "hello");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count((array)($data)) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);  
      $query = "INSERT INTO `users`(`firstname`, `lastname`) VALUES ('$first_name', '$last_name')";  
      
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?> 