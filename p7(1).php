<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factorial</title>
    </head>

    <body>
        <form method="post">
            Enter the number:<input type="text" name="num"><br>
            <input type="submit" name="submit" value="submit">
        </form>
         <?php
             if (isset($_POST['submit'])) {
                 $num = $_POST['num'];
                function factorial($num) {
                 $fact = 1;
                 for ($i = 1; $i <= $num; $i++) {
                    $fact = $fact * $i;
                    }
                    echo "The factorial of $num is $fact";
                }
                factorial($num);
            }
        ?>
    </body>
</html>