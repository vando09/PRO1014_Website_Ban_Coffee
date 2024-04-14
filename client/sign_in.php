<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
include "../client/particals/header.php";
// if (session_start() === 1) {
//     session_start();
// }
// if (isset($_SESSION['user'])) {
//     header("location: index.php");
// }
// if (isset($_POST['password']) && strlen($_POST['password']) > 0) {
//     require "./models/user.php";

//     $password = $_POST['password'];
//     $email = $_POST['email'];

//     $result = checkUserExits(trim($email));

//     if ($result->num_rows > 0) {
//         $user = $result->fetch_assoc();
//         if (password_verify($password, $user['password'])) {
//             $_SESSION['user'] = $user;

//             header("location: index.php");
//         } else {
//             $_SESSION['email_error'] = "tài khoản hoặc mật khẩu không đúng";
//         }

//     } else {
//         $_SESSION['email_error'] = "Tài khoản hoặc mật khẩu chưa đúng!";
//     }
// }

?>
<div class="content" style="margin-top: 88px;">
    <div class="container rounded" style="padding-top: 50px; padding-bottom: 50px">
        <div class="bg-white">
            <div class="row align-items-center">
                <div class="col-md-12 border-right">
                    <form action="" method="post" class="px-3 pe-lg-5 py-5 sign-in-form">
                        <div class="alert alert-danger border-0 p-0 text-center">
                        </div>
                        <div class="alert alert-success border-0 p-0 text-center">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Đăng nhập</h4>
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
                            <button class="btn btn-primary profile-button" style="background-color: #333"
                                name="submit-btn">
                                Đăng nhập
                            </button>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="dang-ky">
                                Tạo tài khoản
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-danger">
                        <!-- <?php
                        if (isset($_SESSION['email_error'])) {
                            echo $_SESSION['email_error'];
                            unset($_SESSION['email_error']);
                        }
                        ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../client/particals/footer.php"; ?>