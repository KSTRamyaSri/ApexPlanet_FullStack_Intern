<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic PHP Sanitization
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']); // Subject Added
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    // INSERT Query with Subject
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$msg')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message Saved in DB Successfully!'); window.location='index.php';</script>";
    } else {
        echo "Flop ayindi: " . mysqli_error($conn);
    }
}
?>