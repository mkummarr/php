<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Cookies</title>
</head>
<body>
    <?php 
    date_default_timezone_set('Asia/Kolkata');
    if(isset($_COOKIE['lastVisitt'])){
    $lastVisitt = $_COOKIE['lastVisitt'];
    echo "<marquee bgcolor='#ccff99'> <h2>Welcom Back Again!!!</h2></marquee><br><br>";
    echo "<h3 align=bottom>Last Visted : ".$lastVisitt."</h3><br>";

    }else{
        echo "<marquee bgcolor='#ccff99'>You are Welcom </marquee><br>";

        echo "This is your first visit <br>";
    }
    $currentDateTime = date('Y-m-d H:i:s');
    setcookie('lastVisitt',$currentDateTime,time() + 60*60*24*30);
    
    
    ?>
</body>
</html>