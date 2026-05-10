<?php include 'session.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin - Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="var(--accent)" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(45deg);">
                    <path d="M21,16L22,13L15,10V3.5A1.5,1.5 0 0,0 13.5,2A1.5,1.5 0 0,0 12,3.5V10L5,13L6,16L12,14V18.5L10,20V22L13.5,21L17,22V20L15,18.5V14L21,16Z" />
                </svg>
            </div>
            <div class="brand-name">IMPERIUM</div>
            <div class="brand-sub">TRAVEL</div>
        </div>
        <ul>
            <?php include 'sidebar.php'; ?>
        </ul>
    </div>

    <div class="main-content">
        <?php
        $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id_login']."' ");
        $d = mysqli_fetch_object($query);
        ?>
        <div class="header-top">
            <div class="greeting">
                <h1>Pengaturan Profil</h1>
                <p>Kelola informasi profil dan password Anda</p>
            </div>
            <div class="profile-area">
                <div class="profile-info">
                    <div class="profile-name"><?php echo isset($d->admin_name) ? $d->admin_name : 'Administrator'; ?></div>
                    <div class="profile-role">Admin Access</div>
                </div>
                <div class="profile-avatar">
                    <?php echo isset($d->admin_name) ? substr($d->admin_name, 0, 1) : 'A'; ?>
                </div>
            </div>
        </div>

        <div class="profile-layout">
            <div class="profile-content">
                <div class="form-card" style="margin-bottom: 30px;">
                    <h3 style="margin-bottom: 20px; font-weight: 600; color: var(--text-light);">Data Profil</h3>
                    <form id="form-profil" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $d->admin_name ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" placeholder="Username" value="<?php echo $d->username ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="hp" class="form-control" placeholder="No. Telepon" value="<?php echo $d->admin_telp ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $d->admin_email ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $d->admin_address ?>" required>
                        </div>
                        <div class="form-group" style="margin-top: 30px; margin-bottom: 0;">
                            <button name="submit" type="submit" class="btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>

                <div class="form-card">
                    <h3 style="margin-bottom: 20px; font-weight: 600; color: var(--text-light);">Ubah Password</h3>  
                    <form id="form-password" method="post">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" name="pass1" class="form-control" placeholder="Password Baru" required>
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" name="pass2" class="form-control" placeholder="Konfirmasi Password Baru" required>
                        </div>
                        <div class="form-group" style="margin-top: 30px; margin-bottom: 0;">
                            <button name="ubah_password" type="submit" class="btn-primary">Ubah Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php 
            if(isset($_POST['submit'])){
                $nama   = ucwords($_POST['nama']);
                $user   = $_POST['user'];
                $hp     = $_POST['hp'];
                $email  = $_POST['email'];
                $alamat = ucwords($_POST['alamat']);
                $update = mysqli_query($conn, "UPDATE tb_admin SET
                                                admin_name = '".$nama."',
                                                username = '".$user."',
                                                admin_telp = '".$hp."',
                                                admin_email = '".$email."',
                                                admin_address = '".$alamat."'
                                                WHERE admin_id = '".$d->admin_id."' ");
                if($update){
                    echo '<script>alert("Ubah data berhasil")</script>';
                    echo '<script>window.location="profile.php"</script>';
                }else{
                    echo '<script>alert("Gagal: '.mysqli_error($conn).'")</script>';
                }
            }

            if(isset($_POST['ubah_password'])){
                $pass1  = $_POST['pass1'];
                $pass2  = $_POST['pass2'];
                if($pass2 != $pass1){
                    echo '<script>alert("Konfirmasi Password Baru Tidak Sesuai")</script>';
                }else{
                    $u_pass = mysqli_query($conn, "UPDATE tb_admin SET password = '".$pass1."' WHERE admin_id = '".$d->admin_id."' ");
                    if($u_pass){
                        echo '<script>alert("Ubah password berhasil")</script>';
                        echo '<script>window.location="profile.php"</script>';
                    }else{
                        echo '<script>alert("Gagal: '.mysqli_error($conn).'")</script>';
                    }
                }
            }
        ?>
    </div>

</body>
</html>