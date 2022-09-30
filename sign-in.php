<?php  
 class SignIn
 {  
      public  $connect;  
      private $host = 'localhost';  
      private $username = 'root';  
      private $password = '';  
      private $database = 'Sign-in-database'; 
      public $customerTable = "users";
      public function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
           
      }  
      public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      } 
      public function get_data_in_table($query)  
      {  
           $table = '';  
           $result = $this->execute_query($query);  
           $table .= '<table class="table table-striped">
           <thead class="thead-dark">
             <tr> 
               <th scope="col">ID</th>
               <th scope="col">First Name</th>
               <th scope="col">Surname</th>
               <th scope="col">Email </th>
               <th scope="col">Delite</th>
             </tr>
           </thead>' ;
           $sql="SELECT * FROM `users` ";
           $result=mysqli_query($this->connect,$sql);
           while($row=mysqli_fetch_assoc($result)){
               $id=$row['id'];
               $name=$row['first-name'];
               $surname=$row['last-name'];
               $email=$row['email'];
               
               $table.='<tr>
               <td scope="row">'.$id.'</td>
               <td>'.$name.'</td>
               <td>'.$surname.'</td>
               <td>'.$email.'</td>
               <td>
               <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Delete</button>  
               </td>
              </tr>';  
          }
          $table.='</table>';
           echo $table;
      }
      
 }
 ?>