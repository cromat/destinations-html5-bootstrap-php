<?php
include 'dbconnect.php';

$name=addslashes($_POST["name"]);
$description=addslashes($_POST["description"]);
$event_date=$_POST["event_date"];
$duration=$_POST["duration"];
$type=$_POST["type"];
$price=addslashes($_POST["price"]);

if (isset($_FILES["image"]["name"])) {
    $location = '../uploads/';
    $image_name = $_FILES["image"]["name"];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $target_file = $location . $image_name;
    
    if (!empty($name)) {
        if (move_uploaded_file($tmp_name, $location.$image_name)){
            $sql = "INSERT INTO tour (name, description, event_date, duration, type, price, image) VALUES ('$name', '$description', '$event_date','$duration', '$type', '$price', '$target_file');";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            }
            else {
            }
        }
        
    } else {
        echo 'please choose a file';
    }
}

$conn->close();
?>