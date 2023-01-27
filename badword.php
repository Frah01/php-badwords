<?php 

$paragrafo = $_POST['paragrafo'];
$password = $_POST ['password'];
$nuovo_paragrafo = str_replace($password,'***', $paragrafo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $paragrafo ?>
        <?php echo strlen ($paragrafo) ?>
    </h1>
    <h2>
        <?php echo $nuovo_paragrafo ?>
        <?php echo strlen ($nuovo_paragrafo) ?>
    </h2>
        
    
</body>
</html>