<?php
$conn=mysqli_connect("localhost", "id19906862_root","qt=/eXXy#Xl3X{7c","id19906862_contactusform");

if(isset($_POST['firstname'])|| isset($_POST['lastname']) || isset($_POST['email']) || isset($_POST['message']) ){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
}

$sql = "INSERT INTO contactus_table(firstname, lastname, email, message) VALUES('{$firstname}','{$lastname}','{$email}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location:aboutUs.php");
mysqli_close($conn);
?>