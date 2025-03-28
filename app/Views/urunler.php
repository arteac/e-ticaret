<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticaret Sitesi - Ultra Modern</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
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
            height: 700px;
            background: url('https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            padding: 120px 40px;
            text-align: center;
            color: #fff;
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
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: 64px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeInDown 1s ease-in-out;
        }

        .hero-content p {
            font-size: 26px;
            font-weight: 400;
            margin: 20px 0 40px;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .hero-content a {
            display: inline-block;
            padding: 16px 40px;
            background: #fff;
            color: #7c3aed;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 50px;
            transition: transform 0.3s ease;
            animation: fadeInUp 1.4s ease-in-out;
        }

        .hero-content a:hover {
            transform: scale(1.05);
        }

        /* Featured Products */
        .featured-products {
            padding: 100px 20px;
            background: linear-gradient(135deg, #f5f7fa, #fff);
        }

        .featured-products h2 {
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 60px;
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(90deg, #7c3aed, #db2777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: bounceIn 1s ease-in-out;
        }

        .product-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 280px;
            object-fit: contain;
            padding: 20px;
        }

        .product-info {
            padding: 20px;
            text-align: center;
        }

        .product-info h3 {
            font-size: 22px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 10px;
            text-transform: uppercase;
            animation: fadeIn 0.5s ease-in-out;
        }

        .product-info .rating {
            margin-bottom: 10px;
            color: #f59e0b;
            animation: fadeIn 0.7s ease-in-out;
        }

        .product-info p {
            font-size: 20px;
            font-weight: 700;
            color: #db2777;
            margin-bottom: 15px;
            animation: fadeIn 0.9s ease-in-out;
        }

        .product-info a {
            display: inline-block;
            padding: 12px 25px;
            background: #7c3aed;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .product-info a:hover {
            transform: scale(1.05);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: #fff;
            border-radius: 20px;
            padding: 20px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-content img {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            margin-bottom: 20px;
            animation: zoomIn 0.5s ease-in-out;
        }

        .modal-content h3 {
            font-size: 26px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
            text-transform: uppercase;
            animation: fadeIn 0.5s ease-in-out;
        }

        .modal-content p {
            font-size: 22px;
            font-weight: 700;
            color: #db2777;
            margin-bottom: 20px;
            animation: fadeIn 0.7s ease-in-out;
        }

        .modal-content .close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            color: #1e293b;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .modal-content .close:hover {
            color: #db2777;
        }

        .modal-content a {
            display: inline-block;
            padding: 12px 25px;
            background: #10b981;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .modal-content a:hover {
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #1e293b, #2d3748);
            color: #e2e8f0;
            padding: 100px 20px;
            text-align: center;
        }

        .footer p {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-in-out;
        }

        .footer .social-links a {
            color: #e2e8f0;
            font-size: 36px;
            margin: 0 30px;
            transition: transform 0.3s ease;
        }

        .footer .social-links a:hover {
            transform: scale(1.2);
        }

        .footer .extra-links a {
            color: #94a3b8;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .footer .extra-links a:hover {
            color: #db2777;
        }

        /* Animasyonlar */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.05); }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <?php include ('header.php') ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>EN KALİTELİ ÜRÜNLERİN ADRESİ</h1>
            <p>Değerli, şeffaf ve kaliteli ürünler tüm detaylarıyla burada!</p>
            <a href="/hesap">Üyelik için; →</a>
        </div>
    </section>

    <!-- En İyi Formalar -->
    <section class="featured-products">
        <h2>En İyi Formalar</h2>
        <div class="product-container">
            <div class="product-list">
                <div class="product-card">
                    <img src="images/gs_away_2024.png" alt="Galatasaray Deplasman Forması">
                    <div class="product-info">
                        <h3>Galatasaray Deplasman Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>7.000 TL</p>
                        <a onclick="showModal('Galatasaray Deplasman Forması', '7.000 TL', 'images/gs_away_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/gs_home_2024.png" alt="Galatasaray İç Saha Forması">
                    <div class="product-info">
                        <h3>Galatasaray İç Saha Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>7.000 TL</p>
                        <a onclick="showModal('Galatasaray İç Saha Forması', '7.000 TL', 'images/gs_home_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/gs_third_2024.png" alt="Galatasaray Üçüncü Forması">
                    <div class="product-info">
                        <h3>Galatasaray Üçüncü Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>7.000 TL</p>
                        <a onclick="showModal('Galatasaray Üçüncü Forması', '7.000 TL', 'images/gs_third_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Yeni Ürünler -->
    <section class="featured-products">
        <h2>Kaliteli Formalar ve Kramponlar</h2>
        <div class="product-container">
            <div class="product-list">
                <div class="product-card">
                    <img src="images/gs_away_2024.png" alt="Galatasaray Deplasman Forması">
                    <div class="product-info">
                        <h3>Galatasaray Deplasman Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>5.000 TL</p>
                        <a onclick="showModal('Galatasaray Deplasman Forması', '5.000 TL', 'images/gs_away_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/gs_home_2024.png" alt="Galatasaray İç Saha Forması">
                    <div class="product-info">
                        <h3>Galatasaray İç Saha Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>5.000 TL</p>
                        <a onclick="showModal('Galatasaray İç Saha Forması', '5.000 TL', 'images/gs_home_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/gs_third_2024.png" alt="Galatasaray Üçüncü Forma">
                    <div class="product-info">
                        <h3>Galatasaray Üçüncü Forma</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>5.000 TL</p>
                        <a onclick="showModal('Galatasaray Üçüncü Forma', '5.000 TL', 'images/gs_third_2024.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/gs_100.jpeg" alt="Galatasaray 100. Yıl Forması">
                    <div class="product-info">
                        <h3>Galatasaray 100. Yıl Forması</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>6.000 TL</p>
                        <a onclick="showModal('Galatasaray 100. Yıl Forması', '6.000 TL', 'images/gs_100.jpeg')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/adidas_predator.png" alt="Adidas Predator Krampon">
                    <div class="product-info">
                        <h3>Adidas Predator Krampon</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>1.200 TL</p>
                        <a onclick="showModal('Adidas Predator Krampon', '1.200 TL', 'images/adidas_predator.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/nike_mercurial_9.png" alt="Nike Mercurial Krampon">
                    <div class="product-info">
                        <h3>Nike Mercurial Krampon</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>1.500 TL</p>
                        <a onclick="showModal('Nike Mercurial Krampon', '1.500 TL', 'images/nike_mercurial_9.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/nike_tiempo.png" alt="Nike Tiempo Krampon">
                    <div class="product-info">
                        <h3>Nike Tiempo Krampon</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>1.350 TL</p>
                        <a onclick="showModal('Nike Tiempo Krampon', '1.350 TL', 'images/nike_tiempo.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="images/puma_ultra.png" alt="Puma Ultra Krampon">
                    <div class="product-info">
                        <h3>Puma Ultra Krampon</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>1.450 TL</p>
                        <a onclick="showModal('Puma Ultra Krampon', '1.450 TL', 'images/puma_ultra.png')"><i class="fas fa-info-circle"></i> Ürün Detayları</a>
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

    <!-- Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <img id="modalImage" src="" alt="Ürün Görseli">
            <h3 id="modalTitle"></h3>
            <p id="modalPrice"></p>
            <a href="<?php echo base_url('hesap'); ?>"><i class="fas fa-shopping-cart"></i> Sepete Ekle</a>
        </div>
    </div>

    <script>
        // Modal açma fonksiyonu
        function showModal(title, price, image) {
            console.log("Modal açılıyor: ", title, price, image);
            const modal = document.getElementById('productModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalPrice = document.getElementById('modalPrice');

            if (modal && modalImage && modalTitle && modalPrice) {
                modalImage.src = image;
                modalTitle.textContent = title;
                modalPrice.textContent = price;
                modal.classList.add('active');
            } else {
                console.error("Modal elemanları bulunamadı!");
            }
        }

        // Modal kapatma fonksiyonu
        function closeModal() {
            console.log("Modal kapanıyor");
            const modal = document.getElementById('productModal');
            if (modal) {
                modal.classList.remove('active');
            } else {
                console.error("Modal bulunamadı!");
            }
        }

        // Modal dışına tıklayınca kapatma
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('productModal');
            if (event.target === modal) {
                console.log("Modal dışına tıklandı");
                modal.classList.remove('active');
            }
        });
    </script>
</body>
</html>