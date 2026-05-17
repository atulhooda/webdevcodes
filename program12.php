<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Name 1:
    <input type="text" name="n1">

    <br><br>

    Name 2:
    <input type="text" name="n2">

    <br><br>

    Name 3:
    <input type="text" name="n3">

    <br><br>

    <input type="submit">

</form>

<?php

if($_POST){

    $students = array(
        $_POST["n1"],
        $_POST["n2"],
        $_POST["n3"]
    );

    echo "<br>";

    print_r($students);
}

?>

</body>
</html>