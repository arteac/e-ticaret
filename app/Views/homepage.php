<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Modern E-Ticaret 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        /* Dinamik Promosyon Banner */
        .promo-banner {
            position: relative;
            width: 100%;
            height: 400px;
            margin-top: 80px;
            overflow: hidden;
            background: linear-gradient(120deg, #7c3aed, #db2777, #10b981);
            animation: gradientShift 10s ease infinite;
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
            animation: slide 15s infinite ease-in-out;
        }

        .promo-slide {
            width: 33.33%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 0 40px;
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
        }

        .promo-content h2 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .promo-content p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .promo-btn {
            display: inline-block;
            padding: 15px 40px;
            background: #fff;
            color: #7c3aed;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .promo-btn:hover {
            background: #f1f5f9;
            transform: scale(1.1);
            color: #db2777;
        }

        .promo-timer {
            font-size: 24px;
            font-weight: 700;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 30px;
            display: inline-block;
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
            background: rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        /* Hero Arama ve Filtreleme */
        .hero-section {
            background: linear-gradient(135deg, #7c3aed, #db2777);
            padding: 60px 40px;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent);
            animation: rotate 20s infinite linear;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        .search-bar {
            display: flex;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }

        .search-bar input {
            width: 100%;
            padding: 16px 24px;
            border: none;
            border-radius: 50px 0 0 50px;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            outline: none;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .search-bar button {
            padding: 16px 30px;
            background: #fff;
            color: #7c3aed;
            border: none;
            border-radius: 0 50px 50px 0;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-bar button:hover {
            background: #f1f5f9;
            transform: scale(1.05);
        }

        .filter-bar {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
            z-index: 10;
            position: relative;
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 15px;
            backdrop-filter: blur(5px);
        }

        .filter-bar select {
            padding: 12px 20px;
            border-radius: 12px;
            border: none;
            background: #fff;
            font-size: 14px;
            color: #1e293b;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .filter-bar select:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        /* Ürün Listesi */
        .product-container {
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .urun-baslik {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            color: #1e293b;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(90deg, #7c3aed, #db2777);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 280px;
            object-fit: contain;
            padding: 20px;
            transition: transform 0.4s ease;
        }

        .product-card:hover img {
            transform: scale(1.08);
        }

        .product-info {
            padding: 20px;
            text-align: center;
        }

        .product-info h2 {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .product-info .product-price {
            font-size: 18px;
            font-weight: 700;
            color: #db2777;
            margin-bottom: 15px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .urun-detay-btn, .sepete-ekle-btn {
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .urun-detay-btn {
            background: #7c3aed;
            color: #fff;
        }

        .urun-detay-btn:hover {
            background: #6d28d9;
            transform: scale(1.05);
        }

        .sepete-ekle-btn {
            background: #10b981;
            color: #fff;
        }

        .sepete-ekle-btn:hover {
            background: #059669;
            transform: scale(1.05);
        }

        /* Modal */
        .urun-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .urun-modal-icerik {
            background: #fff;
            border-radius: 25px;
            padding: 40px;
            width: 90%;
            max-width: 900px;
            display: flex;
            gap: 40px;
            animation: zoomIn 0.3s ease;
            position: relative;
        }

        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-sol img {
            width: 350px;
            height: auto;
            object-fit: contain;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .modal-sag {
            flex: 1;
        }

        .modal-sag h3 {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .modal-sag p {
            font-size: 16px;
            color: #475569;
            margin-bottom: 20px;
        }

        .modal-sag .sepete-ekle-btn {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border-radius: 12px;
        }

        .kapat-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 32px;
            color: #94a3b8;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .kapat-btn:hover {
            color: #1e293b;
        }

        /* Footer */
        .footer {
            background: #1e293b;
            color: #e2e8f0;
            padding: 60px 20px;
            text-align: center;
            margin-top: 80px;
        }

        .footer .social-links {
            margin: 20px 0;
        }

        .footer .social-links a {
            color: #e2e8f0;
            font-size: 28px;
            margin: 0 20px;
            transition: all 0.3s ease;
        }

        .footer .social-links a:hover {
            color: #7c3aed;
            transform: scale(1.2);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .product-list {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }

            .urun-modal-icerik {
                flex-direction: column;
                padding: 30px;
            }

            .modal-sol img {
                width: 100%;
            }

            .promo-slide {
                padding: 0 20px;
            }

            .promo-content h2 {
                font-size: 36px;
            }

            .promo-content p {
                font-size: 18px;
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

            .hero-section {
                padding: 40px 20px;
            }

            .search-bar {
                flex-direction: column;
                gap: 15px;
            }

            .search-bar input, .search-bar button {
                width: 100%;
                border-radius: 50px;
            }

            .urun-baslik {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 480px) {
            .product-list {
                grid-template-columns: 1fr;
            }

            .product-card img {
                height: 220px;
            }

            .urun-baslik {
                font-size: 1.8rem;
            }

            .btn-group {
                flex-direction: column;
                gap: 10px;
            }

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
    <?php include ('header.php')?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Ürün ara..." oninput="filterProducts()">
            <button onclick="filterProducts()"><i class="fas fa-search"></i> Ara</button>
        </div>
        <div class="filter-bar">
            <select id="categoryFilter" onchange="filterProducts()">
                <option value="">Tüm Kategoriler</option>
                <option value="forma">Formalar</option>
                <option value="krampon">Kramponlar</option>
            </select>
            <select id="priceFilter" onchange="filterProducts()">
                <option value="">Fiyat Aralığı</option>
                <option value="0-2000">0 - 2.000 ₺</option>
                <option value="2000-5000">2.000 - 5.000 ₺</option>
                <option value="5000+">5.000 ₺ ve üzeri</option>
            </select>
            <select id="sortFilter" onchange="sortProducts()">
                <option value="">Sıralama</option>
                <option value="price-asc">Fiyat: Düşükten Yükseğe</option>
                <option value="price-desc">Fiyat: Yüksekten Düşüğe</option>
                <option value="name-asc">İsim: A-Z</option>
                <option value="name-desc">İsim: Z-A</option>
            </select>
        </div>
    </section>

    <!-- Ürünler -->
    <div class="product-container">
        <h1 class="urun-baslik">Ürünlerimiz</h1>
        <?php if (!empty($products)): ?>
        <section class="product-list" id="productList">
            <?php foreach ($products as $product): ?>
            <div class="product-card" 
                 data-category="<?php 
                     // Daha esnek kategori ataması
                     $name = strtolower($product['product_name']);
                     if (strpos($name, 'forma') !== false || strpos($name, 'jersey') !== false || strpos($name, 'kit') !== false) {
                         echo 'forma';
                     } elseif (strpos($name, 'krampon') !== false || strpos($name, 'boot') !== false || strpos($name, 'ayakkabı') !== false) {
                         echo 'krampon';
                     } else {
                         // Kategori belirlenemiyorsa, varsayılan olarak bir şey atamıyoruz; bu durumda manuel kontrol gerekebilir
                         echo 'other'; 
                     }
                 ?>" 
                 data-price="<?php echo str_replace(' ₺', '', $product['product_price']); ?>" 
                 data-name="<?php echo $product['product_name']; ?>">
                <img src="<?php echo base_url('uploads/' . $product['product_image']); ?>" alt="<?php echo $product['product_name']; ?>" loading="lazy">
                <div class="product-info">
                    <h2><?php echo $product['product_name']; ?></h2>
                    <p class="product-price"><?php echo $product['product_price']; ?> ₺</p>
                    <div class="btn-group">
                        <button class="urun-detay-btn" onclick="urunDetaylariniGoster('<?php echo $product['_id']; ?>', '<?php echo addslashes($product['product_name']); ?>', '<?php echo base_url('uploads/' . $product['product_image']); ?>', '<?php echo addslashes($product['product_price']); ?>', '<?php echo addslashes($product['product_description'] ?? 'Açıklama yok'); ?>')">Detay</button>
                        <button class="sepete-ekle-btn" onclick="sepeteEkle('<?php echo base_url('hesap'); ?>', '<?php echo $product['_id']; ?>')">Sepete Ekle</button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="urun-modal" id="urunModal-<?php echo $product['_id']; ?>">
                <div class="urun-modal-icerik">
                    <span class="kapat-btn" onclick="kapatModal('<?php echo $product['_id']; ?>')">×</span>
                    <div class="modal-sol">
                        <img id="modalResim-<?php echo $product['_id']; ?>" src="" alt="Ürün Resmi">
                    </div>
                    <div class="modal-sag">
                        <h3 id="modalBaslik-<?php echo $product['_id']; ?>"></h3>
                        <p id="modalFiyat-<?php echo $product['_id']; ?>"></p>
                        <p><strong>Açıklama:</strong></p>
                        <p id="modalAciklama-<?php echo $product['_id']; ?>"></p>
                        <button class="sepete-ekle-btn" onclick="sepeteEkle('<?php echo base_url('hesap'); ?>', '<?php echo $product['_id']; ?>')">Sepete Ekle</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </section>
        <?php else: ?>
        <p style="text-align: center; font-size: 18px; color: #64748b; margin: 40px 0;">Henüz ürün eklenmemiş.</p>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© Abdullah Oluç Tüm hakları saklıdır.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>

    <script>
        // Modal Fonksiyonları
        function urunDetaylariniGoster(id, urunAdi, urunResim, urunFiyat, urunAciklama) {
            const modalId = 'urunModal-' + id;
            document.getElementById('modalResim-' + id).src = urunResim;
            document.getElementById('modalBaslik-' + id).textContent = urunAdi;
            document.getElementById('modalFiyat-' + id).textContent = urunFiyat + ' ₺';
            document.getElementById('modalAciklama-' + id).textContent = urunAciklama;
            document.getElementById(modalId).style.display = 'flex';
        }

        function kapatModal(productId) {
            document.getElementById('urunModal-' + productId).style.display = 'none';
        }

        function sepeteEkle(baseUrl, productId) {
            window.location.href = baseUrl + '?product_id=' + productId;
        }

        // Filtreleme
        function filterProducts() {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const priceFilter = document.getElementById('priceFilter').value;
            const products = document.querySelectorAll('.product-card');

            products.forEach(product => {
                const name = product.dataset.name.toLowerCase();
                const category = product.dataset.category;
                const price = parseFloat(product.dataset.price.replace('.', '').replace(',', '.'));

                let show = true;

                // Arama filtresi
                if (searchQuery && !name.includes(searchQuery)) {
                    show = false;
                }

                // Kategori filtresi
                if (categoryFilter && category !== categoryFilter) {
                    show = false;
                }

                // Fiyat filtresi
                if (priceFilter) {
                    const [min, max] = priceFilter.split('-').map(val => val === '+' ? Infinity : parseFloat(val));
                    if (price < min || (max && price > max)) {
                        show = false;
                    }
                }

                product.style.display = show ? 'block' : 'none';
            });
        }

        // Sıralama
        function sortProducts() {
            const sortFilter = document.getElementById('sortFilter').value;
            const productList = document.getElementById('productList');
            const products = Array.from(productList.children);

            products.sort((a, b) => {
                if (sortFilter === 'price-asc') {
                    return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                } else if (sortFilter === 'price-desc') {
                    return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                } else if (sortFilter === 'name-asc') {
                    return a.dataset.name.localeCompare(b.dataset.name);
                } else if (sortFilter === 'name-desc') {
                    return b.dataset.name.localeCompare(a.dataset.name);
                }
                return 0;
            });

            products.forEach(product => productList.appendChild(product));
        }

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