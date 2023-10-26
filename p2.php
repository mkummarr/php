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
     if (isset($_POST['submit'])){
        $ch=$_POST['letter'];
    //function checkvowel($ch){

        switch($ch)
        {

        case 'a' : echo "The letter {$ch} is vowel.";
        break;
        case 'A' : echo "The letter {$ch} is vowel.";
        break;

        case 'e' : echo "The letter {$ch} is vowel.";
        break;
        case 'E' : echo "The letter {$ch} is vowel.";
        break;

        case 'i' : echo "The letter {$ch} is vowel.";
        break;
        case 'I' : echo "The letter {$ch} is vowel.";
        break;

        case 'o' : echo "The letter {$ch} is vowel.";
        break;
        case 'O' : echo "The letter {$ch} is vowel.";
        break;

        case 'u' : echo "The letter {$ch} is vowel.";
        break;

        case 'U' : echo "The letter {$ch} is vowel.";
        break;

        default : echo "The letter {$ch} is a constnant ";
        }
   // }
    //checkvowel($ch);
}
    ?>

    

    
    
</body>
</html>