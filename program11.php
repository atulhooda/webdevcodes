<!DOCTYPE html>
<html>
<body>

<form method="POST">

    Enter String:
    <input type="text" name="str">

    <input type="submit">

</form>

<?php

if($_POST){

    $str = $_POST["str"];

    echo "<br>Length: " . strlen($str);

    echo "<br>Reverse: " . strrev($str);

    echo "<br>Substring: " . substr($str,0,4);
}

?>

</body>
</html>