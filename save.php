<?php

// =====================================
// DATABASE CONNECTION
// =====================================

$host = "localhost";
$username = "root";
$password = "";
$database = "student_database";

$conn = new mysqli($host, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


// =====================================
// GET FORM DATA
// =====================================

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];


// =====================================
// INSERT DATA
// =====================================

$sql = "INSERT INTO student (fullname, email, phone, course)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssss",
    $fullname,
    $email,
    $phone,
    $course
);


if ($stmt->execute()) {

    echo "<h2>Registration Successful!</h2>";
    echo "<p>Student information has been saved successfully.</p>";
    echo "<a href='index.html'>Register another student</a>";

} else {

    echo "Error: " . $stmt->error;

}


// Close connection
$stmt->close();
$conn->close();

?>