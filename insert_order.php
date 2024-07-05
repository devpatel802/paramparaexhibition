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

        
        $to = "devrpatel0201@gmail.com"; 
        $subject = "Your Appointment Booked";
        $message = "Dear $fname $lname,\n\n"
                   . "Thank you for booking an appointment with us. We have received your details:\n\n"
                   . "Company: $cn\n"
                   . "Address: $houseadd\n"
                   . "City: $city\n"
                   . "State: $state\n"
                   . "Postcode: $postcode\n"
                   . "Phone: $phone\n\n"
                   . "We will contact you soon to confirm your appointment.\n\n"
                   . "Best regards,\n"
                   . "Your Company Name"; 

        $headers = "From: email"; 

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "<br>Email notification sent.";
        } else {
            echo "<br>Error sending email.";
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
