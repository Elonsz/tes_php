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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/contact.css">
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
    </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <img src="img/Contact.png" alt="Hero Background" class="bg-image">
        <div class="container">
            <div class="hero-text-wrapper">
                <h1>Mari <span>Berbicara</span><br>Dengan Kami</h1>
            </div>
            <div class="search-overlay">
                <input type="text" placeholder="Search Here...">
                <button>Search Services</button>
            </div>
        </div>  
    </section>

    <!-- CONTACT CONTENT SECTION -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                <!-- Left: Contact Info (Dark Panel) -->
                <div class="contact-info-panel">
                    <div class="panel-content">
                        <h2 class="panel-title text-white">Kami Siap Mewujudkan Perjalanan Impian Anda</h2>
                        <p class="panel-subtitle text-light">Hubungi tim kami untuk konsultasi gratis. Kami akan membantu merancang perjalanan yang sempurna sesuai impian dan anggaran Anda.</p>
                        
                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="info-details">
                                    <span class="info-label">KANTOR PUSAT</span>
                                    <p class="info-value">Jl. Ahmad Yani KM 5, No. 22<br>Banjarmasin, Kalimantan Selatan 70249</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="info-details">
                                    <span class="info-label">TELEPON</span>
                                    <p class="info-value">+62 511 123 4567<br>+62 511 123 4568</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                <div class="info-details">
                                    <span class="info-label">WHATSAPP (24/7)</span>
                                    <p class="info-value">+62 812 3456 7890</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                                <div class="info-details">
                                    <span class="info-label">EMAIL</span>
                                    <p class="info-value">hello@imperiumtravel.co.id<br>tour@imperiumtravel.co.id</p>
                                </div>
                            </div>
                        </div>

                        <div class="operational-hours">
                            <h3 class="section-title">Jam Operasional</h3>
                            <div class="hours-grid">
                                <div class="hours-row">
                                    <span>Senin - Jumat</span>
                                    <span>08.00 - 17.00 WITA</span>
                                </div>
                                <div class="hours-row">
                                    <span>Sabtu</span>
                                    <span>08.00 - 14.00 WITA</span>
                                </div>
                                <div class="hours-row">
                                    <span>Minggu</span>
                                    <span>Libur (WA tetap aktif)</span>
                                </div>
                            </div>
                        </div>

                        <div class="social-follow">
                            <h3 class="section-title">Ikuti Kami</h3>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Consultation Form (Light Panel) -->
                <div class="contact-form-panel">
                    <div class="panel-content">
                        <h2 class="panel-title">Kirim Pesan atau Konsultasi</h2>
                        <p class="panel-subtitle">Isi formulir di bawah dan tim kami akan menghubungi Anda dalam 1x24 jam.</p>
                        
                        <form action="" method="POST" class="consultation-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>NAMA LENGKAP *</label>
                                    <input type="text" name="nama" placeholder="Nama Anda" required>
                                </div>
                                <div class="form-group">
                                    <label>NOMOR HP / WHATSAPP *</label>
                                    <div class="input-with-prefix">
                                        <input type="text" name="hp" placeholder="+62 812 xxxx xxxx" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>ALAMAT EMAIL *</label>
                                <input type="email" name="email" placeholder="nama@email.com" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>JENIS LAYANAN</label>
                                    <select name="layanan">
                                        <option value="">-- Pilih Layanan --</option>
                                        <option value="Private Tour">Private Tour</option>
                                        <option value="Group Tour">Group Tour</option>
                                        <option value="Honeymoon Package">Honeymoon Package</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>RENCANA KEBERANGKATAN</label>
                                    <input type="date" name="tgl_berangkat">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>DESTINASI TUJUAN</label>
                                    <input type="text" name="destinasi" placeholder="Contoh: Bali, Paris, Dubai">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>PESAN / PERTANYAAN</label>
                                <textarea name="pesan" placeholder="Ketik Pesan Anda Di sini"></textarea>
                            </div>

                            <p class="form-note">* Field wajib diisi. Data Anda aman dan tidak akan dibagikan kepada pihak ketiga.</p>
                            
                            <button type="submit" name="submit" class="btn-submit">KIRIM PESAN <i class="fas fa-arrow-right"></i></button>
                        </form>

                        <?php
                            if(isset($_POST['submit'])){
                                $nama = $_POST['nama'];
                                $hp = $_POST['hp'];
                                $email = $_POST['email'];
                                $layanan = $_POST['layanan'];
                                $tgl = $_POST['tgl_berangkat'];
                                $destinasi = $_POST['destinasi'];
                                $pesan = $_POST['pesan'];

                                // Menyesuaikan dengan nama kolom di screenshot (tb_contact)
                                $insert = mysqli_query($conn, "INSERT INTO tb_contact (
                                    `Nama Lengkap`, 
                                    `Nomor HP`, 
                                    `Alamat Email`, 
                                    `Jenis Layanan`, 
                                    `Rencana Keberangkatan`, 
                                    `Destinasi Tujuan`, 
                                    `Pesan / Pertanyaan`
                                ) VALUES (
                                    '".$nama."',
                                    '".$hp."',
                                    '".$email."',
                                    '".$layanan."',
                                    '".$tgl."',
                                    '".$destinasi."',
                                    '".$pesan."'
                                )");

                                if($insert){
                                    echo '<script>alert("Pesan berhasil dikirim!"); window.location="contact.php"</script>';
                                } else {
                                    echo 'Gagal mengirim pesan: '.mysqli_error($conn);
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
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
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="destinasi.php">Destinations</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
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

