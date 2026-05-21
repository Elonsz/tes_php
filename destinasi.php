<?php
include 'db.php';

$active_cat = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Ambil kategori untuk navigasi Tab
$nav_categories = [];
$cat_query = $conn->query("SELECT * FROM tb_category ORDER BY category_id ASC");
if ($cat_query) {
    while ($row = $cat_query->fetch_assoc()) {
        $nav_categories[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations - Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100..1000&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/destinasi.css?v=<?= time() ?>"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<header>
    <div class="header-wrapper">
        <div class="header-left">
            <a href="index.php" class="logo-link">
                <img src="img/logo.png" alt="Logo">
                <span class="logo-text">Imperium<span class="logo-accent">Travel</span></span>
            </a>
        </div>
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="destinasi.php" class="active">Destinations</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
</header>
<section class="hero">
    <div class="hero-bg">
    </div>
    <div class="hero-overlay"></div>
    <form class="hero-search" method="get" action="destinasi.php">
        <input type="hidden" name="cat" value="<?= $active_cat ?>">
        <input type="text" name="search" id="searchInput" placeholder="Search destinations..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>
    <div class="hero-text">
        <h1>Explore <span class="hero-accent">80+</span><br>World Destinations</h1>
    </div>
</section>

<section class="destinations-section">
    <!-- Filter Tabs -->
    <div class="filter-bar">
        <a href="destinasi.php?cat=0<?= $search !== '' ? '&search=' . urlencode($search) : '' ?>" class="filter-tab <?= $active_cat === 0 ? 'active' : '' ?>" id="tab-0">All</a>
        <?php foreach ($nav_categories as $nav_cat):
            $catId = (int)$nav_cat['category_id'];
            $searchQuery = $search !== '' ? '&search=' . urlencode($search) : '';
        ?>
            <a href="destinasi.php?cat=<?= $catId ?><?= $searchQuery ?>" class="filter-tab <?= $catId === $active_cat ? 'active' : '' ?>" id="tab-<?= $catId ?>">
                <?= htmlspecialchars($nav_cat['category_name']) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Main Container -->
    <div id="display-container">
        <?php include 'get_products.php'; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-inner">
        <h2>Couldn't Find Your Perfect Destination?</h2>
        <p>Contact our team to help you plan a trip to any destination in the world.</p>
        <a href="contact.php" class="cta-btn">Free Consultation</a>
    </div>
</section>
 
<!-- Footer -->
<footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 style="font-style: italic;">Imperium <span style="color: #E07B39;">Travel</span></h3>
                    <p>Let us take you to explore the beauty of the world with a premium, safe, and unforgettable travel experience.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Destination.php">Destinations</a></li>
                        <li><a href="Services.php">Our Services</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="Services.php">Private Tour</a></li>
                        <li><a href="Services.php">Group Tour</a></li>
                        <li><a href="Services.php">Honeymoon Package</a></li>
                        <li><a href="Services.php">Corporate Trip</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul class="contact-info">
                        <li>Jl. Ahmad Yani KM 5, Banjarmasin</li>
                        <li>+62 511 123 4567</li>
                        <li>hello@imperiumtravel.co.id</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Imperium Travel. All Rights Reserved.</p>
                <p>Designed for premium travelers.</p>
            </div>
        </div>
    </footer>
</body>
</html>