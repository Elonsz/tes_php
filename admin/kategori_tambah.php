<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori - Imperium Travel Admin</title>
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
        <div class="header-top">
            <div class="greeting">
                <h1>Tambah Kategori</h1>
                <p>Masukkan kategori destinasi wisata baru</p>
            </div>
            <div class="profile-area">
                <div class="profile-info">
                    <div class="profile-name"><?php echo $user_row['admin_name']; ?></div>
                    <div class="profile-role">Admin Access</div>
                </div>
                <div class="profile-avatar">
                    <?php echo substr($user_row['admin_name'], 0, 1); ?>
                </div>
            </div>
        </div>

        <div class="form-card">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" placeholder="Nama Kategori" class="form-control" required>
                </div>
                
                <div style="display: flex; gap: 10px; margin-top: 20px;">
                    <input type="submit" name="submit" value="Tambah Kategori" class="btn-primary">
                    <a href="kategori_data.php" class="btn-primary" style="background-color: transparent; border: 1px solid var(--border); color: var(--text-muted);">Batal</a>
                </div>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
                                            null,
                                            '".$nama."') ");

                    if($insert){
                        echo '<script>alert("Tambah data berhasil")</script>';
                        echo '<script>window.location="kategori_data.php"</script>';
                    }else{
                        echo 'gagal '.mysqli_error($conn);
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
