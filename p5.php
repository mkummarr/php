<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Indexed Arrays</title>

<h1 align="center">Indexed Arrays</h1>

</head>

<body>

<?php

$cars=array("Hondacity", "CRV", 23);

echo "<h2>". "Printing the type and length of the array"."<br>"."</h2>";

echo var_dump($cars), "<br>";

echo "<h2>Printing the arrays using print_r statements</h2><br>";

print_r($cars);

$cars2=array("110","120", "santro");

echo "<br><h2>Printing the elements using the looping structure</h2>";

for ($i=0;$i<count($cars2); $i++)

echo $cars2[$i]."<br>";

?>

</body>

</html>