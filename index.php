<?php
include 'sign-in.php';  
 $object = new SignIn(); 
 echo 'sd';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persons crud</title>
    <!--bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   


</head>
<body>

  <div class="container my-3" >
   <h1 class="text-center">SIGNUP FORM</h1>
       <!-- Button trigger modal -->
<button type="button" class="btn btn-success m-5" data-bs-toggle="modal" data-bs-target="#completeModal">
  sign up
</button>


    </div>

<!-- add Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


    <form  method="post"  enctype="multipart/form-data">
  

  <div class="mb-3">
    <label for="completename">name</label>
    <input type="text" name="name" class="form-control" id="completename" placeholder="Enter your name"  >
    <div class="span"></div>
  </div>
  <div class="mb-3">
    <label for="completesurname">surname</label>
    <input type="text" name="surname" class="form-control" id="completesurname" placeholder="Enter your surname" > 
    <div class="span"></div>
  </div>
  <div class="mb-3">
    <label for="completemail">email</label>
    <input type="email" name="email" class="form-control" id="completemail" placeholder="Enter your Email" >
    <div class="span"></div>
  </div>
  
  <div class="form-check">
  
 </div>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="adduser()">Submit</button>
      </div>
    </div>
  </div>
</div>


<!--bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!--jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--ajax script -->

    
 <script type="text/javascript">  
      

     
        function adduser(){
           
            
            var nameAdd=$('#completename').val();
            var surnameAdd=$('#completesurname').val();
            var emailAdd=$('#completemail').val();
            var action = "Insert";


    
    
    if( nameAdd.trim() !== '' && surnameAdd.trim() !== '' && emailAdd.trim() !== '' ){

            $.ajax({
                url:"action.php",
                type:'post',
                data:{
                   
                    nameSend:nameAdd,
                    surnameSend:surnameAdd,
                    emailSend:emailAdd,
                    action:action,
                },
                success: function(data,status){
                    window.location='crud.php'
                },
            });
        }
        }
    
        
      

           
       
 </script>  

</body>  
 </html>