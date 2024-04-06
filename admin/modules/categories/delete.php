<?php
$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id = $id";
$result = $conn->query($sql);

if ($result) {

    $sql = "SELECT thumbnail FROM categories WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $thumbnail = $row['thumbnail'];
    unlink("");

    $sql = "DELETE FROM categories_name WHERE category_id = $id";
    $result = $conn->query($sql);

    header("Location:/admin/?act=categories&page=list");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>