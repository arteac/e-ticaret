<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar ve Promosyon Banner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

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
            gap: 35px;
        }

        .nav-links a {
            color: #1e293b;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            position: relative;
            transition: all 0.3s ease;
            padding: 8px 16px;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: #7c3aed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 70%;
        }

        .nav-links a:hover {
            color: #7c3aed;
            transform: translateY(-2px);
        }

        .menu-icon {
            display: none;
            color: #1e293b;
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
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <a href="<?= base_url('/') ?>" style="text-decoration: none;">
                <h1>E-TİCARET SİTESİ</h1>
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
    <section class="promo-banner">
        <div class="promo-slider">
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>Bahar İndirimi Başladı!</h2>
                    <p>%50’ye varan indirimlerle alışverişe başla.</p>
                    <a href="#" class="promo-btn">Şimdi Alışveriş Yap</a>
                    <div class="promo-timer" id="timer1">00:00:00</div>
                </div>
            </div>
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>Yeni Koleksiyon Geldi!</h2>
                    <p>En trend ürünler stoklarla sınırlı.</p>
                    <a href="#" class="promo-btn">Keşfet</a>
                    <div class="promo-timer" id="timer2">00:00:00</div>
                </div>
            </div>
            <div class="promo-slide">
                <div class="promo-content">
                    <h2>Ücretsiz Kargo Fırsatı!</h2>
                    <p>500 TL ve üzeri alışverişlerde geçerli.</p>
                    <a href="#" class="promo-btn">Hemen Başla</a>
                    <div class="promo-timer" id="timer3">00:00:00</div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Menü Toggle
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        // Promosyon Zamanlayıcı
        function startTimer(duration, display) {
            let timer = duration, hours, minutes, seconds;
            setInterval(() => {
                hours = parseInt(timer / 3600, 10);
                minutes = parseInt((timer % 3600) / 60, 10);
                seconds = parseInt(timer % 60, 10);

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            const oneDay = 24 * 60 * 60; // 1 gün saniye cinsinden
            startTimer(oneDay, document.getElementById('timer1'));
            startTimer(oneDay, document.getElementById('timer2'));
            startTimer(oneDay, document.getElementById('timer3'));
        };
    </script>
</body>
</html>