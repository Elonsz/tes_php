<?php include ('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Destinasi - Imperium Travel</title>
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
                <h1>Kelola Destinasi</h1>
                <p>Manajemen data destinasi wisata Imperium Travel</p>
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

        <div class="card-table-container">
            <div class="header-action">
                <h2 style="font-size: 18px; color: var(--text-light);">Daftar Destinasi</h2>
                <a href="destinasi_tambah.php" class="btn-primary" style="padding: 10px 20px; font-size: 13px;">+ Tambah Destinasi</a>
            </div>

            <table class="table1">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Kategori</th>
                        <th>Nama Destinasi</th>
                        <th>Harga</th>
                        <th width="100px">Gambar</th>
                        <th width="100px">Status</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
                        if (mysqli_num_rows($produk) > 0) {
                            while ($row = mysqli_fetch_array($produk)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_name'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td>Rp. <?php echo number_format($row['product_price'], 0, ',', '.') ?></td>
                        <td>
                            <a href="../produk/<?php echo $row['product_image'] ?>" target="_blank">
                                <img src="../produk/<?php echo $row['product_image'] ?>" style="width: 60px; height: 40px; object-fit: cover; border-radius: 4px; border: 1px solid var(--border);">
                            </a>
                        </td>
                        <td>
                            <span style="padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: 600; background: <?php echo ($row['product_status'] != 0) ? 'rgba(34, 197, 94, 0.1)' : 'rgba(239, 68, 68, 0.1)'; ?>; color: <?php echo ($row['product_status'] != 0) ? '#4ade80' : '#f87171'; ?>;">
                                <?php echo ($row['product_status'] != 0) ? 'Aktif' : 'Tidak Aktif'; ?>
                            </span>
                        </td>
                        <td>
                            <div class="action-links">
                                <a href="destinasi_edit.php?id=<?php echo $row['product_id'] ?>" class="btn-edit">Edit</a>
                                <span style="color: var(--border)">|</span>
                                <a href="hapus_proses.php?idp=<?php echo $row['product_id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        } else {
                    ?>
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">Tidak ada data ditemukan</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>