<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Fibonacci</title>

<h1 align="center"> Fibonacci</h1>

</head>

<body>

<form method='post'>
        <lable> Enter The number </lable>
        <input type = "text" name="num">
        <br>
        <input type = "Submit" name = "submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['num'];
function Fibonacci($n){
  
    $n1 = 0;
    $n2 = 1;
  
    $i = 0;
    while ($i < $n){
        echo ' '.$n1;
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        $i = $i + 1;
    }
}
  


Fibonacci($n);
}
?>


</body>