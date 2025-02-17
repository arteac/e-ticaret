<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <style>
        /* Genel Tarzlar (Bilgisayar görünümü) */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
            margin: 0;
            padding: 0;
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h2 {
            font-size: 2.4em;
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: center;
            font-size: 1.1em;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff7e5f;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #ffe6e1;
            transform: translateY(-2px);
            transition: transform 0.3s ease-in-out;
        }

        td img {
            max-width: 50px;
            border-radius: 6px;
            transition: transform 0.3s ease;
        }

        td img:hover {
            transform: scale(1.1);
        }

        .total-price {
            margin-top: 30px;
            font-size: 1.5em;
            font-weight: 600;
            text-align: right;
            color: #333;
        }

        .btn-back, .btn-complete {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ff7e5f;
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-back:hover, .btn-complete:hover {
            background-color: #ff4e3a;
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .btn-logout {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 50px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        /* Modal Stil */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 30px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 12px;
            animation: slideIn 0.5s ease-out;
        }

        .modal .modal-content h3 {
            font-size: 1.6em;
            color: #28a745;
        }

        button {
            cursor: pointer;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }

            table {
                font-size: 1em;
                display: block;
                overflow-x: auto;
            }

            th, td {
                padding: 10px;
            }

            td img {
                max-width: 40px;
            }

            .btn-back, .btn-complete {
                width: 100%;
                font-size: 1em;
            }

            .total-price {
                font-size: 1.3em;
                text-align: center;
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            table {
                font-size: 0.9em;
            }

            th, td {
                padding: 8px;
            }

            td img {
                max-width: 35px;
            }

            .btn-back, .btn-complete {
                font-size: 1em;
                padding: 10px;
            }

            .total-price {
                font-size: 1.1em;
            }
        }

        .btn-back {
            margin-top: 40px;
            padding: 12px 30px;
            background-color: #4CAF50;
            border-radius: 50px;
            font-size: 1.2em;
            transition: all 0.3s ease;
            display: inline-block;
            color: white;
            text-align: center;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .btn-back:hover {
            background-color: #45a049;
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Sepetim</h2>

    <?php if (!empty($cartItems)): ?>
        <table>
            <thead>
                <tr>
                    <th>Ürün Resmis</th>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>Miktar</th>
                    <th>Toplam</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $item): ?>
                    <tr>
                        <td>
                            <img src="<?= base_url('images/' . esc($item['product_image'])); ?>" alt="<?= esc($item['product_name']); ?>">
                        </td>
                        <td><?= esc($item['product_name']); ?></td>
                        <td><?= esc($item['product_price']); ?>₺</td>
                        <td><?= esc($item['quantity']); ?></td>
                        <td><?= esc($item['product_price'] * $item['quantity']); ?>₺</td>
                        <td>
                            <form action="<?= base_url('cart/deleteProduct/' . $item['id']); ?>" method="post">
                                <?= csrf_field() ?>
                                <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">Sil</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total-price">
            <h3>Toplam Tutar: <?= esc($total); ?>₺</h3>
        </div>

        <a href="<?= base_url('alisveris_view.php') ?>" id="complete-shopping" class="btn-complete">Alışverişi Tamamla</a>

        <!-- Başarılı işlem mesajı (Modal) -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <h3>✔ Başarıyla tamamlandı!</h3>
                <p>5 saniye içinde Alışverişi Tamamlama Ekranına yönlendirileceksiniz.</p>
            </div>
        </div>

        <a href="<?= base_url('sepet'); ?>" class="btn-back">Ürünler Sayfasına Geri Dön</a>
    <?php else: ?>
        <p>Sepetiniz boş. Alışverişe Başlayabilirsiniz !</p>
        <a href="<?= base_url('sepet'); ?>" class="btn-back">Ürünler Sayfasına Geri Dön</a>
    <?php endif; ?>
</div>

<script>
document.getElementById('complete-shopping').addEventListener('click', function(event) {
    event.preventDefault();

    // Modal'ı göster
    var modal = document.getElementById('successModal');
    var countdownElement = modal.querySelector('p'); // Geri sayım metnini içeren paragraf
    modal.style.display = 'block';

    var countdown = 5; // Geri sayım başlat

    var interval = setInterval(function() {
        countdown--;
        countdownElement.textContent = countdown + "  saniye içinde Alışverişi Tamamlama Ekranına yönlendirileceksiniz.";
        if (countdown <= 0) {
            clearInterval(interval);
            window.location.href = "<?= base_url('alisveris'); ?>"; // 5 saniye sonra alisveris sayfasına yönlendir
        }
    }, 1000);
});
</script>
</body>
</html>
