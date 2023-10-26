<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $url ='https://learn.gitam.edu/pluginfile.php/948211/mod_resource/content/1/PHP-Lab-CSCI3051.pdf';
    $file_name=basename($url);
    if(file_put_contents($file_name,file_get_contents($url))){
        echo "File downloaded successfully.";
        echo "<br>".$file_name;

    }else{
        echo "File downloading failed.";
    }
    

    ?>
</body>
</html>