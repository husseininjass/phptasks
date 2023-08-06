<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task1.php" method="post">
        <input type="text" name="number">
        <input type="submit">
    </form>
</body>
</html>
<?php 
$number = $_POST['number'];
if($number){
    if($number%2 != 0 || $number == 2){
        echo "prime";
    }
    else{
        echo "not prime";
    }
    
}

?>