<?php
        include('db.php');
        if (isset($_POST['submit'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $sql = mysqli_query($conn, "SELECT * FROM tb_admin 
            WHERE username = '$username' AND password = '$password'")
            or die(mysqli_error($conn));

            if (mysqli_num_rows($sql) == 0) {
                echo "<script>alert('Username / Password Salah')</script>";
                echo '<script type="text/javascript">window.location="login.php";</script>';
            } else {
                session_start();

                $row = mysqli_fetch_assoc($sql);
                $_SESSION['id_login'] = $row['admin_id'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['status_login'] = true;

                if ($row['level'] == 'admin') {
                    echo "<script>alert('Login Berhasil')</script>";
                    echo '<script type="text/javascript">window.location="admin/dashboard.php";</script>';

                } elseif ($row['level'] == 'pelanggan') {
                    echo "<script>alert('Login Berhasil')</script>";
                    echo '<script type="text/javascript">window.location="user/dashboard_user.php";</script>';
                } else {
                    header('location:index.php');
                }
            }
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-color: #ffffff;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .login-section {
            width: 50%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login-content {
            width: 100%;
            max-width: 440px;
            padding: 0 40px;
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 50px;
        }

        .logo-circle {
            width: 140px;
            height: 140px;
            background-color: #1a110a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            position: relative;
        }

        .logo-circle::after {
            content: '';
            position: absolute;
            width: 180px;
            height: 50px;
            border: 1px dashed #8e5d3c;
            border-radius: 50%;
            transform: rotate(-15deg);
            pointer-events: none;
        }

        .brand-name {
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 1.5px;
            color: #1a110a;
            margin-bottom: 4px;
        }

        .brand-sub {
            font-size: 9px;
            font-weight: 500;
            letter-spacing: 2px;
            color: #8e5d3c;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .input-group label {
            font-size: 13px;
            font-weight: 700;
            color: #111;
        }

        .input-group input {
            padding: 16px;
            border: 1px solid #999;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-group input:focus {
            border-color: #643f25;
        }
        
        .input-group input::placeholder {
            color: #888;
        }

        input[name="user"] {
            background-color: #ffffff;
        }

        input[name="pass"] {
            background-color: #ffffff;
        }

        .btn-submit {
            margin-top: 10px;
            background-color: #65432a;
            color: #ffffff;
            padding: 16px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-submit:hover {
            background-color: #513521;
        }

        .image-section {
            width: 50%;
            height: 100%;
            background-image: url('img/login.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .login-section {
                width: 100%;
                height: 100vh;
            }
            .image-section {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-section">
        <div class="login-content">
            <div class="logo-container">
                <div class="logo-circle">
                    <svg width="70" height="70" viewBox="0 0 24 24" fill="#8e5d3c" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(45deg); position: relative; z-index: 1;">
                        <path d="M21,16L22,13L15,10V3.5A1.5,1.5 0 0,0 13.5,2A1.5,1.5 0 0,0 12,3.5V10L5,13L6,16L12,14V18.5L10,20V22L13.5,21L17,22V20L15,18.5V14L21,16Z" />
                    </svg>
                </div>
                <h2 class="brand-name">IMPERIUM</h2>
                <p class="brand-sub">TRAVEL</p>
            </div>

            <form action="" method="POST">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="user" placeholder="Enter Your Username Here" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Enter Your Password Here" required>
                </div>
                <button type="submit" name="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="image-section">
    </div>
</div>

</body>
</html>