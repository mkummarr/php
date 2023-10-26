
<html>
    <body>
<form method='post'>
        <lable> Enter The number </lable>
        <input type = "text" name="number">
        <br>
        <input type = "Submit" name = "submit">
        <input type = "Reset" name = "reset">  

    </form>


<?php


function largest($n){
    
    $sum=1; 

    for($i=$n;$i>=1;$i--){
        $sum = $sum*$i;
         
    }
    echo "<b>The Factorial of $n  = </b>",$sum;
}

?>
<?php if (isset($_POST['submit'])){
    echo largest($_POST['number']);

}
?>




</body>
</html>