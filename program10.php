<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Name:
    <input type="text" name="name">

    <br><br>

    <input type="submit">

</form>

<?php

if($_POST){

    echo "Welcome " . $_POST["name"];
}

?>

</body>
</html>