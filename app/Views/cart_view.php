<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim 2025 - Ultra Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Genel Stil */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e9ecef, #dee2e6);
            color: #212529;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 20px;
            overflow-x: hidden;
        }

        /* Ana Konteyner */
        .container {
            width: 100%;
            max-width: 1200px;
            background: #ffffff;
            border-radius: 25px;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        /* Başlık ve Üst Menü */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            font-weight: 700;
            color: #343a40;
            letter-spacing: 1px;
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        .header-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 1em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-clear {
            background: #f8d7da;
            color: #721c24;
        }

        .btn-clear:hover {
            background: #f5c6cb;
            transform: translateY(-2px);
        }

        .btn-theme {
            background: #343a40;
            color: #ffffff;
        }

        .btn-theme:hover {
            background: #495057;
            transform: translateY(-2px);
        }

        /* Sepet Öğeleri */
        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
            margin-bottom: 30px;
        }

        .cart-items::-webkit-scrollbar {
            width: 8px;
        }

        .cart-items::-webkit-scrollbar-thumb {
            background: #adb5bd;
            border-radius: 4px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .cart-item:hover {
            background: #e9ecef;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
            transition: transform 0.3s ease;
        }

        .cart-item:hover img {
            transform: scale(1.05);
        }

        .item-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .item-name {
            font-size: 1.3em;
            font-weight: 500;
            color: #343a40;
        }

        .item-meta {
            display: flex;
            gap: 15px;
            font-size: 0.95em;
            color: #6c757d;
        }

        .item-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .item-meta i {
            color: #adb5bd;
        }

        .item-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ced4da;
            border-radius: 50%;
            background: #ffffff;
            font-size: 1em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: #e9ecef;
            border-color: #adb5bd;
        }

        .quantity {
            font-size: 1.1em;
            font-weight: 500;
            color: #343a40;
        }

        .item-price {
            font-size: 1.4em;
            font-weight: 600;
            color: #007bff;
            margin-right: 20px;
        }

        .delete-btn {
            background: none;
            border: none;
            color: #dc3545;
            font-size: 1.5em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .delete-btn:hover {
            color: #c82333;
            transform: scale(1.1);
        }

        /* Promosyon Kodu */
        .promo-section {
            margin: 30px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
        }

        .promo-section h3 {
            font-size: 1.2em;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 15px;
        }

        .promo-input {
            display: flex;
            gap: 10px;
        }

        .promo-input input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 10px;
            font-size: 1em;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .promo-input input:focus {
            border-color: #007bff;
        }

        .promo-btn {
            padding: 12px 20px;
            background: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 1em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .promo-btn:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        /* Özet ve Ödeme */
        .summary {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
        }

        .summary h3 {
            font-size: 1.4em;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 20px;
        }

        .summary-details {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            font-size: 1.1em;
            color: #6c757d;
        }

        .summary-row.total {
            font-size: 1.5em;
            font-weight: 600;
            color: #343a40;
            border-top: 1px solid #ced4da;
            padding-top: 15px;
        }

        .checkout-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 20px;
        }

        .btn-checkout {
            flex: 1;
            padding: 15px;
            background: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-checkout:hover {
            background: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-back {
            flex: 1;
            padding: 15px;
            background: #e9ecef;
            color: #343a40;
            border: none;
            border-radius: 12px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: #dee2e6;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.4s ease;
            max-width: 500px;
            width: 90%;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal h3 {
            font-size: 1.8em;
            color: #28a745;
            margin-bottom: 15px;
        }

        .modal p {
            font-size: 1.1em;
            color: #6c757d;
        }

        /* Boş Sepet */
        .empty-cart {
            text-align: center;
            padding: 40px;
            color: #6c757d;
            font-size: 1.3em;
        }

        .empty-cart i {
            font-size: 2em;
            color: #adb5bd;
            margin-bottom: 20px;
        }

        /* Responsive Tasarım */
        @media (max-width: 1024px) {
            .container {
                max-width: 900px;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .item-actions {
                width: 100%;
                justify-content: space-between;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 20px;
            }

            .header-actions {
                width: 100%;
                justify-content: space-between;
            }

            .cart-item img {
                width: 60px;
                height: 60px;
            }

            .item-price {
                margin-right: 0;
            }

            .checkout-actions {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }

            .header h1 {
                font-size: 1.8em;
            }

            .cart-item {
                padding: 15px;
            }

            .item-name {
                font-size: 1.1em;
            }

            .item-price {
                font-size: 1.2em;
            }

            .summary-row.total {
                font-size: 1.3em;
            }
        }

        /* Tema Değiştirici */
        body.dark-mode {
            background: linear-gradient(135deg, #212529, #343a40);
            color: #e9ecef;
        }

        body.dark-mode .container {
            background: #2c2c3e;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .header {
            border-bottom: 1px solid #495057;
        }

        body.dark-mode .header h1,
        body.dark-mode .item-name,
        body.dark-mode .item-price,
        body.dark-mode .summary h3,
        body.dark-mode .summary-row.total,
        body.dark-mode .promo-section h3 {
            color: #e9ecef;
        }

        body.dark-mode .cart-item,
        body.dark-mode .promo-section,
        body.dark-mode .summary {
            background: #343a40;
        }

        body.dark-mode .cart-item:hover {
            background: #495057;
        }

        body.dark-mode .item-meta,
        body.dark-mode .summary-row {
            color: #adb5bd;
        }

        body.dark-mode .btn-back {
            background: #495057;
            color: #e9ecef;
        }

        body.dark-mode .btn-back:hover {
            background: #6c757d;
        }

        body.dark-mode .modal-content {
            background: #2c2c3e;
        }

        body.dark-mode .modal p {
            color: #adb5bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Sepetim 2025</h1>
            <div class="header-actions">
                <button class="header-btn btn-theme" onclick="toggleTheme()">Tema Değiştir</button>
            </div>
        </div>

        <!-- Sepet Öğeleri -->
        <?php if (!empty($cartItems)): ?>
            <div class="cart-items">
                <?php foreach ($cartItems as $item): ?>
                    <div class="cart-item">
                        <img src="<?= base_url('images/' . esc($item['product_image'])); ?>" alt="<?= esc($item['product_name']); ?>">
                        <div class="item-details">
                            <div class="item-name"><?= esc($item['product_name']); ?></div>
                            <div class="item-meta">
                                <span><i class="fas fa-tag"></i> Fiyat: <span class="unit-price"><?= esc($item['product_price']); ?></span>₺</span>
                                <span><i class="fas fa-box"></i> Miktar: <span class="quantity"><?= esc($item['quantity']); ?></span></span>
                            </div>
                        </div>
                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="quantity-btn" onclick="updateQuantity(this, -1)">-</button>
                                <span class="quantity"><?= esc($item['quantity']); ?></span>
                                <button class="quantity-btn" onclick="updateQuantity(this, 1)">+</button>
                            </div>
                            <span class="item-price"><?= esc($item['product_price'] * $item['quantity']); ?>₺</span>
                            <form action="<?= base_url('cart/deleteProduct/' . $item['id']); ?>" method="post">
                                <?= csrf_field() ?>
                                <button type="submit" class="delete-btn"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Promosyon Kodu -->
            <div class="promo-section">
                <h3>Promosyon Kodu</h3>
                <div class="promo-input">
                    <input type="text" placeholder="Kodu girin (örn. INDIRIM25)" id="promo-code">
                    <button class="promo-btn" onclick="applyPromo()">Uygula</button>
                </div>
            </div>

            <!-- Özet -->
            <div class="summary">
                <h3>Ödeme Özeti</h3>
                <div class="summary-details">
                    <div class="summary-row">
                        <span>Ara Toplam</span>
                        <span id="subtotal"><?= esc($total); ?>₺</span>
                    </div>
                    <div class="summary-row">
                        <span>Kargo Ücreti</span>
                        <span>Ücretsiz</span>
                    </div>
                    <div class="summary-row">
                        <span>Promosyon İndirimi</span>
                        <span id="promo-discount">0₺</span>
                    </div>
                    <div class="summary-row total">
                        <span>Genel Toplam</span>
                        <span id="grand-total"><?= esc($total); ?>₺</span>
                    </div>
                </div>
            </div>

            <!-- Ödeme ve Geri Dön -->
            <div class="checkout-actions">
                <a href="<?= base_url('sepet'); ?>" class="btn-back">Alışverişe Devam Et</a>
                <button id="complete-shopping" class="btn-checkout">Ödemeyi Tamamla</button>
            </div>

            <!-- Modal -->
            <div id="successModal" class="modal">
                <div class="modal-content">
                    <h3>✔ Ödeme Başarıyla Tamamlandı!</h3>
                    <p id="modal-countdown">5 saniye içinde yönlendirileceksiniz.</p>
                </div>
            </div>
        <?php else: ?>
            <div class="empty-cart">
                <i class="fas fa-shopping-cart"></i>
                <p>Sepetiniz boş. Hemen alışverişe başlayın!</p>
                <a href="<?= base_url('sepet'); ?>" class="btn-back" style="display: inline-block; margin-top: 20px;">Ürünlere Git</a>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Tema Değiştirme
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }

        // Sepeti Temizle
        function clearCart() {
            if (confirm('Sepeti temizlemek istediğinizden emin misiniz?')) {
                window.location.href = "<?= base_url('cart/clear'); ?>";
            }
        }

        // Miktar Güncelleme ve Fiyat Hesaplama
        function updateQuantity(button, change) {
            const item = button.closest('.cart-item');
            const quantityElements = item.querySelectorAll('.quantity');
            const unitPriceElement = item.querySelector('.unit-price');
            const unitPrice = parseFloat(unitPriceElement.textContent);
            let quantity = parseInt(quantityElements[0].textContent);

            // Miktar en az 1 olacak şekilde güncelle
            quantity = Math.max(1, quantity + change);

            // Tüm quantity elementlerini güncelle
            quantityElements.forEach(el => el.textContent = quantity);

            // Ürün fiyatını güncelle
            const totalPrice = unitPrice * quantity;
            item.querySelector('.item-price').textContent = totalPrice.toFixed(2) + '₺';

            // Özeti güncelle
            updateSummary();
        }

        // Özet Güncelleme
        function updateSummary() {
            const items = document.querySelectorAll('.cart-item');
            let subtotal = 0;

            items.forEach(item => {
                const price = parseFloat(item.querySelector('.item-price').textContent);
                subtotal += price;
            });

            const discount = parseFloat(document.getElementById('promo-discount').textContent) || 0;
            const grandTotal = subtotal - discount;

            document.getElementById('subtotal').textContent = subtotal.toFixed(2) + '₺';
            document.getElementById('grand-total').textContent = grandTotal.toFixed(2) + '₺';
        }

        // Promosyon Kodu Uygulama
        function applyPromo() {
            const code = document.getElementById('promo-code').value;
            if (code === 'INDIRIM25') {
                const subtotal = parseFloat(document.getElementById('subtotal').textContent);
                const discount = subtotal * 0.25;
                document.getElementById('promo-discount').textContent = discount.toFixed(2) + '₺';
                document.getElementById('grand-total').textContent = (subtotal - discount).toFixed(2) + '₺';
                alert('Promosyon kodu uygulandı: %25 indirim!');
            } else {
                alert('Geçersiz promosyon kodu.');
            }
        }

        // Ödeme Tamamlama ve Modal
        document.getElementById('complete-shopping')?.addEventListener('click', (e) => {
            e.preventDefault();
            const modal = document.getElementById('successModal');
            const countdownElement = document.getElementById('modal-countdown');
            modal.style.display = 'flex';

            let countdown = 5;
            countdownElement.textContent = `${countdown} saniye içinde yönlendirileceksiniz.`;

            const interval = setInterval(() => {
                countdown--;
                countdownElement.textContent = `${countdown} saniye içinde yönlendirileceksiniz.`;
                if (countdown <= 0) {
                    clearInterval(interval);
                    window.location.href = "<?= base_url('alisveris'); ?>";
                }
            }, 1000);
        });
    </script>
</body>
</html>