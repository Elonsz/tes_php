<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori - Imperium Travel Admin</title>
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
                <h1>Kelola Kategori</h1>
                <p>Manajemen kategori destinasi wisata Imperium Travel</p>
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

        <div class="card-table-container">
            <div class="header-action">
                <h2 style="font-size: 18px; color: var(--text-light);">Daftar Kategori</h2>
                <a href="kategori_tambah.php" class="btn-primary" style="padding: 10px 20px; font-size: 13px;">+ Tambah Kategori</a>
            </div>

            <table class="table1">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Nama Kategori</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
                        if (mysqli_num_rows($kategori) > 0) {
                            while ($row = mysqli_fetch_array($kategori)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_name'] ?></td>
                        <td>
                            <div class="action-links">
                                <a href="kategori_edit.php?id=<?php echo $row['category_id'] ?>" class="btn-edit">Edit</a>
                                <span style="color: var(--border)">|</span>
                                <a href="hapus_proses.php?idk=<?php echo $row['category_id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="3" style="text-align: center; padding: 40px; color: var(--text-muted);">Tidak ada data ditemukan</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
