<div class="card">
  <div class="card-header">
    <h2 class="card-title">Danh sách danh mục</h2>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">stt
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên danh mục</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="display: none;">Hình ảnh
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Hành động: activate to sort column ascending">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $select = "SELECT * FROM categories";
          $result = $conn->query($select);
          while ($item = $result->fetch_assoc()) :
          ?>
            <tr>
              <td>
                <?= $item['id'] ?>
              </td>
              <td>
                <?= $item['name'] ?>
              </td>
              <td class="product-thumbnail">
                <img src="<?= $item['thumbnail'] ?>" alt="Product Thumbnail" class="h-50 w-50">
              </td>

              <td>
                <form action="/admin/?act=categories&page=delete&id=<?= $item['id'] ?>" method="POST" class="delete-form" id="deleteForm">
                  <button type="submit" name="delete" class="btn btn-danger m-2"><i class='fas fa-trash-alt'></i></button>
                </form>

                <a type="submit" name="edit" href="/admin/?act=categories&page=update&id=<?= $item['id'] ?>" class="btn btn-warning m-2"><i class='fas fa-pencil-alt'></i></a>



              </td>
            </tr>
          <?
          endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->