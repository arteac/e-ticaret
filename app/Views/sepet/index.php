<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ticaret Sitesi Tasarımı</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Genel Ayarlar */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Çıkış Yap Butonu */
            .logout-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            background-color: #e74c3c;
            color: white;
            font-size: 14px;
            padding: 8px 12px;  /* Küçük buton boyutu */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        /* Ürün Kartı Tasarımı */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .product-card img:hover {
            transform: scale(1.05);
        }

        .product-card h3 {
            margin-top: 15px;
            font-size: 18px;
            color: #333;
        }

        .product-card .price {
            margin-top: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #FF6347;
        }

        .product-card button {
            margin-top: 15px;
            padding: 12px 20px;
            background-color: #28a745;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .product-card button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .product-list .product-card {
            width: 22%;
            margin: 10px;
            box-sizing: border-box;
        }

        /* Ürün Miktarı Düzenlemesi */
        .quantity-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity-container button {
            background-color: #FF6347;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }

        .quantity-container input {
            text-align: center;
            width: 60px;
            margin: 0 10px;
            font-size: 18px;
            height: 40px;
            line-height: 40px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        /* Menü Düzenlemesi */
        .menu-icon {
            cursor: pointer;
            font-size: 30px;
        }

        /* Menü Düzenlemesi - Mobil */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .header-section header nav ul {
                display: none;
                flex-direction: column;
                padding: 0;
                margin: 0;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease-in-out;
            }

            .header-section header nav ul.open {
                display: flex;
                max-height: 500px;
            }

            .product-list {
                flex-direction: column;
                align-items: center;
            }

            .product-list .product-card {
                width: 80%;
            }
        }

        /* Medya sorgusu ile responsive tasarım */
        @media (max-width: 1200px) {
            .product-list .product-card {
                width: 30%;
            }
        }

        @media (max-width: 992px) {
            .product-list .product-card {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            .header-section header .logo h1 {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .product-list .product-card {
                width: 100%;
            }

            .header-section header .logo h1 {
                font-size: 20px;
            }

            .product-card img {
                max-height: 200px;
                object-fit: cover;
            }
            .logout-btn {
                position: absolute;
                top: 80px; /* Navbar'ın altından 60px aşağıda olacak */
                right: 75%;
                background-color: #e74c3c;
                color: white;
                font-size: 14px;
                padding: 8px 12px; /* Küçük buton boyutu */
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
                text-align: center;
            }

            .logout-btn:hover {
                background-color: #c0392b;
            }
        }

        
    </style>
</head>

<body>
    <section class="header-section">
        <div class="container">
            <header class="navbar">
                <div class="logo">
                    <a href="<?= base_url('hesap') ?>" style="text-decoration: none; color: lightcoral;">
                        <h1>E-TİCARET SİTESİ</h1>
                    </a>
                </div>

                <nav>
                    <ul id="menuItems">
                        <li><a href="<?= base_url('/') ?>">Ana Sayfa</a></li>
                        <li><a href="<?php echo base_url('urunler'); ?>">Ürünler</a></li>
                        <li><a href="<?php echo base_url('hakkimizda'); ?>">Hakkımızda</a></li>
                        <li><a href="<?php echo base_url('iletisim'); ?>">İletişim</a></li>
                        <li><a href="<?php echo base_url('hesap'); ?>">Hesap</a></li>
                    </ul>
                    <a href="<?php echo base_url('cart'); ?>"><img src="images/cart.png" alt="Sepet ikonu" width="25px"></a>
                    <img src="images/menu.png" alt="Menu ikonu" width="26px" class="menu-icon" onclick="toggleMenu()">
                </nav>
            </header>
        </div>
    </section>

    <!-- Çıkış Yap Butonu -->
    <a href="<?= base_url('hesap'); ?>" class="logout-btn">Çıkış Yap</a>

    <section class="product-listing">
        <div class="container">
            <div class="row">
                <h2>İlginizi Çekebilecek Benzer Ürünler !</h2>
                <div class="product-list">
                    <?php if (!empty($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="product-card">
                                <img src="<?= base_url('images/' . $product['product_image']); ?>" alt="<?= esc($product['product_name']); ?>">
                                <h3><?= esc($product['product_name']); ?></h3>
                                <p class="price" id="price-<?= $product['id']; ?>"><?= esc($product['product_price']); ?>₺</p>

                                <!-- Ürün miktarını arttırma -->
                                <div class="quantity-container">
                                    <button type="button" class="decrease" onclick="changeQuantity(<?= $product['id']; ?>, -1)">-</button>
                                    <input type="text" id="quantity-<?= $product['id']; ?>" value="1" readonly>
                                    <button type="button" class="increase" onclick="changeQuantity(<?= $product['id']; ?>, 1)">+</button>
                                </div>

                                <form method="POST" action="<?= base_url('cart/addProduct'); ?>">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?= esc($product['id']); ?>">
                                    <input type="hidden" name="product_name" value="<?= esc($product['product_name']); ?>">
                                    <input type="hidden" name="product_price" value="<?= esc($product['product_price']); ?>" id="hidden-price-<?= $product['id']; ?>">
                                    <input type="hidden" name="quantity" value="1" id="hidden-quantity-<?= $product['id']; ?>">
                                    <button type="submit">Sepete Ekle</button>
                                </form>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Şu an ürün bulunmamaktadır.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo view('footer'); ?>

    <script>
        // Ürün miktarını değiştirme ve fiyatı güncelleme
        function changeQuantity(productId, delta) {
            var quantityInput = document.getElementById('quantity-' + productId);
            var priceElement = document.getElementById('price-' + productId);
            var hiddenPrice = document.getElementById('hidden-price-' + productId);
            var hiddenQuantity = document.getElementById('hidden-quantity-' + productId);

            var quantity = parseInt(quantityInput.value) + delta;
            if (quantity < 1) quantity = 1;  // Miktar 1'den küçük olmasın

            var price = parseFloat(hiddenPrice.value) / parseInt(hiddenQuantity.value); // Fiyatı doğru alalım
            var updatedPrice = price * quantity;

            quantityInput.value = quantity;
            priceElement.innerText = updatedPrice.toFixed(2) + '₺'; // Fiyatı güncelle

            hiddenPrice.value = updatedPrice.toFixed(2);  // Gizli fiyat inputunu güncelle
            hiddenQuantity.value = quantity;  // Gizli miktar inputunu güncelle
        }

        // Menü Toggle İşlevi
        function toggleMenu(){
            var menuItems = document.getElementById('menuItems');
            menuItems.classList.toggle('open');
        }
    </script>

</body>

</html>
