<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    $url=parse_url($url);
    echo 'Scheme : '.$url['scheme']."<br>";
    echo 'Host : '.$url['host']."<br>";
    echo 'Path : '.$url['path']."<br>";
    ?>
</body>
</html>