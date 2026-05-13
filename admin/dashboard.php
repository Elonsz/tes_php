<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Imperium Travel</title>
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
            margin-bottom: 5px;
        }

        .greeting p {
            font-size: 14px;
            color: var(--text-muted);
        }

        .profile-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .profile-info {
            text-align: right;
        }

        .profile-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-light);
        }

        .profile-role {
            font-size: 12px;
            color: var(--accent);
        }

        .profile-avatar {
            width: 45px;
            height: 45px;
            background-color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            font-size: 18px;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            border-color: var(--accent);
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(142, 93, 60, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .card-icon svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        .card-title {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 8px;
            font-weight: 500;
        }

        .card-value {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-light);
        }

        .welcome-banner {
            background: linear-gradient(135deg, var(--bg-card) 0%, #1a110a 100%);
            border: 1px solid var(--accent);
            border-radius: 16px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .welcome-banner::after {
            content: '';
            position: absolute;
            right: -50px;
            bottom: -50px;
            width: 200px;
            height: 200px;
            border: 2px dashed var(--accent);
            border-radius: 50%;
            opacity: 0.2;
            transform: rotate(45deg);
        }

        .banner-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
        }

        .banner-content h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fff;
        }

        .banner-content h2 span {
            color: var(--accent);
        }

        .banner-content p {
            font-size: 15px;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .btn-primary {
            background-color: var(--accent);
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
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
                <h1>Dashboard Overview</h1>
                <p>Welcome back to Imperium Travel Management System</p>
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

        <div class="welcome-banner">
            <div class="banner-content">
                <h2>Selamat Datang, <span><?php echo isset($user_row['admin_name']) ? $user_row['admin_name'] : 'Admin'; ?></span>!</h2>
                <p>Anda login sebagai Administrator dari Imperium Travel. Kelola data perjalanan, destinasi, dan pemesanan pelanggan dengan aman dan efisien melalui panel kontrol ini.</p>
                <a href="destinasi_data.php" class="btn-primary">Kelola Destinasi</a>
            </div>
        </div>

        <div class="dashboard-cards">
            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                </div>
                <div class="card-title">Total Pengguna</div>
                <div class="card-value">1,248</div>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                    </svg>
                </div>
                <div class="card-title">Total Destinasi</div>
                <div class="card-value">42</div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"/>
                    </svg>
                </div>
                <div class="card-title">Booking Aktif</div>
                <div class="card-value">156</div>
            </div>
        </div>
    </div>

</body>
</html>