<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method='post'>
        <lable> Enter The letter </lable>
        <input type = "text" name="letter">
        <br>
        <input type = "Submit" name = "submit">
        <input type = "Reset" name = "reset">  

    </form>

    <?php 
    function checkvowel($ch){

        switch($ch)
        {

        case 'a' :
       
        case 'A' :
       

        case 'e' :
       
        case 'E' :
        

        case 'i' : 
        
        case 'I' : 
       

        case 'o' : 
       
        case 'O' : 
       

        case 'u' :
        

        case 'U' : echo "The letter {$ch} is vowel.";
        break;

        default : echo "The letter {$ch} is a constnant ";
        }
    }
    ?>

    <?php if (isset($_POST['submit'])){
        echo checkvowel($_POST['letter']);

    }
    ?>
    
</body>
</html>