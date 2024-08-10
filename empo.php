<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prevent SQL injection
    // $user_name = htmlspecialchars($_POST['username'] ?? '');
    $emp_name="Angel";
    $emp_pass="7648";
    // $emp_name = htmlspecialchars($_POST['Empname'] ?? '');
    // $emp_pass = htmlspecialchars($_POST['Emppassword'] ?? '');
    $performance = htmlspecialchars($_POST['per'] ?? '');
    $quality_of_work = htmlspecialchars($_POST['qua'] ?? '');
    $communication = htmlspecialchars($_POST['com'] ?? '');
    $group_work = htmlspecialchars($_POST['wor'] ?? '');
    $technical_skills = htmlspecialchars($_POST['skill'] ?? '');
    $overall_rating = htmlspecialchars($_POST['ove'] ?? '');

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'test2');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepare SQL query
        $stmt = $conn->prepare("INSERT INTO registration1 (emp_name, emp_pass, performance, quality_of_work, communication, group_work, technical_skills, overall_rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die('Error in preparing statement: ' . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("ssssssss",$emp_name, $emp_pass, $performance, $quality_of_work, $communication, $group_work, $technical_skills, $overall_rating);

        // Execute statement
        if (!$stmt->execute()) {
            die('Error in executing statement: ' . $stmt->error);
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Redirect after successful insertion
        header("Location: angel.php");
        exit();
    }
} 
?>


