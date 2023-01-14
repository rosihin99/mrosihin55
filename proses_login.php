<?php

    
   if (isset($_POST("sigin")){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
    
    $sql = "Insert into tb_data (username, password) values ('".$username."', '".$password."')";
    
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    
          header("Location:listberita.php");
          include "koneksi.php";
    
       }
       else
       {
           echo "method yang anda gunakan adalah GET";
       }
    
    
    ?>