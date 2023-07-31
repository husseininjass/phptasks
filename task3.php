<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="task3.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php
    // if(isset())
    // echo  isset($_POST["name"])?$_POST["name"]:"no data ";
    
    ?> -->
    <form action="task3.php" method="post">
        <!-- <label for="">name</label> -->
        <input type="text" name="user">
        <input type="submit">
    </form>
    <?php
    echo $_POST["user"];
    ?>

</body>
</html>