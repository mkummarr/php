<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Largest numberr</title>
    </head>

    <body>
        <h2>Largest number among three numbers</h2>
        <form action="" method="post">
        Enter first number   <input type="number" name="num1" ><br>
        Enter second number <input type="number" name="num2" ><br>
        Enter third number  <input type="number" name="num3"><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];
            function largest($n1, $n2, $n3)
            {
                if ($n1 == $n2 || $n1 == $n3 || $n2 == $n3) {
                    echo "Two numbers are equal <br>";
                }
                if ($n1 > $n2 && $n1 > $n3) {
                    echo "The largest number is $n1";
                } 
                elseif ($n2 > $n3) {
                    echo "The largest number is $n2";
                } 
                else {
                    echo "The largest number is $n3";
                }
            }
            largest($n1, $n2, $n3);
        }
        ?>
    </body>

</html>