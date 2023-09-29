<?php
    $user=$_POST['user'];
    $phone=$_POST['phone'];
    $com=$_POST['comment'];
    $email=$_POST['email'];
    $con=mysqli_connect('localhost','root','',"picture");
   
    $q="insert into userinfo values(NULL,'$user','$email','$phone','$com')";
    $run=mysqli_query($con,$q);
    if($run){
        echo"<script>window.location='home.php'</script>";
    }


?>