<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $userList = [];

    while ($user = mysqli_fetch_assoc($result)) {
        $userList[] = $user;
    }
}
?>
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Danh sách người dùng</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed"
                aria-describedby="example1_info">
                <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Browser: activate to sort column ascending">Tên người dùng</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">Hình ảnh</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">Địa chỉ</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">Loại tài khoản</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                            aria-label="Hành động: activate to sort column ascending">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 1;
                    foreach ($userList as $user):
                        ?>
                        <tr>
                            <td>
                                <?php echo $stt; ?>
                            </td>
                            <td>
                                <?php echo $user["name"]; ?>
                            </td>
                            <td class="ser-thumbnail">
                                <img src="./<?php echo $user["thumbnail"]; ?>" alt="user Thumbnail" class="h-25 w-25">
                            </td>
                            <td>
                                <?php echo $user["email"]; ?>
                            </td>
                            <td>
                                <?php echo $user["address"]; ?>
                            </td>
                            <td>
                                <?php echo $user["role"] == 1 ? "Nhân viên" : "Khách hàng"; ?>
                            </td>
                            <td>
                                <?php if ($user["role"] != 1): ?>
                                    <form action="/admin/?act=accounts&page=delete&id=<?php echo $user['id']; ?>" method="POST"
                                        class="delete-form" id="deleteForm"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng này?');">
                                        <button type="submit" name="delete" class="btn btn-danger m-2"><i
                                                class='fas fa-trash-alt'></i></button>
                                    </form>
                                <?php endif; ?>

                                <a href="/admin/?act=accounts&page=edit&id=<?php echo $user['id']; ?>"
                                    class="btn btn-warning m-2"><i class='fas fa-pencil-alt'></i></a>
                            </td>
                        </tr>
                        <?php
                        $stt++;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->