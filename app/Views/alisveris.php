<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışverişi Tamamla - 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e1e2f 0%, #2a2a40 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 20%, rgba(72, 52, 212, 0.2), transparent 70%);
            z-index: -1;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        header {
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        header h1 {
            font-size: 2.5em;
            font-weight: 800;
            background: linear-gradient(90deg, #00ddeb, #ff6f91);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 1px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .order-summary {
            text-align: center;
        }

        .order-summary h2 {
            font-size: 1.6em;
            font-weight: 600;
            color: #00ddeb;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .order-list {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 15px;
            max-height: 220px;
            overflow-y: auto;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .order-list::-webkit-scrollbar {
            width: 6px;
        }

        .order-list::-webkit-scrollbar-thumb {
            background: #ff6f91;
            border-radius: 3px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 1.1em;
            transition: background 0.3s ease;
        }

        .order-item:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .order-item span {
            flex: 1;
            text-align: left;
        }

        .total {
            margin-top: 20px;
            font-size: 2em;
            font-weight: 800;
            background: linear-gradient(90deg, #00ddeb, #ff6f91);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glowText 2s infinite alternate;
        }

        @keyframes glowText {
            0% { text-shadow: 0 0 5px rgba(0, 221, 235, 0.5); }
            100% { text-shadow: 0 0 15px rgba(255, 111, 145, 0.8); }
        }

        .shipping-info {
            text-align: center;
        }

        .shipping-info h2 {
            font-size: 1.6em;
            font-weight: 600;
            color: #00ddeb;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .shipping-info form {
            display: flex;
            flex-direction: column;
            gap: 18px;
            width: 80%;
            margin: 0 auto;
        }

        .shipping-info input {
            padding: 14px;
            font-size: 1em;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: #fff;
            outline: none;
            transition: all 0.3s ease;
        }

        .shipping-info input::placeholder {
            color: #aaa;
        }

        .shipping-info input:focus {
            border-color: #ff6f91;
            box-shadow: 0 0 10px rgba(255, 111, 145, 0.5);
        }

        .shipping-info button {
            padding: 15px;
            background: linear-gradient(90deg, #00ddeb, #ff6f91);
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .shipping-info button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 111, 145, 0.6);
        }

        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #ff6f91;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 600;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .back-button:hover {
            color: #00ddeb;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 25px;
            }

            header h1 {
                font-size: 2em;
            }

            .total {
                font-size: 1.8em;
            }

            .shipping-info form {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.6em;
            }

            .order-summary h2, .shipping-info h2 {
                font-size: 1.3em;
            }

            .order-item {
                font-size: 0.95em;
            }

            .total {
                font-size: 1.5em;
            }

            .shipping-info input, .shipping-info button {
                font-size: 0.95em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Alışverişi Tamamla</h1>
        </header>

        <div class="order-summary">
            <h2>Sipariş Özeti</h2>
            <div class="order-list">
                <?php foreach ($cartItems as $item): ?>
                    <div class="order-item">
                        <span><?= esc($item['product_name']) ?></span>
                        <span>₺<?= number_format($item['product_price'], 2) ?></span>
                        <span>x<?= esc($item['quantity']) ?></span>
                        <span>₺<?= number_format($item['product_price'] * $item['quantity'], 2) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="total">
                Toplam: ₺<?= number_format($totalPrice, 2) ?>
            </div>
        </div>

        <div class="shipping-info">
            <h2>Gönderim Bilgileri</h2>
            <form action="<?= site_url('submit-order'); ?>" method="POST" id="shipping-form">
                <input type="text" name="name" placeholder="Ad Soyad" required>
                <input type="text" name="address" placeholder="Adres" required>
                <input type="tel" name="phone" placeholder="Telefon (örn: 5551234567)" pattern="[0-9]{10}" title="Telefon numarası 10 haneli olmalıdır" required>
                <button type="submit">Siparişi Tamamla</button>
            </form>
        </div>

        <a href="<?= site_url('cart'); ?>" class="back-button">Sepete Geri Dön</a>
    </div>

    <script>
        document.getElementById('shipping-form')?.addEventListener('submit', function(e) {
            const phone = document.querySelector('input[name="phone"]').value;
            if (phone.length !== 10 || isNaN(phone)) {
                e.preventDefault();
                alert('Lütfen geçerli bir 10 haneli telefon numarası girin.');
            }
        });
    </script>
</body>
</html>