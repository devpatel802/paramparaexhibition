<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text_input = $_POST['text_input'];
    $paragraph_input = $_POST['paragraph_input'];

    // Handle multiple image uploads
    $target_dir = "uploads/";
    // Check if directory exists, if not, create it
    if (!is_dir($target_dir)) {
        if (!mkdir($target_dir, 0777, true)) {
            die("Failed to create directory: " . $target_dir);
        }
    }

    $image_paths = [];
    foreach ($_FILES["image_upload"]["name"] as $key => $name) {
        $target_file = $target_dir . basename($name);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES["image_upload"]["tmp_name"][$key]);
        if ($check === false) {
            die("File is not an image.");
        }

        // Check file size (50MB limit)
        if ($_FILES["image_upload"]["size"][$key] > 50000000) { // 50MB
            die("Sorry, your file is too large.");
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }

        if (move_uploaded_file($_FILES["image_upload"]["tmp_name"][$key], $target_file)) {
            $image_paths[] = $target_file;
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    }

    // Serialize image paths array to store in database
    $image_paths_serialized = serialize($image_paths);

    $sql = "INSERT INTO custom (text_input, paragraph_input, image_path)
            VALUES ('$text_input', '$paragraph_input', '$image_paths_serialized')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>