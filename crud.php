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
   <h1 class="text-center">Users crud</h1>
       <!-- Button trigger modal -->
<div id="displayDataTable"> </div>

    </div>

<!--bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!--jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--ajax script -->

    
 <script type="text/javascript">  
      $(document).ready(function(){
            displayData();
        });
        function displayData(){
            var displayData="Load";
            
            $.ajax({
                url:"action.php",
                type:'post',
                data:{
                    
                    action:displayData
                },
                success:function(data,status){
                    $('#displayDataTable').html(data);
                }


            });
        } 

     
        
        function DeleteUser(deleteid){
          var action = "Delete";
   
    $.ajax({
     url:"action.php",
     method:"POST",
     data:{
         deletesend:deleteid,
         action:action
         },
     success:function(data,status)
     {
        displayData();
     }
    });
}
        

           
       
 </script>  