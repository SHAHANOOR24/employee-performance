<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: first.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="emp.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(-45deg, #B3E7FD, #2E8BD9, #02577c ,#7BA1F5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 50%;
            max-width: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .left, .right {
            flex: 1;
            padding: 20px;
        }

        .left {
            background: #ffffff;
        }

        .right {
            background: #4b59f7;
            color: white;
            position: relative;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .profile-pic {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid white;
        }

        .general-info-label {
            color: blue; /* Light peach color for the label text */
            font-weight: bold;
            font-size: 30PX;
            margin-bottom: 15px;
            text-align: center;
            display: block;
        }

        .right form {
            color: white;
        }

        .right form label {
            color: white;
        }

        select {
            color: black;
        }

        .left .profile-pic {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            border: 5px solid #ccc;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="left">
        <h1 class="general-info-label">JOHN DETAILS</h1>
        <img src="https://designimages.appypie.com/displaypicture/displaypicture-14-person-human.jpg" alt="angel image" class="profile-pic">
        <form id="myForm" method="get" action="JOHN.php">
            <div class="form-group">
                <label><b>Employee Name:</b> john</label>
            </div>
            <div class="form-group">
                <label><b>Employee Id:</b>3212</label>
            </div>  
            <div class="form-group">
                <label for="age"><b>Age:</b> 27</label>
            </div>  
            <div class="form-group">
                <label for="email"><b>Email:</b> john@gmail.com</label>
            </div>
            <div class="form-group">
                <label for="mobile"><b>Mobile number:</b>5682490545 </label>
            </div>
            <div class="form-group">
                <label for="dep"><b>Department:</b>Testing</label>
            </div>
            <div class="form-group">        
                <label for="exp"><b>Experience:</b> 5 years</label>
            </div>
            <div class="form-group">
                <label for="sal"><b>Salary:</b> 50,000</label>
            </div>
            <div class="form-group">
                <label for="att"><b>Attendance:</b> 85%</label>
            </div>
            <div class="form-group">
                <label for="wor"><b>Working hours:</b> 7 hours</label>
            </div>
            <div class="form-group">
                <label for="gen"><b>Gender:</b> Male</label>
            </div>
        </form>
    </div>
    <div class="right">
        <h1>PERFORMANCE RATING</h1>
        <!-- <img src="https://c4.wallpaperflare.com/wallpaper/437/647/684/taylor-swift-beautiful-teen-vogue-wallpaper-thumb.jpg" alt="angel image" class="profile-pic"> -->
        <form method="get" action="JOHN.php">
            <div class="form-group half">
                <label for="per"><b>Performance:</b></label>
                <select name="per" id="per" required>
                    <option value="" disabled selected>Select</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Average</option>
                </select>
            </div>
            <div class="form-group half">
                <label for="qua"><b>Quality of Work:</b></label>
                <select name="qua" id="qua" required>
                    <option value="" disabled selected>Select</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Average</option>
                </select>
            </div>
            <div class="form-group half">
                <label for="com"><b>Communication:</b></label>
                <select name="com" id="com" required>
                    <option value="" disabled selected>Select</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Average</option>
                </select>
            </div>    
            <div class="form-group half">
                <label for="wor"><b>Group work:</b></label>
                <select name="wor" id="wor" required>
                    <option value="" disabled selected>Select</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Average</option>
                </select>
            </div>
            <div class="form-group half">
                <label for="skill"><b>Technical Skills:</b></label>
                <select name="skill" id="skill" required>
                    <option value="" disabled selected>Select</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Average</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ove"><b>Overall Performance:</b></label>
                <select name="ove" id="ove" required>
                    <option value="" disabled selected>Overall rating out of 10</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>0</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('form').addEventListener("submit", function(event) {
            var per = document.getElementById("per").value.trim();
            var qua = document.getElementById("qua").value.trim();
            var com = document.getElementById("com").value.trim();
            var wor = document.getElementById("wor").value.trim();
            var skill = document.getElementById("skill").value.trim();
            var ove = document.getElementById("ove").value.trim();

            // Validate if any field is empty
            if (!per || !qua || !com || !wor || !skill || !ove) {
                alert("Please enter all the fields");
                event.preventDefault(); // Prevent the form from submitting if validation fails
            }
        });
    });
</script>
</body>
</html>

