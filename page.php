<?php
session_start();

// Redirect to login page if not logged in and if the request method is not POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    exit();
}

// Database connection details
$host = "localhost";
$dbusername = "root";
$dbpassword = "";

// Check which type of request is being made
// if (isset($_POST['Empname']) && isset($_POST['Emppassword']) && !isset($_POST['username'])) {
//     // Employee login
//     $Empname = $_POST['Empname'];
//     $Emppassword = $_POST['Emppassword'];
//     $dbname = "emp";

//     $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $query = "SELECT * FROM employee WHERE Empname = ? AND Emppassword = ?";
//     $stmt = $conn->prepare($query);
//     $stmt->bind_param("ss", $Empname, $Emppassword);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows == 1) {
//         $_SESSION['Empname'] = $Empname;
//         if ($Empname == "john" && $Emppassword == "2312#") {
//             header("Location: emp.php");
//             exit();
//         } elseif ($Empname == "angel" && $Emppassword == "7648@") {
//             header("Location: emp1.php");
//             exit();
//         } else {
//             header("Location: error1.html");
//             exit();
//         }
//     } else {
//         header("Location: error1.html");
//         exit();
//     }

//     $stmt->close();
//     $conn->close();
// }
 if (isset($_POST['username']) && isset($_POST['password']) && !isset($_POST['Empname'])) {
    // User login
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dbname = "test2";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM login WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: table.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Invalid request
    header("Location: index.html");
    exit();
}
?>
