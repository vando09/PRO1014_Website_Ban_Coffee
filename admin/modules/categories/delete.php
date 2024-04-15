<?php
$id = $_GET['id'];

$sql = "SELECT COUNT(*) as num_products FROM products WHERE category_id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$num_products = $row['num_products'];

if ($num_products > 0) {
    echo "Danh mục có sản phẩm không thể xóa.";
} else {
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2>Xác nhận xóa danh mục</h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>Bạn có chắc chắn muốn xóa danh mục này?</p>
        <button type="submit" name="confirm_delete" class="btn btn-danger">Xóa</button>
        <a href="/admin/?act=categories&page=list" class="btn btn-secondary">Hủy</a>
      </form>
    </div>
  </div>
</div>

<?php
}

if (isset($_POST['confirm_delete'])) {
    $sql = "DELETE FROM categories WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        $sql = "SELECT thumbnail FROM categories WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $thumbnail = $row['thumbnail'];
        unlink($thumbnail);

    $sql = "DELETE FROM categories_name WHERE category_id = $id";
    $result = $conn->query($sql);

    header("Location:/admin/?act=categories&page=list");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2>Xác nhận xóa danh mục</h2>
      <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>Bạn có chắc chắn muốn xóa danh mục này?</p>
        <button type="submit" name="confirm_delete" class="btn btn-danger">Xóa</button>
        <a href="/admin/?act=categories&page=list" class="btn btn-secondary">Hủy</a>
      </form>
    </div>
  </div>
</div>

<?php
}

if (isset($_POST['confirm_delete'])) {
    $sql = "DELETE FROM categories WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        $sql = "SELECT thumbnail FROM categories WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $thumbnail = $row['thumbnail'];
        unlink($thumbnail);

        $sql = "DELETE FROM categories_name WHERE category_id = $id";
        $result = $conn->query($sql);

        header("Location:/admin/?act=categories&page=list");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>