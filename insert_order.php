<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $cn = $conn->real_escape_string($_POST['cn']);
    $houseadd = $conn->real_escape_string($_POST['houseadd']);
    $city = $conn->real_escape_string($_POST['city']);
    $state = $conn->real_escape_string($_POST['state']);
    $postcode = $conn->real_escape_string($_POST['postcode']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    
    $sql = "INSERT INTO book_appoinment (First_Name, Last_Name, Company_Name, Address, Town_City, State_County, Postcode, Phone_Number, Email_Address)
            VALUES ('$fname', '$lname', '$cn', '$houseadd', '$city', '$state', '$postcode', '$phone', '$email')";

    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>