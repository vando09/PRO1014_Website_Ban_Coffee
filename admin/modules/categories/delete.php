<?php
$server = "localhost";
$username = "root";
$password = "mysql";
$database = "du_an_1";

$connect = new mysqli($server, $username, $password, $database);

$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id = $id";
$result = $connect->query($sql);

if ($result) {

    $sql = "SELECT thumbnail FROM categories WHERE id = $id";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    $thumbnail = $row['thumbnail'];
    unlink("");


    $sql = "DELETE FROM categories_status WHERE category_id = $id";
    $result = $connect->query($sql);


    $sql = "DELETE FROM categories_name WHERE category_id = $id";
    $result = $connect->query($sql);

    header("Location: categories.php");
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>