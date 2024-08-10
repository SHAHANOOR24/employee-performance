<?php
if (isset($_POST['emp_pass'])) {
    $empPass = $_POST['emp_pass'];

    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'test2');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepare SQL query
        $stmt = $conn->prepare("DELETE FROM registration1 WHERE emp_pass = ?");
        if (!$stmt) {
            echo 'Error in preparing statement: ' . $conn->error;
        } else {
            $stmt->bind_param('s', $empPass);

            // Execute statement
            if ($stmt->execute()) {
                echo 'success';
            } else {
                echo 'Error in executing statement: ' . $stmt->error;
            }

            // Close statement and connection
            $stmt->close();
        }
        $conn->close();
    }
}
?>
