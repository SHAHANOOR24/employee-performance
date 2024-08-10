<?php
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'test2');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare SQL query
    $stmt = $conn->prepare("SELECT * FROM registration1");
    if (!$stmt) {
        die('Error in preparing statement: ' . $conn->error);
    }

    // Execute statement
    if (!$stmt->execute()) {
        die('Error in executing statement: ' . $stmt->error);
    }

    // Get result
    $result = $stmt->get_result();

    // Display data in table form
    echo "<table border='1'>";
    echo "<tr><th>Employee Name</th><th>Employee ID</th><th>Performance</th><th>Quality of Work</th><th>Communication</th><th>Group Work</th><th>Technical Skills</th><th>Overall Rating</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['emp_pass'] . "</td>";
        echo "<td>" . $row['performance'] . "</td>";
        echo "<td>" . $row['quality_of_work'] . "</td>";
        echo "<td>" . $row['communication'] . "</td>";
        echo "<td>" . $row['group_work'] . "</td>";
        echo "<td>" . $row['technical_skills'] . "</td>";
        echo "<td>" . $row['overall_rating'] . "</td>";
        echo "<td><button class='delete-btn' data-id='" . $row['emp_pass'] . "'>Delete</button></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <style>
 body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background: url('https://img.freepik.com/free-vector/hand-painted-watercolor-abstract-background_23-2148998041.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* Employee table styling */

.employee-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.employee-table th,
.employee-table td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: left;
}

.employee-table th {
  background-color: #f1f1f1;
  font-weight: bold;
}

/* Logout button styling */

#login {
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
  background-color: green;
  color: white;
  margin: 0 auto; /* Center align the button */
  display: block; /* Ensure it takes full width */
  width: fit-content; /* Adjust width based on content */
}

#login:hover {
  background-color: darkgreen; /* Darker green on hover */
}

.delete-btn {
  background-color: red;
  color: white;
}

</style>
</head>
<body>
<button id="login">LOGOUT</button>
    <script>
        document.getElementById("login").addEventListener("click", function(event) {
            window.location.href = "first.html"; // Redirect to index.html
        });

        $(document).ready(function() {
            $(".delete-btn").click(function() {
                var empPass = $(this).data('id');
                var row = $(this).closest('tr');

                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: { emp_pass: empPass },
                    success: function(response) {
                        if (response == "success") {
                            row.remove();
                        } else {
                            alert("Error deleting record.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
