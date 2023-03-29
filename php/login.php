<?php

$conn = new mysqli('localhost','root','','guvi');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from register where email='$email' and password='$password'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);
    if($count>0){
        // echo "<script>alert('Login Succesful');</script>";
        header("Location: ../html/profile.html");
    }
    else{
        echo "Login Failed";
    }
}


?>