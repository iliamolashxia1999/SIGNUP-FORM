<?php  
 include 'sign-in.php';  
 $object = new SignIn();  
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           echo $object->get_data_in_table("SELECT * FROM `users` ORDER BY id DESC");  
      }  
      if($_POST["action"] == "Delete")  
      {       
        $query = "DELETE FROM `users` WHERE id = '".$_POST["deletesend"]."'";
        $object->execute_query($query);
      }  
      if($_POST["action"] == "Insert")  
      {  
        $nameSend = mysqli_real_escape_string($object->connect, $_POST["nameSend"]);
        $surnameSend = mysqli_real_escape_string($object->connect, $_POST["surnameSend"]);
        $emailSend = mysqli_real_escape_string($object->connect, $_POST["emailSend"]);
    
           $query = "INSERT INTO `users`(`first-name`, `last-name`, `email`)
           values ('".$nameSend."', '".$surnameSend."', '".$emailSend."')";
           $object->execute_query($query);  
           echo 'Data Inserted'; 
          
      }
      
    }
    ?>