<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "car";

$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn)
{
    header("Location:project.html");
}
else
{
   $salute = $_POST["salute"];
   $firstname = $_POST["firstname"];
   $secondname = $_POST["secondname"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $country = $_POST["country"];


$query = "insert into `data_car` VALUES('$salute','$firstname','$secondname','$email','$password');";

$result = $conn->query($query);
if(!$result)
{
   echo "Not saved";
}
else
{
   echo "saved";
}

}
?>






