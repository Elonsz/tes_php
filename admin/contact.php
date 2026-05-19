<?php 
    include('session.php'); 
    include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Submissions - Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #1a110a;
            --bg-darker: #110a05;
            --bg-card: #2a1b12;
            --accent: #8e5d3c;
            --accent-hover: #65432a;
            --text-light: #eef0f2;
            --text-muted: #a09892;
            --border: #3d2a1d;
            --danger: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-light);
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: var(--bg-darker);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 10;
        }

        .sidebar-header {
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-bottom: 1px solid var(--border);
        }

        .logo-circle {
            width: 60px;
            height: 60px;
            background-color: var(--bg-dark);
            border: 1px dashed var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .brand-name {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 2px;
            color: var(--text-light);
            text-align: center;
        }

        .brand-sub {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 3px;
            color: var(--accent);
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px 0;
            flex: 1;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar ul li a:hover, .sidebar ul li a.active {
            background-color: rgba(142, 93, 60, 0.1);
            color: var(--accent);
            border-left-color: var(--accent);
        }

        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        .greeting h1 {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-light);
        }

        .table-container {
            background-color: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: rgba(0,0,0,0.2);
            padding: 15px 20px;
            font-size: 13px;
            font-weight: 600;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 15px 20px;
            font-size: 14px;
            color: var(--text-light);
            border-bottom: 1px solid var(--border);
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: rgba(255,255,255,0.02);
        }

        .btn-delete {
            background-color: var(--danger);
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .btn-delete:hover {
            opacity: 0.8;
        }

        .no-data {
            text-align: center;
            padding: 40px;
            color: var(--text-muted);
            font-style: italic;
        }
        
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
            background-color: var(--accent);
            color: #fff;
        }
    </style>
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
                <h1>Message</h1>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Departure Date</th>
                        <th>Destination</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $contacts = mysqli_query($conn, "SELECT * FROM tb_contact ORDER BY `Nama Lengkap` DESC"); // Note: Since there is no ID, we order by Name
                        if(mysqli_num_rows($contacts) > 0){
                            while($row = mysqli_fetch_array($contacts)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><strong><?php echo $row['Nama Lengkap'] ?></strong></td>
                        <td><?php echo $row['Nomor HP'] ?></td>
                        <td><?php echo $row['Alamat Email'] ?></td>
                        <td><span class="badge"><?php echo $row['Jenis Layanan'] ?></span></td>
                        <td><?php echo $row['Rencana Keberangkatan'] ?></td>
                        <td><?php echo $row['Destinasi Tujuan'] ?></td>
                        <td><?php echo substr($row['Pesan / Pertanyaan'], 0, 50) ?>...</td>
                        <td>
                            <a href="contact_delete.php?nama=<?php echo urlencode($row['Nama Lengkap']) ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this message?')">Delete</a>
                        </td>
                    </tr>
                    <?php }} else { ?>
                        <tr>
                            <td colspan="9" class="no-data">No messages have been received yet.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
