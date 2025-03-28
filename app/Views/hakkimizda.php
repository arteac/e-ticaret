<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - E-Ticaret Sitesi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f5f7fa;
            color: #1e293b;
            line-height: 1.6;
            overflow-x: hidden;
        }
        /* Hero Section */
        .hero-section {
            position: relative;
            width: 100%;
            height: 600px;
            background: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            padding: 120px 40px;
            text-align: center;
            color: #fff;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.7), rgba(219, 39, 119, 0.7));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 60px;
            font-weight: 800;
            text-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            animation: slideIn 1s ease;
        }

        .hero-content p {
            font-size: 24px;
            margin: 20px 0 40px;
            animation: slideIn 1.2s ease;
        }

        .hero-content a {
            display: inline-block;
            padding: 16px 40px;
            background: #fff;
            color: #7c3aed;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            animation: slideIn 1.4s ease;
        }

        .hero-content a:hover {
            background: #7c3aed;
            color: #fff;
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* About Us Section */
        #about-us {
            padding: 120px 20px;
            background: linear-gradient(135deg, #f5f7fa, #fff);
            position: relative;
            overflow: hidden;
        }

        #about-us::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(124, 58, 237, 0.1), transparent);
            animation: rotate 20s infinite linear;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        .about-us h2 {
            text-align: center;
            font-size: 4rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 80px;
            text-transform: uppercase;
            letter-spacing: 4px;
            background: linear-gradient(90deg, #7c3aed, #db2777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }

        .about-us .content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .about-us .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .about-us .card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            transform-style: preserve-3d;
            position: relative;
            overflow: hidden;
        }

        .about-us .card:hover {
            transform: translateY(-15px) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .about-us .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .about-us .card:hover::before {
            opacity: 1;
        }

        .about-us .card h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #7c3aed, #db2777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-us .card p {
            font-size: 1.2rem;
            color: #475569;
            line-height: 1.8;
        }

        .about-us .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
            transition: transform 0.4s ease;
        }

        .about-us .card:hover img {
            transform: scale(1.05);
        }

        .about-us .values-list {
            margin-top: 20px;
        }

        .about-us .values-list p {
            font-size: 1.1rem;
            color: #64748b;
            margin: 15px 0;
        }

        .about-us .values-list p strong {
            color: #1e293b;
            font-weight: 700;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1e293b, #2d3748);
            color: #e2e8f0;
            padding: 100px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent);
            z-index: 0;
        }

        .footer-content {
            position: relative;
            z-index: 1;
        }

        .footer p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .footer .social-links {
            margin: 30px 0;
        }

        .footer .social-links a {
            color: #e2e8f0;
            font-size: 36px;
            margin: 0 30px;
            transition: all 0.4s ease;
        }

        .footer .social-links a:hover {
            color: #7c3aed;
            transform: scale(1.3) rotate(15deg);
        }

        .footer .extra-links {
            margin-top: 30px;
        }

        .footer .extra-links a {
            color: #94a3b8;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .footer .extra-links a:hover {
            color: #db2777;
            transform: translateY(-2px);
        }

        /* Responsive */
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

            .hero-section {
                height: 450px;
                padding: 100px 20px;
            }

            .hero-content h1 {
                font-size: 40px;
            }

            .hero-content p {
                font-size: 18px;
            }

            .hero-content a {
                padding: 12px 30px;
            }

            .about-us h2 {
                font-size: 2.5rem;
            }

            .about-us .card-container {
                grid-template-columns: 1fr;
            }

            .about-us .card img {
                height: 150px;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .hero-content a {
                padding: 10px 25px;
                font-size: 16px;
            }

            .about-us h2 {
                font-size: 2rem;
            }

            .about-us .card h3 {
                font-size: 1.8rem;
            }

            .about-us .card p {
                font-size: 1rem;
            }

            .footer p {
                font-size: 16px;
            }

            .footer .social-links a {
                font-size: 28px;
                margin: 0 20px;
            }

            .footer .extra-links a {
                font-size: 14px;
                margin: 0 15px;
            }
        }
    </style>
</head>

<body>
<?php include 'header.php'; ?>

    <!-- About Us Section -->
    <section id="about-us" class="about-us">
        <h2>Hakkımızda</h2>
        <div class="content">
            <div class="card-container">
                <div class="card">
                    <h3>Biz Kimiz?</h3>
                    <p>
                        Biz, müşteri memnuniyetine tutkuyla bağlı bir e-ticaret platformuyuz. Moda, teknoloji ve ev ürünlerinde en iyisini sunarak alışverişi bir sanat haline getiriyoruz.
                    </p>
                </div>
                <div class="card">
                    <h3>Vizyonumuz</h3>
                    <p>
                        Türkiye'nin lider online alışveriş destinasyonu olmak ve yenilikçi çözümlerle sektöre yön vermek istiyoruz. Gelecek, bizimle şekilleniyor!
                    </p>
                </div>
                <div class="card">
                    <h3>Misyonumuz</h3>
                    <p>
                        Müşterilerimizin ihtiyaçlarını en iyi şekilde karşılamak, eşsiz bir alışveriş deneyimi sunmak ve her zaman sınırları zorlamak için buradayız.
                    </p>
                </div>
                <div class="card">
                    <h3>Değerlerimiz</h3>
                    <div class="values-list">
                        <p><strong>Şeffaflık:</strong> Her adımda açıklık bizim pusulamız.</p>
                        <p><strong>Dürüstlük:</strong> Güven, temel taşımızdır.</p>
                        <p><strong>Yenilikçilik:</strong> Geleceği bugünden inşa ediyoruz.</p>
                        <p><strong>Müşteri Odaklılık:</strong> Sizin mutluluğunuz, bizim başarımız.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p>© Abdullah Oluç - Tüm hakları saklıdır.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="extra-links">
                <a href="#">Gizlilik Politikası</a>
                <a href="#">Kullanım Şartları</a>
                <a href="#">İletişim</a>
            </div>
        </div>
    </footer>

    <script>
        // Menü Toggle
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>