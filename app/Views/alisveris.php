<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alışverişi Tamamla</title>
    <style>
        /* Stil kodları buraya gelecek... */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .order-summary, .shipping-info {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        h2 {
            font-size: 1.8rem;
            color: #34495e;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        .total {
            margin-top: 20px;
            font-size: 1.4rem;
            font-weight: bold;
        }

        .shipping-info input,
        .shipping-info button {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .shipping-info button {
            background-color: #2ecc71;
            color: white;
            border: none;
            cursor: pointer;
        }

        .shipping-info button:hover {
            background-color: #27ae60;
        }

        .back-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            .order-summary, .shipping-info {
                padding: 15px;
            }

            table th, table td {
                font-size: 0.9rem;
            }

            .total {
                font-size: 1.2rem;
            }

            .shipping-info input, .shipping-info button {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Alışverişi Tamamla</h1>
        </header>

        <section class="order-summary">
            <h2>Sipariş Özeti</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Fiyat</th>
                        <th>Adet</th>
                        <th>Toplam</th>
                    </tr>
                </thead>
                <tbody id="order-details">
                    <?php 
                    // $cartItems array'ini buraya yerleştirin
                    foreach ($cartItems as $item): ?>
                        <tr>
                            <td><?= $item['product_name'] ?></td>
                            <td>₺<?= number_format($item['product_price'], 2) ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td>₺<?= number_format($item['product_price'] * $item['quantity'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                Toplam: <span id="total-price">₺<?= number_format($totalPrice, 2) ?></span>
            </div>
        </section>

        <section class="shipping-info">
    <h2>Gönderim Bilgileri</h2>
    <!-- Formu PHP'ye POST etmek için method="POST" kullanıyoruz -->
    <form action="<?= site_url('submit-order'); ?>" method="POST" id="shipping-form">
        <label for="name">Ad Soyad:</label>
        <input type="text" id="name" name="name" placeholder="Adınızı ve Soyadınızı Girin" required>

        <label for="address">Adres:</label>
        <input type="text" id="address" name="address" placeholder="Adresinizi Girin" required>

        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Telefon Numaranızı Girin" pattern="[0-9]{10}" title="Telefon numarası 10 haneli olmalıdır" required>

        <button type="submit">Siparişi Tamamla</button>
    </form>

    <a href="<?= site_url('cart'); ?>" class="back-button">Sepetinize Geri Dönün.</a>
</section>

    </div>

</body>
</html>
