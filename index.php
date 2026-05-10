<?php session_start(); ?>
<?php
include 'db.php';

$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <!-- Header -->
    <header>
    <div class="header-wrapper">
        <div class="header-left">
            <a href="index.php" class="logo-link">
                <img src="img/logo.png" alt="Logo">
                <span class="logo-text">Imperium Travel</span>
            </a>
        </div>

        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Destination</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>

        <div class="header-right">
            <?php if(isset($_SESSION['status_login']) && $_SESSION['status_login'] == true): ?>
                <div class="admin-profile-card">
                    <a href="admin/dashboard.php" class="btn-home-admin">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </a>
                    <span class="admin-name"><?php echo $_SESSION['admin_name']; ?></span>
                    <div class="admin-avatar-small"><?php echo substr($_SESSION['admin_name'], 0, 1); ?></div>
                </div>
            <?php else: ?>
                <a href="login.php" class="btn-login">Login</a>
            <?php endif; ?>
        </div>
    </div>
</header>

    <!-- Hero Section -->
    <section class="hero">    
        <div class="hero-content">
    <img src="img/hero-bg.png" alt="Hero Background" class="bg-image">

    <div class="overlay">
      <input type="text" placeholder="SEARCH HERE">
      <button>Cari Layanan</button>
    </div>
  </div>    
        <div class="container">
            <div class="hero-content">
                <span class="hero-subtitle">Eksplorasi Keindahan Dunia</span>
                <h1>Setiap <span>Perjalanan</span> Adalah Sebuah Cerita</h1>
                <p>Jadikan liburan Anda lebih bermakna dengan layanan perjalanan eksklusif dan pengalaman tak terlupakan bersama Imperium Travel.</p>
                <div class="hero-btns">
                    <button class="btn-primary">Explore Now</button>
                    <button class="btn-outline">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stat-item">
                <h3>120+</h3>
                <p>Destinations</p>
            </div>
            <div class="stat-item">
                <h3>5+</h3>
                <p>Years Experience</p>
            </div>
            <div class="stat-item">
                <h3>15K</h3>
                <p>Happy Customers</p>
            </div>
            <div class="stat-item">
                <h3>200+</h3>
                <p>Total Tours</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-img">
                <img src="img/about.jpg" alt="About Imperium Travel" style="background: #ccc; height: 400px; object-fit: cover;">
            </div>
            <div class="about-content">
                <span class="section-tag">About Us</span>
                <h2>Berpengalaman Membawa Anda ke Seluruh Penjuru Dunia</h2>
                <p>Imperium Travel adalah agen perjalanan terpercaya yang telah membantu ribuan wisatawan mewujudkan liburan impian mereka. Kami menyediakan paket tour eksklusif dengan fasilitas premium untuk memastikan kenyamanan Anda.</p>
                <a href="About.php" class="read-more">Read More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <span class="section-tag" style="text-align: center;">Why Choose Us</span>
            <h2>Keunggulan Imperium Travel</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h4>Harga Terbaik</h4>
                    <p>Dapatkan paket wisata premium dengan penawaran harga terbaik dan transparan.</p>
                </div>
                <div class="feature-item">
                    <h4>Fasilitas Mewah</h4>
                    <p>Nikmati akomodasi bintang 5 dan transportasi nyaman selama perjalanan Anda.</p>
                </div>
                <div class="feature-item">
                    <h4>Pemandu Profesional</h4>
                    <p>Didampingi oleh tour guide berpengalaman yang menguasai destinasi tujuan Anda.</p>
                </div>
                <div class="feature-item">
                    <h4>Aman & Nyaman</h4>
                    <p>Keselamatan dan kenyamanan pelanggan adalah prioritas utama dalam setiap layanan kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps">
        <div class="container">
            <span class="section-tag" style="text-align: center;">How It Works</span>
            <h2>Mulai Perjalanan dalam 4 Langkah Mudah</h2>
            <div class="steps-grid">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <h4>Pilih Destinasi</h4>
                    <p>Eksplorasi dan temukan tujuan impian Anda.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">2</div>
                    <h4>Pesan Paket</h4>
                    <p>Pilih paket tour yang sesuai dengan kebutuhan liburan Anda.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">3</div>
                    <h4>Pembayaran</h4>
                    <p>Lakukan pembayaran dengan metode yang aman dan terpercaya.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">4</div>
                    <h4>Berangkat & Nikmati</h4>
                    <p>Siapkan koper Anda dan ciptakan momen tak terlupakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="destinations">
        <div class="container">
            <div class="section-title">
                <div>
                    <span class="section-tag">Destinations</span>
                    <h2>Tempat-Tempat Impian</h2>
                </div>
                <a href="Destination.php" class="read-more">See All Destinations <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
            
            <div class="destination-grid">
                <div class="dest-card">
                    <img src="img/bali.jpg" alt="Bali" style="background: #ccc;">
                    <div class="dest-info">
                        <span>Indonesia</span>
                        <h3>Bali</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="img/santorini.jpg" alt="Santorini" style="background: #ccc;">
                    <div class="dest-info">
                        <span>Greece</span>
                        <h3>Santorini</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="img/kyoto.jpg" alt="Kyoto" style="background: #ccc;">
                    <div class="dest-info">
                        <span>Japan</span>
                        <h3>Kyoto</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tours Section (Dynamic Products) -->
    <section class="tours">
        <div class="container">
            <div class="section-title">
                <div>
                    <span class="section-tag">Best Offers</span>
                    <h2>Pilihan Favorit Wisatawan</h2>
                </div>
                <a href="Destination.php" class="read-more">See All Tours <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
            
            <div class="tour-grid">
                <?php
                ini_set('error_reporting', 0);
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 3");

                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
                ?>
                <a href="detail_produk.php?id=<?php echo $p['product_id'] ?>" class="tour-card">
                    <div class="tour-img">
                        <img src="produk/<?php echo $p['product_image'] ?>" alt="<?php echo $p['product_name'] ?>">
                        <div class="tour-tag">Populer</div>
                    </div>
                    <div class="tour-content">
                        <h3><?php echo substr($p['product_name'], 0, 30) ?></h3>
                        <div class="tour-meta">
                            <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 5 Days</span>
                            <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Stok <?php echo $p['stok'] ?></span>
                        </div>
                        <div class="tour-footer">
                            <div class="tour-price">
                                Rp <?php echo number_format($p['product_price']) ?> <span>/ org</span>
                            </div>
                            <span class="read-more" style="font-size: 10px;">Detail <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                        </div>
                    </div>
                </a>
                <?php
                    }
                } else {
                    echo "<p>Produk tidak ada</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <span class="section-tag">Testimonials</span>
            <h2>Cerita Para Penjelajah</h2>
            <div class="testi-grid">
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"Pelayanan dari Imperium Travel sangat luar biasa. Tour guide yang ramah dan akomodasi yang melebihi ekspektasi kami!"</p>
                    <div class="testi-author">
                        <h4>Budi Santoso</h4>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"Liburan keluarga ke Jepang jadi sangat menyenangkan berkat itinerary yang terstruktur rapi. Pasti akan menggunakan jasa ini lagi."</p>
                    <div class="testi-author">
                        <h4>Sarah Wijaya</h4>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"Pengalaman bulan madu di Santorini yang tak terlupakan. Semua diurus dengan detail dan sempurna oleh tim Imperium."</p>
                    <div class="testi-author">
                        <h4>Dian & Reza</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-text">
                <h3>Dapatkan Promo Eksklusif!</h3>
                <p>Berlangganan newsletter kami untuk info destinasi terbaru dan diskon spesial.</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="Masukkan Email Anda" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <div class="logo-circle">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(45deg);">
                                <path d="M21,16L22,13L15,10V3.5A1.5,1.5 0 0,0 13.5,2A1.5,1.5 0 0,0 12,3.5V10L5,13L6,16L12,14V18.5L10,20V22L13.5,21L17,22V20L15,18.5V14L21,16Z" />
                            </svg>
                        </div>
                        ImperiumTravel
                    </div>
                    <p>Membawa Anda menjelajahi keindahan dunia dengan pengalaman perjalanan yang premium, aman, dan tak terlupakan.</p>
                    <div class="social-links">
                        <a href="#">f</a>
                        <a href="#">t</a>
                        <a href="#">ig</a>
                        <a href="#">in</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Navigasi</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Destination.php">Destinations</a></li>
                        <li><a href="Services.php">Our Services</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="#">Private Tour</a></li>
                        <li><a href="#">Group Tour</a></li>
                        <li><a href="#">Honeymoon Package</a></li>
                        <li><a href="#">Corporate Trip</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Hubungi Kami</h3>
                    <ul class="contact-info">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <?php echo $a->admin_address ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <?php echo $a->admin_email ?>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <?php echo $a->admin_telp ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Imperium Travel. All Rights Reserved.</p>
                <p>Designed for premium travelers.</p>
            </div>
        </div>
    </footer>

</body>
</html>