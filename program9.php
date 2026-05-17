<!DOCTYPE html>
<html>
<head>

    <title>PHP Date and Time</title>

    <style>

        body{
            text-align:center;
            font-family:Arial;
            margin-top:100px;
        }

    </style>

</head>

<body>

    <h1>Welcome</h1>

   <?php

date_default_timezone_set("Asia/Kolkata");

echo "Current Date: " . date("d-m-Y");

echo "<br><br>";

echo "Current Time: " . date("h:i:s A");

?>

</body>
</html>