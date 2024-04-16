<?php
include "../client/particals/header.php";
require_once "models/database.php";
$db = new Database();
$conn = $db->getDatabase();
$errors = [];


if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert alert-success" role="alert">
        Đăng kí thành công!
    </div>';
}
if (isset($_POST['login'])) {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);


    if (empty($name)) {
        $errors[] = "Vui lòng không để trống tên đăng nhập !!!";
    }

    if (empty($password)) {
        $errors[] = "Vui lòng không để trống mật khẩu !!!";
    }

    if (empty($email)) {
        $errors[] = "Vui lòng không để trống email !!!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ !!!";
    }

    if (empty($errors)) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("SELECT * FROM users WHERE name=? AND email=? AND password=?");
        $stmt->bind_param("sss", $name, $email, $password);
        
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['user'] = $user;
            $_SESSION['user_name'] = $user['name'];
            header("Location: ../index.php");
        } else {
            $errors[] = "Tài khoản, mật khẩu hoặc email sai !!!";
        }
    }
}
// var_dump($name,$password,$email);
?>

<div class="content" style="margin-top: 88px;">
    <div class="container rounded" style="padding-top: 50px; padding-bottom: 50px">
        <div class="bg-white">
            <div class="row align-items-center">
                <div class="col-md-12 border-right">
                    <form action="" method="post" class="px-3 pe-lg-5 py-5 sign-in-form">

                        <div class="alert alert-danger border-0 p-0 text-center">
                            <?php
                            if (!empty($errors)) {
                                foreach ($errors as $error) {
                                    echo $error . "<br>";
                                }
                            }
                            ?>
                        </div>

                        <div class="alert alert-success border-0 p-0 text-center">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Đăng nhập</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Tên</label><input type="name" class="form-control" name="name"
                                    placeholder="Nhập tên tại đây">
                                <p class="field-message mb-0"></p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Email</label><input type="email" class="form-control"
                                    placeholder="VD: example@gmail.com" name="email" value="">
                                <p class="field-message mb-0"></p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Mật khẩu</label><input type="password" class="form-control"
                                    name="password" placeholder="Nhập mật khẩu tại đây">
                                <p class="field-message mb-0"></p>
                            </div>
                        </div>
                        <div class="p-t-12">
                            <span class="txt1">Quên</span>
                            <a class="txt2" href="quen-mat-khau">mật khẩu?</a>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-primary profile-button" type="submit" style="background-color: #333" name="login">
                                Đăng nhập
                            </button>
                        </div>
                </div>
                <div class="text-center p-t-136">
                    <a class="txt2" href="sign_up.php">
                        Tạo tài khoản
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>

                </form>

                </form>
            </div>
            <div class="card-footer">
                <div class="text-danger">

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../client/particals/footer.php"; ?>