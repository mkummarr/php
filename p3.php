<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <label for="2darray">Enter 2D Array (subarrays are coma seperated, semicolon to seperate subarrays):</label><br>
            <input type="text" id="2darray" name="2darray" value=""><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        if (isset($_POST['2darray'])){
            $input = $_POST['2darray'];

            $subArrays = explode(";", $input);

            $twoDArray = [];

            foreach ($subArrays as $subArray){
                $twoDArray[] = array_map('intval', explode(',', $subArray));

            }
            echo "<pre>";
            print_r($twoDArray);
            echo "</pre>";

            $maxValue = PHP_INT_MIN;
            foreach ($twoDArray as $subArray){
                foreach ($subArray as $value){
                    if ($value > $maxValue){
                        $maxValue = $value;
                    }
              }
            }
            echo "The Max value in the 2D Array is : " .$maxValue;
        }
          
        ?>
    </body>
</html>