<?php session_start(); ?>
<?php
include 'db.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
            <a href="about.php">About</a>
            <a href="destinasi.php">Destination</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
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
    <img src="img/hero-bg.png" alt="Hero Background" class="bg-image">
    
    <div class="container">
        <div class="hero-text-wrapper">
            <span class="hero-subtitle">Discover the Wonders of the World</span>
            <h1>Every <span>Journey</span><br> is a Story</h1>
            <p>We create unforgettable travel experiences — from the tropical beaches of Indonesia to the snowy mountains of Europe.</p>
            <div class="hero-btns">
                <a href="#" class="btn-primary">EXPLORE DESTINATIONS</a>
                <a href="#" class="btn-outline">ABOUT US</a>
            </div>
        </div>
        <div class="search-overlay">
        <input type="text" placeholder="Search Here...">
        <button>Search Services</button>
    </div>
    </div>  
</section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
        <ul>
            <li>
                <div class="stat-item">
                    <h3>120+</h3>
                    <p>Destinations</p>
                </div>
            </li>
            <li>
                <div class="stat-item">
                    <h3>5+</h3>
                    <p>Years Experience</p>
                </div>
            </li>
            <li>
                <div class="stat-item">
                    <h3>15K</h3>
                    <p>Happy Customers</p>
                </div>
            </li>
            <li>
                <div class="stat-item">
                    <h3>200+</h3>
                    <p>Total Tours</p>
                </div>
            </li>
            </ul>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-img">
                <img src="img/ft1.png" alt="About Imperium Travel">
            </div>
            <div class="about-content">
                <h2>Experienced in Taking You to All Corners of the World</h2>
                <p>Imperium Travel was founded in 2012, born from a deep love for the beauty of the earth. We believe that every journey is not just a change of place, but a transformative experience that changes the way we see the world.</p>
                <a href="About.php" class="read-more">READ MORE<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <span class="section-tag" style="text-align: center;">Why Choose Us</span>
            <h2>The Advantages of Imperium Travel</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h4>Best Prices</h4>
                    <p>Get premium travel packages with the best and most transparent prices.</p>
                </div>
                <div class="feature-item">
                    <h4>Luxury Facilities</h4>
                    <p>Enjoy 5-star accommodation and comfortable transportation during your trip.</p>
                </div>
                <div class="feature-item">
                    <h4>Professional Guides</h4>
                    <p>Accompanied by experienced tour guides who master your destination.</p>
                </div>
                <div class="feature-item">
                    <h4>Safe & Comfortable</h4>
                    <p>Customer safety and comfort are the main priorities in every service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps">
        <div class="container">
            <span class="section-tag" style="text-align: center;">How It Works</span>
            <h2>Start Your Journey in 4 Easy Steps</h2>
            <div class="steps-grid">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <h4>Free Consult</h4>
                    <p>Tell our team of specialists about your destination dreams.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">2</div>
                    <h4>Choose a Package</h4>
                    <p>Choose a tour package that suits your vacation needs.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">3</div>
                    <h4>Payment</h4>
                    <p>Make payments using secure and trusted methods.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">4</div>
                    <h4>Depart & Enjoy</h4>
                    <p>Pack your bags and create unforgettable moments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="destinations">
        <div class="container">
            <div class="section-title">
                <div>
                    <span class="section-tag">DESTINATION CHOICES</span>
                    <h2>Dream Destinations</h2>
                </div>
                <a href="Destination.php" class="read-more">SEE ALL <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
            
            <div class="destination-grid">
                <div class="dest-card">
                    <img src="produk/bali.png" alt="Bali" style="background: #ccc;">
                    <div class="dest-info">
                        <span>INDONESIA</span>
                        <h3>Bali</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="produk/santorini.png" alt="Santorini" style="background: #ccc;">
                    <div class="dest-info">
                        <span>GREECE</span>
                        <h3>Santorini</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="produk/kyoto.png" alt="Kyoto" style="background: #ccc;">
                    <div class="dest-info">
                        <span>JAPAN</span>
                        <h3>Kyoto</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="produk/roma.png" alt="Roma" style="background: #ccc;">
                    <div class="dest-info">
                        <span>ITALY</span>
                        <h3>Roma</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="produk/kl.png" alt="Kuala Lumpur" style="background: #ccc;">
                    <div class="dest-info">
                        <span>MALAYSIA</span>
                        <h3>Kuala Lumpur</h3>
                    </div>
                </div>
                <div class="dest-card">
                    <img src="produk/manilla.png" alt="Manila" style="background: #ccc;">
                    <div class="dest-info">
                        <span>PHILIPPINES</span>
                        <h3>Manila</h3>
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
                    <h2>Tourist Favorite Choices</h2>
                </div>
                <a href="Destination.php" class="read-more">See All Tours <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
            
            <div class="tour-grid">
                <?php
                ini_set('error_reporting', 0);
                $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) WHERE product_status = 1 ORDER BY product_id ASC");

                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
                ?>
                <a href="destination.php?id=<?php echo $p['product_id'] ?>" class="tour-card">
                    <div class="tour-img">
                        <img src="produk/<?php echo $p['product_image'] ?>" alt="<?php echo $p['product_name'] ?>">
                    </div>
                    <div class="tour-content">
                        <div class="tour-tag"><?php echo $p['category_name'] ?></div>
                        <h3><?php echo substr($p['product_name'], 0, 40) ?></h3>
                        <div class="tour-meta">
                            <span>4D3N</span>
                            <span>Min 2 PPL</span>
                            <span><svg width="12" height="12" viewBox="0 0 24 24" fill="#F4B400" stroke="none"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg> 4.9</span>
                        </div>
                        <div class="tour-footer">
                            <div class="tour-price">
                                <?php 
                                    $price = $p['product_price'];
                                    if ($price >= 1000000) {
                                        $formatted_price = number_format($price / 1000000, 1, ',', '.');
                                        echo 'Rp ' . $formatted_price . ' Jt';
                                    } else {
                                        echo 'Rp ' . number_format($price, 0, ',', '.');
                                    }
                                ?>
                                <span>/PEOPLE</span>
                            </div>
                            <span class="btn-pesan">BOOKING <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
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
            <h2>The Stories of Explorers</h2>
            <div class="testi-grid">
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"The service from Imperium Travel was truly exceptional. The guides were friendly and the accommodation exceeded our expectations!"</p>
                    <div class="testi-author">
                        <h4>Budi Santoso</h4>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"Family trip to Japan was very enjoyable thanks to the well-structured itinerary. Will definitely use this service again."</p>
                    <div class="testi-author">
                        <h4>Sarah Wijaya</h4>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="stars">★★★★★</div>
                    <p>"The honeymoon experience in Santorini was unforgettable. Everything was handled with detail and perfection by the Imperium team."</p>
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
                <h3>Get Exclusive Promo!</h3>
                <p>Subscribe to our newsletter for the latest destination info and special discounts.</p>
            </div>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter Your Email" required>
                <button type="submit">Subscribe</button>
            </form>
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
                        <li>Jl. Ahmad Yani KM 5, Banjarmasin</li>
                        <li>+62 511 123 4567</li>
                        <li>hello@imperiumtravel.co.id</li>
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