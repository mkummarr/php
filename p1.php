<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method='post'>
        <lable> Enter The number </lable>
        <input type = "text" name="number">
        <br>
        <input type = "Submit" name = "submit">
        <input type = "Reset" name = "reset">  

    </form>

    <?php 
    if (isset($_POST['submit'])){
    $n=$_POST['number'];    
   
       
    
    function checkprime($n){

        $flag=0;
        for($i=2; $i<$n; $i++){
            
           if($n % $i ==0){

                $flag=1;
                break;
            }
        }

        if ($flag==1||$flag==2)
        echo "The number {$n} is not prime.";
        else
        echo "The number {$n} is prime.";
    }
    checkprime($n);

}
    ?>

   
    
</body>
</html>