<?php

$servername = "localhost";
$database = "website";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Take data from the Form
$name_surname = $_POST['name'];
$age = $_POST['age'];
$reading_habit = $_POST['reading_habit'];
$location = $_POST['location'];
$hobbies = $_POST['hobbies'];

if(empty($name_surname) or empty($age) or empty($reading_habit) or empty($location) or empty($hobbies)){

    $message = "<script> alert('Please enter all information.')</script>";
    echo $message;
}
else{

    // Remember SQL query
    $sql = "INSERT INTO form_bilgileri (name_surname, age, frequency, country, hobbies) VALUES ('$name_surname', '$age', '$reading_habit', '$location', '$hobbies')";

}

// Run query
if (mysqli_query($conn, $sql)) {
    echo "Successfully added to database.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>

