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
              <?php
              $select = "SELECT * FROM categories";
              $result = $conn->query($select);
              while ($item = $result->fetch_assoc()) :
              ?>
                <tr>
                  <th scope="col"><?= $item['id'] ?></th>
                  <th scope="col"><?= $item['name'] ?></th>
                  <th scope="col"><img src="<?= $item['thumbnail'] ?>" width="100" height="150"></th>
                  <th scope="col">
                    
                    <a href="/admin?act=categories&page=update<?= $item['id'] ?>" type="submit" name="update" class="btn btn-primary m-2">Cập nhật</a>


                    <form action="/admin?act=categories&page=delete&id=<?= $item['id'] ?>" method="POST">
                      <input type="submit" name="delete" class="btn btn-primary m-2" value="Xóa" />
                    </form>

                <a type="submit" name="edit" href="/admin/?act=categories&page=update&id=<?= $item['id'] ?>" class="btn btn-warning m-2"><i class='fas fa-pencil-alt'></i></a>



              </td>
            </tr>
          <?php
          endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->