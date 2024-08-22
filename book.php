<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "booking";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $num = $_POST["num"];
    $b_date = $_POST["b_date"];
    $services_name = $_POST["services_name"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking`( `name`, `email`, `num`, `b_date`, `services_name`) VALUES ('$name','$email','$num','$b_date','$services_name')";
     if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>