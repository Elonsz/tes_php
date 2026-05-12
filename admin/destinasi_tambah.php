<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi - Imperium Travel</title>
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
                <h1>Tambah Destinasi Baru</h1>
                <p>Masukkan informasi destinasi wisata baru</p>
            </div>
            <div class="profile-area">
                <div class="profile-info">
                    <div class="profile-name"><?php echo isset($user_row['admin_name']) ? $user_row['admin_name'] : 'Administrator'; ?></div>
                    <div class="profile-role">Admin Access</div>
                </div>
                <div class="profile-avatar">
                    <?php echo isset($user_row['admin_name']) ? substr($user_row['admin_name'], 0, 1) : 'A'; ?>
                </div>
            </div>
        </div>

        <div class="form-card">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kategori Destinasi</label>
                    <select class="form-control" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php
                            $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_name ASC");
                            while ($r = mysqli_fetch_array($kategori)) {
                        ?>
                            <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Nama Destinasi</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama destinasi" required>
                </div>

                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" placeholder="Masukkan harga" required>
                </div>

                <div class="form-group">
                    <label>Gambar Destinasi</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Deskripsi Destinasi</label>
                    <textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan deskripsi lengkap"></textarea>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>

                <div style="display: flex; gap: 10px; margin-top: 30px;">
                    <button name="submit" type="submit" class="btn-primary">Tambah Destinasi</button>
                    <a href="destinasi_data.php" class="btn-primary" style="background-color: transparent; border: 1px solid var(--border); color: var(--text-muted);">Batal</a>
                </div>
            </form>

            <?php
                if (isset($_POST['submit'])) {
                    $kategori   = $_POST['kategori'];
                    $nama       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];

                    $filename   = $_FILES['gambar']['name'];
                    $tmp_name   = $_FILES['gambar']['tmp_name'];

                    $type1 = explode('.', $filename);
                    $type2 = end($type1);

                    $newname = 'destinasi' . time() . '.' . $type2;
                    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'avif');

                    if (!in_array(strtolower($type2), $tipe_diizinkan)) {
                        echo '<script>alert("Format file tidak diizinkan")</script>';
                    } else {
                        move_uploaded_file($tmp_name, '../produk/' . $newname);

                        $insert = mysqli_query($conn, "INSERT INTO tb_product VALUES (
                                            null,
                                            '".$kategori."',
                                            '".$nama."',
                                            '".$harga."',
                                            '".$deskripsi."',
                                            '".$newname."',
                                            '".$status."',
                                            null,
                                            '0'
                                        ) ");

                        if ($insert) {
                            echo '<script>alert("Tambah data berhasil")</script>';
                            echo '<script>window.location="destinasi_data.php"</script>';
                        } else {
                            echo 'gagal ' . mysqli_error($conn);
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
