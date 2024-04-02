<?php
require_once 'key.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            header("Location: /pages/dashboard/index.php?username=$username");
            exit;
        }
    }

    $error_message = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/suma/login.css">
    <title>SUMA | Portal</title>
</head>
<body>
    <div class="container">
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
        <div class="forms">
            <div class="form login">
                <span class="title">Masuk</span>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Masukan Nama Pengguna" required>
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" class="password" placeholder="Masukan Kata Sandi" required>
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-regular fa-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Ingat Saya</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Pengguna Baru?
                        <a href="#" class="text signup-link">Daftar</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Pendaftaran</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Masukan Nama" required>
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Masukan Email" required>
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Buat Kata Sandi" required>
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-regular fa-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Konfirmasi Sandi" required>
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-regular fa-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">Saya menyetujui semua persyaratan</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Punya Akun?
                        <a href="#" class="text login-link">Masuk Sekarang</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

     <script src="./assets/js/suma/login.js"></script> 
</body>
</html>