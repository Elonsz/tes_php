<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About – Imperium Travel</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/about.css?v=<?= time() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
</style>
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

    <!-- hero -->
     <section class="hero">
    <form class="hero-search" method="get" action="destinasi.php">
        <input type="text" name="search" placeholder="Search destinations...">
        <button type="submit">Search</button>
    </form>
    <div class="hero-content">
      <h1>About <em>Imperium</em> Travel</h1>
    </div>
  </section>

 
  <!-- STORY -->
  <section class="story">
    <div class="story-text">
      <p class="section-eyebrow">Our Story</p>
      <h2>Born from a Love of the World's Beauty</h2>
      <p>Imperium Travel was founded in 2012 by a group of travel enthusiasts who dreamed of bringing the world's best travel experiences to the Indonesian people. Starting from Banjarmasin, we have grown into one of the most trusted travel agencies in South Kalimantan.</p>
      <p>We are more than just tour packages; we design every journey as a transformative experience — full of stories, memories, and meaningful connections. Because we believe a good journey isn't just about how far you go, but about what you feel.</p>
    </div>
    <div class="story-image">
      <img src="Img/about.png" alt="Mountain train" loading="lazy"/>
      <div class="story-badge">
        <span class="num">12+</span>
        <span class="lbl">Years of Experience</span>
      </div>
    </div>
  </section>

  <!-- VISI MISI -->
  <section class="visi-misi">
    <p class="section-eyebrow text-center">Our Values</p>
    <h2>Vision &amp; Mission</h2>
    <div class="vm-grid">
      <div class="vm-card">
        <p class="tag">Vision</p>
        <h3>Becoming the Best Travel Partner in Southeast Asia</h3>
        <p>We are committed to providing products that prioritize authentic Indonesian travel experiences, building invaluable trust, and making travelers' dreams come true.</p>
      </div>
      <div class="vm-card">
        <p class="tag">Mission</p>
        <h3>Designing Unforgettable Journeys</h3>
        <p>Delivering personalized, modern, and beneficial premium travel services — with full dedication to every client's satisfaction and high trust.</p>
      </div>
    </div>
  </section>

  <!-- NILAI -->
  <section class="nilai">
    <p class="section-eyebrow">Our Values</p>
    <h2>The Foundation That Guides Us</h2>
    <div class="nilai-grid">
      <div class="nilai-card">
        <div class="nilai-icon">✦</div>
        <h4>Trust</h4>
        <p>We build long-term relationships based on transparency, honesty, and a real commitment to every promise we make to our clients.</p>
      </div>
      <div class="nilai-card">
        <div class="nilai-icon">◈</div>
        <h4>Excellence</h4>
        <p>Our standards never stop at 'good enough'. We continue to push for service experiences that exceed expectations.</p>
      </div>
      <div class="nilai-card">
        <div class="nilai-icon">◉</div>
        <h4>Sustainability</h4>
        <p>We are committed to responsible travel practices — respecting local culture, supporting local communities, and preserving nature.</p>
      </div>
      <div class="nilai-card">
        <div class="nilai-icon">⬡</div>
        <h4>Innovation</h4>
        <p>We continue to innovate in designing travel experiences — connecting new destinations, digital services, and fresh ways of creating moments.</p>
      </div>
      <div class="nilai-card">
        <div class="nilai-icon">❧</div>
        <h4>Passion</h4>
        <p>Every member of our team is a true travel lover. This same love is what drives us to give our hearts sincerely and passionately.</p>
      </div>
      <div class="nilai-card">
        <div class="nilai-icon">⬤</div>
        <h4>Security</h4>
        <p>Your safety and comfort are our top priorities — from guaranteed accommodation and health options to protection throughout the journey.</p>
      </div>
    </div>
  </section>

  <!-- TIM -->
  <section class="tim">
    <p class="section-eyebrow">Our Team</p>
    <h2>The People Behind Imperium Travel</h2>
    <div class="tim-grid">
      <div class="tim-card">
        <img src="Img/tomholland.png" alt="CEO"/>
        <div class="tim-overlay">
          <p class="name">Tom Holland</p>
          <p class="role">CEO & Founder</p>
        </div>
      </div>
      <div class="tim-card">
        <img src="Img/leonardodcaprio.png" alt="COO"/>
        <div class="tim-overlay">
          <p class="name">Leonardo  DiCaprio</p>
          <p class="role">Head of Operations</p>
        </div>
      </div>
      <div class="tim-card">
        <img src="Img/handimorganw.png" alt="Tour Director"/>
        <div class="tim-overlay">
          <p class="name">Handi Morgan W.</p>
          <p class="role">Senior Tour Designer</p>
        </div>
      </div>
      <div class="tim-card">
        <img src="Img/keanu.png" alt="Marketing"/>
        <div class="tim-overlay">
          <p class="name">Keanu Reeves</p>
          <p class="role">Customer Experience</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <section class="timeline-section">
    <p class="section-eyebrow">Our Journey</p>
    <h2>Milestones</h2>
    <div class="timeline">

      <div class="tl-item">
        <div class="tl-content">
          <span class="year">2012</span>
          <h4>Founded in Banjarmasin</h4>
          <p>Imperium Travel was born with a vision to be a bridge between travelers and the natural wonders of Southeast Asia.</p>
        </div>
        <div class="tl-dot"></div>
        <div class="tl-empty"></div>
      </div>

      <div class="tl-item">
        <div class="tl-empty"></div>
        <div class="tl-dot"></div>
        <div class="tl-content">
          <span class="year">2015</span>
          <h4>Asia Expansion</h4>
          <p>Opening travel routes to more than thirteen international destinations in Asia and Europe.</p>
        </div>
      </div>

      <div class="tl-item">
        <div class="tl-content">
          <span class="year">2018</span>
          <h4>ANTA Award</h4>
          <p>Received an award as the Best Travel Agency in the Kalimantan Region.</p>
        </div>
        <div class="tl-dot"></div>
        <div class="tl-empty"></div>
      </div>

      <div class="tl-item">
        <div class="tl-empty"></div>
        <div class="tl-dot"></div>
        <div class="tl-content">
          <span class="year">2020</span>
          <h4>Digital Adaptation</h4>
          <p>Launching online booking services and digital platforms to make it easier for customers.</p>
        </div>
      </div>

      <div class="tl-item">
        <div class="tl-content">
          <span class="year">2024</span>
          <h4>15,000+ Satisfied Travelers</h4>
          <p>Reaching the milestone of serving more than fifteen thousand travelers from all over Indonesia.</p>
        </div>
        <div class="tl-dot"></div>
        <div class="tl-empty"></div>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h2>Ready to Start Your Adventure?</h2>
    <p>Trust your dream journey to us — and let us turn it into a lifetime memory.</p>
    <a href="contact.php" class="cta-btn">Contact Us</a>
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
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Destination.php">Destinations</a></li>
                        <li><a href="Services.php">Our Services</a></li>
                        <li><a href="Contact.php">Contact</a></li>
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
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Jl. Ahmad Yani KM 5, Banjarmasin
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            +62 511 123 4567
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            hello@imperiumtravel.co.id 
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