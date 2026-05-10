<?php include ('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Kategori - Imperium Travel</title>
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
                <h1>Tambah Kategori</h1>
                <p>Tambah kategori destinasi wisata baru</p>
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

        <div class="form-card">
            <div class="header-action">
                <h5 class="card-title" style="margin-bottom: 0; font-size: 18px; color: var(--text-light); font-weight: 600;">Form Tambah Kategori</h5>
                <a href="kategori_data.php" class="btn-primary">Kembali</a>
            </div>

            <form action="" method="post">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" placeholder="Nama Kategori" class="form-control" required>
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <button name="submit" type="submit" class="btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>

        <?php
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES('', '$nama')");
                if($insert){
                    echo '<script>alert("Tambah data berhasil")</script>';
                    echo '<script>window.location="kategori_data.php"</script>';
                }else{
                    echo '<script>alert("Gagal: '.mysqli_error($conn).'")</script>';
                }
            }
        ?>
    </div>
</body>
</html>