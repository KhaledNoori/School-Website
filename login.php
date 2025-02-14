<?php

session_start();

require("database_connect.php");

if (isset($_POST["login"])) {

    $user_name = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE PASSWORD = '$password'And USERNAME = '$user_name'";
    $select_query = mysqli_query($GLOBALS['DB'], $sql);

    $users = mysqli_fetch_assoc($select_query);

    if ($users) {

        $_SESSION['login'] = $user_name;

        header("location:admin.php");
    } else {
       echo "رمز و پسورد شما اشتباه است";
    }
}

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Vazir" !important;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #d31f1f;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555555;
        }

        .input-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .input-error {
            border-color: red;
            /* تغییر رنگ مرز به قرمز */
            background-color: #ffe6e6;
            /* تغییر رنگ پس‌زمینه به قرمز کمرنگ */
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            display: none;
            /* مخفی کردن پیام خطا به طور پیش‌فرض */
        }

        .btn {
            width: 100%;
            padding: 0.5rem;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
            /* رنگ دکمه در حالت hover */
        }

        .login-container a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>ورود به حساب کاربری</h2>
        <form id="loginForm" action="#" method="post">
            <div class="input-group">
                <label for="username">نام کاربری</label>
                <input type="text" id="username" name="username" placeholder="نام کاربری خود را وارد کنید" required>
                <div class="error-message" id="usernameError">لطفاً نام کاربری را وارد کنید.</div>
            </div>
            <div class="input-group">
                <label for="password">رمز عبور</label>
                <input type="password" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
                <div class="error-message" id="passwordError">لطفاً رمز عبور را وارد کنید.</div>
            </div>
            <button type="submit" class="btn" name="login">ورود</button>
        </form>
        <?php if (isset($_GET['red_un_se_id'])) {
            echo "<h3 style='color:red;'>لطفا نام کاربری و رمز خود را دوباره وارد کنید </h3>";
        } ?>

        <p>اگر حساب کاربری ندارید، لطفاً به <a href="">صفحه ثبت‌ نام</a> بروید.</p> <!-- لینک به صفحه ثبت‌ نام -->

    </div>

   

</body>

</html>