<?php
include 'sign-in.php';  
 $object = new SignIn(); 
 
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

<!-- add Modal -->
<div class="modal fade" id="completeModal" tabindex="1" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">sign up</h5>

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
      
      
    $(window).on('load', function() {
        $('#completeModal').modal('show');
    });


     
        function adduser(){
           
            var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var nameAdd=$('#completename').val();
            var surnameAdd=$('#completesurname').val();
            var emailAdd=$('#completemail').val();
            var action = "Insert";


            if(nameAdd.trim() === '') {
            $("#completename").addClass("is-invalid");
            document.getElementsByName('name')[0].placeholder='name field is empty';
            }if(surnameAdd.trim() === ''){
            $("#completesurname").addClass("is-invalid");
            document.getElementsByName('surname')[0].placeholder='surname field is empty';
            } if(emailAdd.trim() === ''){
            $("#completemail").addClass("is-invalid");
            document.getElementsByName('email')[0].placeholder='email field is empty';
            }
            
            if(nameAdd.trim() !== '') {
                $("#completename").removeClass("is-invalid"); 
                $("#completename").addClass("is-valid");
            
            }if(surnameAdd.trim() !== ''){
                $("#completesurname").removeClass("is-invalid"); 
                $("#completesurname").addClass("is-valid");
            
            } if(emailAdd.trim() !== '' && reg.test(emailAdd)){
                $("#completemail").removeClass("is-invalid"); 
                $("#completemail").addClass("is-valid");
            
            } 
   
   
     if(emailAdd.trim() != '' && !reg.test(emailAdd)){
        $("#completemail").addClass("is-invalid");
        alert("not valid email adress");
        $('#completemail').focus();
    }

        
    
    
    if( nameAdd.trim() !== '' && surnameAdd.trim() !== '' && emailAdd.trim() !== '' && reg.test(emailAdd) ){

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