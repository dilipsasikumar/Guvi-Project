<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$street = $_POST['street'];
$district = $_POST['district'];
$zip = $_POST['zip'];

$conn = new mysqli('localhost','root','','guvi');
if($conn->connect_error){
    die("connection failed : ".$connect_error);
}
else{
    $update = $conn->prepare("insert into register(firstname,lastname,email,password,gender,dob,mobile,city,street,district,zip) values(?,?,?,?,?,?,?,?,?,?,?)");
    $update->bind_param("sssssssssss",$firstname,$lastname,$email,$password,$gender,$dob,$mobile,$city,$street,$district,$zip);
    $update->execute();
    $update->close();
    $conn->close();
    // echo "<script>alert('Registration Succesful');</script>";
    header("Location: ../html/login.html");
}
?>