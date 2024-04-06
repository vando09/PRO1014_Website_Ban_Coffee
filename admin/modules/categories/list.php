<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên</th>
      <th scope="col">Hình</th>
      <th scope="col" class="d-flex justify-content-end">
      </th>

    </tr>
  </thead>
  <tbody>
    <?
    $select = "SELECT * FROM categories";
    $result = $conn->query($select);
    while ($item = $result->fetch_assoc()) :
    ?>
      <tr>
        <th scope="col"><?= $item['id'] ?></th>
        <th scope="col"><?= $item['name'] ?></th>
        <th scope="col"><img src="<?= $item['thumbnail'] ?>" width="100" height="150"></th>
        <th scope="col">
          <form action="/admin/?act=categories&page=update&id=<?= $item['id'] ?>" method="POST">
            <button type="submit" name="update" class="btn btn-primary m-2">Cập nhật</button>
          </form>

          <form action="/admin/?act=categories&page=delete&id=<?= $item['id'] ?>" method="POST">
            <input type="submit" name="delete" class="btn btn-primary m-2" value="Xóa" />
          </form>

        </th>
      </tr>

    <?
    endwhile;



    $conn->close();
    ?>
      </table>
