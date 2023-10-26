<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>

<form action="" method="post">
    <label for="">Enter a Number to generates it's Fibonacci Series: </label>
    <input type="text" name="num" id="">
    <button type="submit" name="submit">Submit</button>
</form>
<?php  
    if (isset($_POST['submit'])){
        $num=$_POST['num'];

        function series($num){ 
            if($num == 0){  
            return 0;  
            }else if( $num == 1){  
        return 1;  

        }  else {  
        return (series($num-1) + series($num-2));  
        }   
        }  

        for ($i = 0; $i < $num; $i++){  
        echo series($i);  
        echo "\n";  
        }  
    }

?>
</body>
</html>