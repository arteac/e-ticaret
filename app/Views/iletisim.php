<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2025 E-Ticaret İletişim Sayfası - Bizimle iletişime geçin!">
    <meta name="keywords" content="e-ticaret, iletişim, 2025, modern tasarım">
    <meta name="author" content="xAI Grok 3">
    <title>İletişim - E-Ticaret 2025</title>
    
    <!-- Fontlar -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Harici Stil Dosyası -->
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    
    <style>
        /* Genel Stil Tanımlamaları */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        :root {
            --primary-color: #6b48ff;
            --secondary-color: #00ddeb;
            --text-color: #1e293b;
            --bg-light: #f5f7fa;
            --bg-dark: #1a202c;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.4s ease;
        }

        body {
            background: var(--bg-light);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            transition: background 0.3s ease, color 0.3s ease;
        }

        body.dark-mode {
            background: var(--bg-dark);
            color: #e2e8f0;
        }

        /* Yardımcı Sınıflar */
        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hidden {
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(240, 240, 255, 0.9));
            backdrop-filter: blur(12px);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .logo h1 {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(90deg, #7c3aed, #db2777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: transform 0.3s ease;
        }

        .logo h1:hover {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            justify-content: flex-end;
            gap: 35px;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            position: relative;
            transition: all 0.3s ease;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links a i {
            font-size: 18px;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--primary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 70%;
        }

        .nav-links a:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .menu-icon {
            display: none;
            color: var(--text-color);
            font-size: 28px;
            cursor: pointer;
        }

        /* Dinamik Promosyon Banner */
        .promo-banner {
            position: relative;
            width: 100%;
            height: 450px;
            margin-top: 80px;
            overflow: hidden;
            background: linear-gradient(120deg, #7c3aed, #db2777, #10b981);
            animation: gradientShift 12s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .promo-slider {
            display: flex;
            width: 300%;
            height: 100%;
            animation: slide 18s infinite ease-in-out;
        }

        .promo-slide {
            width: 33.33%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 40px;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s ease;
        }

        .promo-slide:nth-child(1) {
            background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1350&q=80');
        }

        .promo-slide:nth-child(2) {
            background-image: url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=1350&q=80');
        }

        .promo-slide:nth-child(3) {
            background-image: url('https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=1350&q=80');
        }

        .promo-content {
            text-align: center;
            color: #fff;
            z-index: 2;
            padding: 20px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            backdrop-filter: blur(5px);
        }

        .promo-content h2 {
            font-size: 50px;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .promo-content p {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .promo-btn {
            display: inline-block;
            padding: 16px 45px;
            background: #fff;
            color: #7c3aed;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
        }

        .promo-btn:hover {
            background: #7c3aed;
            color: #fff;
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        .promo-timer {
            font-size: 26px;
            font-weight: 700;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.25);
            padding: 12px 25px;
            border-radius: 30px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            33% { transform: translateX(-33.33%); }
            66% { transform: translateX(-66.66%); }
            100% { transform: translateX(0); }
        }

        .promo-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Hero Bölümü */
        .hero-section {
            background: url('<?= base_url('images/hero-bg.jpg') ?>') no-repeat center/cover;
            padding: 150px 0 100px;
            text-align: center;
            color: #fff;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-content a {
            background: var(--primary-color);
            color: #fff;
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .hero-content a:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }

        /* İletişim Bölümü */
        .contact-section {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            position: relative;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            z-index: 0;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            position: relative;
            z-index: 1;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .contact-info:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .contact-info h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            font-weight: 600;
        }

        .contact-info p {
            font-size: 1.2rem;
            color: var(--text-color);
            margin-bottom: 30px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .info-item {
            display: flex;
            align-items: center;
            font-size: 1.2rem;
            color: var(--text-color);
            transition: color 0.3s ease;
        }

        .info-item:hover {
            color: var(--primary-color);
        }

        .info-item i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-right: 15px;
            transition: transform 0.3s ease;
        }

        .info-item:hover i {
            transform: scale(1.1);
        }

        .contact-form {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .contact-form:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .contact-form h3 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: 1rem;
            color: #888;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label,
        .form-group textarea:focus + label,
        .form-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 15px;
            font-size: 0.9rem;
            color: var(--primary-color);
            background: #fff;
            padding: 0 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            background: #f9fafb;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            background: #fff;
            box-shadow: 0 0 10px rgba(107, 72, 255, 0.2);
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-buttons {
            display: flex;
            gap: 20px;
        }

        .contact-form button {
            background: var(--primary-color);
            color: #fff;
            padding: 15px 35px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .contact-form button:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }

        .contact-form .reset-btn {
            background: #f87171;
        }

        .contact-form .reset-btn:hover {
            background: #ef4444;
        }

        #responseMessage {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            display: none;
            font-size: 1rem;
            text-align: center;
        }

        /* Sosyal Medya Bölümü */
        .social-section {
            padding: 80px 0;
            text-align: center;
            background: #fff;
        }

        .social-section h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 40px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .social-icons a {
            font-size: 2.5rem;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .social-icons a:hover {
            color: var(--secondary-color);
            transform: scale(1.2);
        }

        /* Harita Bölümü */
        .map-section {
            padding: 100px 0;
            background: var(--bg-light);
            text-align: center;
        }

        .map-section h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 40px;
        }

        .map-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .map-container iframe {
            width: 100%;
            height: 500px;
            border: none;
        }

        /* Footer Bölümü */
        .footer-section {
            background: var(--primary-color);
            padding: 60px 0;
            color: #fff;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #e2e8f0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: #ffeb3b;
        }

        .footer-bottom {
            font-size: 0.9rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 20px;
        }

        /* Karanlık Mod Toggle */
        .theme-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-color);
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: var(--secondary-color);
            transform: scale(1.1);
        }

        .theme-toggle i {
            font-size: 1.5rem;
        }

        /* Responsive Tasarım */
        @media (max-width: 1024px) {
            .contact-container {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: #fff;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .menu-icon {
                display: block;
            }

            .promo-banner {
                height: 300px;
            }

            .promo-content h2 {
                font-size: 28px;
            }

            .promo-content p {
                font-size: 16px;
            }

            .promo-btn {
                padding: 12px 30px;
            }

            .promo-timer {
                font-size: 20px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .contact-info, .contact-form {
                padding: 30px;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .promo-banner {
                height: 250px;
            }

            .promo-content h2 {
                font-size: 24px;
            }

            .promo-content p {
                font-size: 14px;
            }

            .promo-btn {
                padding: 10px 25px;
            }

            .promo-timer {
                font-size: 18px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .contact-info h2, .contact-form h3 {
                font-size: 1.8rem;
            }

            .form-buttons {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <a href="<?= base_url('/') ?>" style="text-decoration: none;">
                <h1>E-TİCARET 2025</h1>
            </a>
        </div>
        <nav class="nav-links" id="navLinks">
            <a href="<?= base_url('/') ?>"><i class="fas fa-home"></i> Ana Sayfa</a>
            <a href="<?= base_url('urunler') ?>"><i class="fas fa-box"></i> Ürünler</a>
            <a href="<?= base_url('hakkimizda') ?>"><i class="fas fa-info-circle"></i> Hakkımızda</a>
            <a href="<?= base_url('iletisim') ?>"><i class="fas fa-envelope"></i> İletişim</a>
            <a href="<?= base_url('hesap') ?>"><i class="fas fa-user"></i> Hesap</a>
        </nav>
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
    </header>

    <!-- Promosyon Banner -->
    <section class="promo-banner">
        <div class="promo-slider">
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>İlk Alışverişte %20 İndirim!</h2>
                    <p>Yeni üyelere özel, hemen kaydol ve avantajı yakala.</p>
                    <a href="<?= base_url('hesap') ?>" class="promo-btn">Şimdi Katıl</a>
                    <div class="promo-timer" id="timer1">00:00:00</div>
                </div>
            </div>
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>Ücretsiz Kargo Fırsatı</h2>
                    <p>150 TL ve üzeri alışverişlerde kargo bedava!</p>
                    <a href="<?= base_url('urunler') ?>" class="promo-btn">Alışverişe Başla</a>
                    <div class="promo-timer" id="timer2">00:00:00</div>
                </div>
            </div>
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>Haftanın Fırsatları</h2>
                    <p>Seçili ürünlerde %50’ye varan indirimler.</p>
                    <a href="<?= base_url('urunler') ?>" class="promo-btn">Keşfet</a>
                    <div class="promo-timer" id="timer3">00:00:00</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Bölümü -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Bizimle İletişime Geçin</h1>
                <p>Görüşleriniz bizim için önemli! Sorularınızı ve önerilerinizi bekliyoruz.</p>
                <a href="#contact">Mesaj Gönder</a>
            </div>
        </div>
    </section>

    <!-- İletişim Bölümü -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info hidden">
                    <h2>İletişim Bilgilerimiz</h2>
                    <p>Her zaman yanınızdayız! Bize ulaşmak için aşağıdaki bilgileri kullanabilirsiniz.</p>
                    <div class="contact-details">
                        <div class="info-item"><i class="fas fa-phone"></i><span>+90 123 456 7890</span></div>
                        <div class="info-item"><i class="fas fa-envelope"></i><span>info@eticaret2025.com</span></div>
                        <div class="info-item"><i class="fas fa-map-marker-alt"></i><span>İstanbul, Türkiye</span></div>
                    </div>
                </div>
                <div class="contact-form hidden">
                    <h3>Bize Yazın</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder=" " required>
                            <label for="name">Adınız</label>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder=" " required>
                            <label for="email">E-posta</label>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder=" " required></textarea>
                            <label for="message">Mesajınız</label>
                        </div>
                        <div class="form-buttons">
                            <button type="submit">Gönder</button>
                            <button type="reset" class="reset-btn">Temizle</button>
                        </div>
                    </form>
                    <div id="responseMessage"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sosyal Medya Bölümü -->
    <section class="social-section">
        <div class="container">
            <h2>Bizi Takip Edin</h2>
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>

    <!-- Harita Bölümü -->
    <section class="map-section">
        <div class="container">
            <h2>Konumumuz</h2>
            <div class="map-container hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385399.3520038009!2d28.682533630611694!3d41.00485195359158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1733341599756!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Hızlı Bağlantılar</h3>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Ana Sayfa</a></li>
                        <li><a href="<?= base_url('urunler') ?>">Ürünler</a></li>
                        <li><a href="<?= base_url('hakkimizda') ?>">Hakkımızda</a></li>
                        <li><a href="<?= base_url('iletisim') ?>">İletişim</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Destek</h3>
                    <ul>
                        <li><a href="#">SSS</a></li>
                        <li><a href="#">İade Politikası</a></li>
                        <li><a href="#">Gizlilik Politikası</a></li>
                        <li><a href="#">Kullanım Şartları</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>İletişim</h3>
                    <ul>
                        <li><a href="tel:+901234567890">+90 123 456 7890</a></li>
                        <li><a href="mailto:info@eticaret2025.com">info@eticaret2025.com</a></li>
                        <li>İstanbul, Türkiye</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                © 2025 E-Ticaret. Tüm hakları saklıdır.
            </div>
        </div>
    </section>

    <!-- Karanlık Mod Toggle -->
    <div class="theme-toggle" onclick="toggleTheme()">
        <i class="fas fa-moon"></i>
    </div>

    <script>
        // Menü Toggle
        function toggleMenu() {
            const menu = document.getElementById('navLinks');
            menu.classList.toggle('active');
        }

        // Tema Değiştirme
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
            const icon = document.querySelector('.theme-toggle i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
            localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
        }

        // Tema Yükleme
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            document.querySelector('.theme-toggle i').classList.replace('fa-moon', 'fa-sun');
        }

        // Form Gönderme
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch('<?= base_url('iletisim') ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                const responseMessage = document.getElementById('responseMessage');
                responseMessage.style.display = 'block';
                if (data.status === 'success') {
                    responseMessage.style.background = '#34d399';
                    responseMessage.style.color = '#fff';
                    responseMessage.textContent = 'Mesajınız başarıyla gönderildi!';
                    this.reset();
                } else {
                    responseMessage.style.background = '#f87171';
                    responseMessage.style.color = '#fff';
                    responseMessage.textContent = 'Bir hata oluştu, lütfen tekrar deneyin.';
                }
            })
            .catch(error => {
                console.error('Hata:', error);
                const responseMessage = document.getElementById('responseMessage');
                responseMessage.style.display = 'block';
                responseMessage.style.background = '#f87171';
                responseMessage.style.color = '#fff';
                responseMessage.textContent = 'Bir hata oluştu.';
            });
        });

        // Görünürlük Animasyonu
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.hidden').forEach(el => observer.observe(el));

        // Promo Timer (Örnek bir geri sayım)
        function startTimer(id, duration) {
            let time = duration;
            const timer = document.getElementById(id);
            setInterval(() => {
                let hours = Math.floor(time / 3600);
                let minutes = Math.floor((time % 3600) / 60);
                let seconds = time % 60;
                timer.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                if (--time < 0) time = duration;
            }, 1000);
        }

        startTimer('timer1', 3600); // 1 saat
        startTimer('timer2', 7200); // 2 saat
        startTimer('timer3', 1800); // 30 dakika
    </script>
</body>
</html>