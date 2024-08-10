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
    <!-- <link rel="stylesheet" href="emp1.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 110%;
            margin: 0px auto;
            box-sizing:border;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .profile-pic {
            border-radius: 0%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            /* border: 50px solid #ccc; */
            display: block;
            margin: 0 auto 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            color: #555;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #submitPost {
            background-color: #4CAF50;
            color: white;
        }

        #logout {
            background-color: blue;
            color: white;
        }

        #list {
            background-color: #008CBA;
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ANGEL DETAILS</h1>
        <img src="https://c4.wallpaperflare.com/wallpaper/437/647/684/taylor-swift-beautiful-teen-vogue-wallpaper-thumb.jpg" alt="angel image" class="profile-pic">
        <div id="res"></div>
        <div class="button-container">
            <button id="submitPost">Submit</button>
            <button id="logout">BACK</button>
            <button id="list">LIST</button>
        </div>
        <form id="myForm" method="post" action="empo.php">
            <input type="hidden" name="per" id="per">
            <input type="hidden" name="qua" id="qua">
            <input type="hidden" name="com" id="com">
            <input type="hidden" name="wor" id="wor">
            <input type="hidden" name="skill" id="skill">
            <input type="hidden" name="ove" id="ove">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var params = new URLSearchParams(window.location.search);
            var per = params.get("per");
            var qua = params.get("qua");
            var com = params.get("com");
            var wor = params.get("wor");
            var skill = params.get("skill");
            var ove = params.get("ove");

            var getdata = `
                <table>
                    <tr><th>Employee Name</th><td>Angel</td></tr>
                    <tr><th>Employee Id</th><td>7648</td></tr>
                    <tr><th>Age</th><td>22</td></tr>
                    <tr><th>Email</th><td>angel@gmail.com</td></tr>
                    <tr><th>Mobile number</th><td>234712907</td></tr>
                    <tr><th>Department</th><td>Coding</td></tr>
                    <tr><th>Experience</th><td>6 years</td></tr>
                    <tr><th>Salary</th><td>70,000</td></tr>
                    <tr><th>Attendance</th><td>95%</td></tr>
                    <tr><th>Working hours</th><td>7 hours</td></tr>
                    <tr><th>Gender</th><td>Female</td></tr>
                    <tr><th>Performance</th><td>${per}</td></tr>
                    <tr><th>Quality of Work</th><td>${qua}</td></tr>
                    <tr><th>Communication</th><td>${com}</td></tr>
                    <tr><th>Group work</th><td>${wor}</td></tr>
                    <tr><th>Technical skills</th><td>${skill}</td></tr>
                    <tr><th>Overall Performance</th><td>${ove}</td></tr>
                </table>`;
        
            document.getElementById("res").innerHTML = getdata;
        
            document.getElementById("per").value = per;
            document.getElementById("qua").value = qua;
            document.getElementById("com").value = com;
            document.getElementById("wor").value = wor;
            document.getElementById("skill").value = skill;
            document.getElementById("ove").value = ove;

            document.getElementById('submitPost').addEventListener('click', function() {
                document.getElementById('myForm').submit();
            });
        
            document.getElementById("logout").addEventListener("click", function(event) {
                window.location.href = "emp1.php";
            });

            document.getElementById("list").addEventListener("click", function(event) {
                window.location.href = "new.php";
            });
        });
    </script>
</body>
</html>






