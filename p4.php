<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication table </title>
</head>
<body>

<form action="" method="post">
    <label>Enter the value: </label>
    <input type="text" name="value"><br><br>

    
    <label>Enter the Lower limit: </label>
    <input type="text" name="llimit"><br><br>

    <label>Enter the Upper limit: </label>
    <input type="text" name="ulimit"><br><br>

    <button type="submit" name="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

<?php
    if(isset($_POST['submit'])){
        $b=$_POST['value'];
        $i=$_POST['llimit'];
        $k=$_POST['ulimit'];
        for($i; $i<=$k; $i++){
            $prod=$b*$i;
            echo "$i * $b = $prod <br>";
        }
    }
?>
</body>
</html>