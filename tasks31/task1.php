<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task1.php" method="post">
        <input type="text" name="username">
        <input type="submit">
    </form>
    <?php
        $user = $_POST["username"] ;
        echo strtoupper($user);
        echo strtolower($user);
        echo ucfirst($user);
        echo ucwords($user);
    ?>
</body>
</html>