<?php 
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imperium Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/services.css?v=<?= time() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
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

    <!-- HERO SECTION -->
    <section class="hero">
        <img src="img/bg-service.png" alt="Hero Background" class="bg-image">
        <div class="container">
            <div class="hero-text-wrapper">
                <h1><span>Premium</span> Service<br>For You!</h1>
            </div>
            <form class="hero-search" method="get" action="destinasi.php">
                <input type="text" name="search" placeholder="Search destinations...">
                <button type="submit">Search</button>
            </form>
        </div>  
    </section>

    <! --  BAR PERKENALAN --!>
    <section class="intro">
        <div class="container">
            <h2 class="panel-title">WHAT WE OFFER</h2>
            <h2 class="sub-tittle">Complete & Trusted Travel Solutions</h2>
            <p>From group tour packages to exclusive private trips—we offer</p>
            <p>comprehensive travel services tailored to meet the needs and</p>
            <p>dreams of every client.</p>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <h3>Group Tour Package</h3>
                    <p>Travel with other tourists—it’s fun, affordable, and full of new stories.</p>
                    <p><span>✓</span> Min. 10 participants, max. 30 participants</p>
                    <p><span>✓</span> Experienced tour guide</p>
                    <p><span>✓</span> 3–4-star hotels</p>
                    <p><span>✓</span> Comprehensive transportation</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
                <div class="service-card">
                    <h3>Private Tour</h3>
                    <p>An exclusive trip just for you and your family or close friends, with a fully customized itinerary.</p>
                    <p><span>✓</span> Flexible schedule to suit your needs</p>
                    <p><span>✓</span> Private Tour Guide</p>
                    <p><span>✓</span> Selected hotels (4–5 stars)</p>
                    <p><span>✓</span> Luxury private transportation</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
                <div class="service-card">
                    <h3>Honeymoon Package</h3>
                    <p>Celebrate the start of your new life together with a romantic honeymoon package to the world’s most beautiful destinations.</p>
                    <p><span>✓</span> Romantic hotels & honeymoon packages</p>
                    <p><span>✓</span> Exclusive candlelight dinner</p>
                    <p><span>✓</span> Couple Experience Activities</p>
                    <p><span>✓</span> Professional photography</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
                <div class="service-card">
                    <h3>Halal Tourism</h3>
                    <p>A comfortable and peaceful journey for Muslims—with halal accommodations,guaranteed halal meals, and prayer times observed.</p>
                    <p><span>✓</span> Halal-certified Restaurant</p>
                    <p><span>✓</span> Hotel With Prayer Facility</p>
                    <p><span>✓</span> Integrated Prayer Schedule</p>
                    <p><span>✓</span> Muslim Tour Guide</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
                <div class="service-card">
                    <h3>Corporate & MICE</h3>
                    <p>Business travel solutions, incentive trips, and corporate event management for both local and international destinations.</p>
                    <p><span>✓</span> Meeting & conference facility</p>
                    <p><span>✓</span> Team building activities</p>
                    <p><span>✓</span> Incentive trip programs</p>
                    <p><span>✓</span> Event Reporting & Documentation</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
                <div class="service-card">
                    <h3>Ticketing & Visa</h3>
                    <p>Efficient and reliable flight ticketing, international visa processing, and comprehensive travel insurance services for a smooth and hassle-free journey.</p>
                    <p><span>✓</span> Competitive Airfare Prices</p>
                    <p><span>✓</span> Visa Processing for 30+ Countries</p>
                    <p><span>✓</span> Travel Insurance</p>
                    <p><span>✓</span> Fast & Transparent Process</p>
                    <br>
                    <a href="contact.php">ORDER NOW →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- JOURNEY -->
    <section class="journey">
            <h2 class="panel-title">HOW IT WORKS</h2>
            <h2 class="sub-tittle">Start Your Journey In 4 Steps</h2>
            <div class="journey-steps">
            <div class="steps">
                <h3>Consultation</h3>
                <p>Tell our team about your dream trip, budget, and preferences.</p>
            </div>
            <div class="steps">
                <h3>Proposal</h3>
                <p>We will prepare the itinerary and the best price offer within 24 hours.</p>
            </div>
            <div class="steps">
                <h3>Confirmation</h3>
                <p>Approve the plan, make the payment, and we will handle all the documents.</p>
            </div>
            <div class="steps">
                <h3>Departure!</h3>
                <p>Enjoy your dream journey — we are ready to assist you at all times.</p>
            </div>
            </div>
    </section>

    <!-- ADVANAGE -->
    <section class="advantage">
        <div class="container">
            <h2 class="panel-title">OUR ADVANTAGES</h2>
            <h2 class="sub-tittle">Why Choose Imperial Travel</h2>
            <div class="advantage-grid">
                <div class="advantage-card">
                    <h3>12+ Years of Experience</h3>
                    <p>A track record of more than a decade serving travelers with the highest standards.</p>
                </div>
                <div class="advantage-card">
                    <h3>Licensed & Insured</h3>
                    <p>Registered with ASITA & IATA. All trips are covered by comprehensive insurance.</p>
                </div>
                <div class="advantage-card">
                    <h3>Support 24/7</h3>
                    <p>Our team is ready to assist you anytime, wherever you are during your journey.</p>
                </div>
                <div class="advantage-card">
                    <h3>Transparent Pricing</h3>
                    <p>No hidden fees. All prices are already included in the packages we offer.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2 class="panel-title">Ready to Book Your Travel Package?</h2>
            <h2 class="sub-tittle">Get a free consultation with our expert team and receive the best offer today.</h2>
            <button class="btn-normal" onclick="window.location.href='contact.php'">CONTACT US</button>
            <button class="btn-light" onclick="window.location.href='destinasi.php'">VIEW DESTINATIONS</button>
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
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.tiktok.com"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="destinasi.php">Destinations</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="services.php">Private Tour</a></li>
                        <li><a href="services.php">Group Tour</a></li>
                        <li><a href="services.php">Honeymoon Package</a></li>
                        <li><a href="services.php">Corporate Trip</a></li>
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

