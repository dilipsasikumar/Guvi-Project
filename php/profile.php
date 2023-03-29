<?php

$conn = new mysqli('localhost','root','','guvi');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$street = $_POST['street'];
$district = $_POST['district'];
$zip = $_POST['zip'];
// SQL update query
$sql = "UPDATE register SET firstname='$firstname', lastname='$lastname', email='$email',gender='$gender', dob='$dob', mobile='$mobile', city='$city', street='$street', district='$district', zip='$zip'WHERE email='$email' or mobile='$mobile' or firstname='$firstname'";

if (mysqli_query($conn, $sql)) {
    if("email='$email' or mobile='$mobile' or firstname='$firstname'"){
        // header("Location:../html/profile.html");
        echo "<script>alert(\"Updated succesfully\")</script>";
    }
    else{
        include('../html/profile.html');
        echo "<script>alert(\"Not Updated\")</script>";
    }
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
