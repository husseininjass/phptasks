<?php include "connection.php" ?>

<?php 
if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])) {
    $employeeName = $_POST['name'];
    $address = $_POST['address'] ;
    $salary = $_POST['salary'];
    $query = "INSERT INTO employees(name , address , salary) VALUES('$employeeName' , '$address' , '$salary')";
    $pdo->exec($query);
    if($pdo){
        header("Location: landingpage.php");
    }
}
?>
