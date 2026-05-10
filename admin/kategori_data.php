<?php include ('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kategori Data - Imperium Travel</title>
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
                <h1>Data Kategori</h1>
                <p>Kelola kategori destinasi wisata</p>
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
                <h5 class="card-title" style="margin-bottom: 0; font-size: 18px; color: var(--text-light); font-weight: 600;">Daftar Kategori</h5>
                <a href="kategori_tambah.php" class="btn-primary">Tambah Data</a>
            </div>
            
            <table class="table1">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="70%">Kategori</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        if(mysqli_num_rows($kategori) > 0){
                            while($row = mysqli_fetch_array($kategori)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_name'] ?></td>
                        <td>
                            <div class="action-links">
                                <a href="kategori_edit.php?id=<?php echo $row['category_id'] ?>" class="btn-edit">Edit</a> 
                                <span style="color: var(--border);">|</span>
                                <a href="hapus_proses.php?idk=<?php echo $row['category_id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        }else{ ?>
                    <tr>
                        <td colspan="3" style="text-align: center;">Tidak ada data</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
