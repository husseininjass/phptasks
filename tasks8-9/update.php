<?php include "connection.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="">NAME</label>
        <input type="text" name="name">
        <br>
        <label for="">ADDRESS</label>
        <input type="text" name="address">
        <br>
        <label for="">SALARY</label>
        <input type="text" name="salary">
        <br>
        <label for="">id</label>
        <input type="number" name = "id">
        <br>
        <input type="submit" name="submit" value="update">
    </form>
</body>
<?php 
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$id = $_POST['id'];
$query = "UPDATE employees SET name = '$name' , address = '$address' , salary = $salary WHERE id = $id ";
$pdo->exec($query);
?>
</html>