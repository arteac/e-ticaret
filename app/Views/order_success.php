<!-- app/Views/order_success.php -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Başarılı</title>
    <style>
        /* Genel sayfa stili */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Konteyner düzeni */
        .container {
            text-align: center;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px 50px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            font-size: 36px;
            color: #28a745;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        a {
            font-size: 18px;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 30px;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        .icon {
            font-size: 80px;
            color: #28a745;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <!-- Başarı ikonu -->
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M16 8a8 8 0 1 0-8 8 8 8 0 0 0 8-8zm-8 6a6 6 0 1 1 6-6 6 6 0 0 1-6 6zm-.707-4.707a1 1 0 0 0-1.414 0L7 9.586 6.121 8.707a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L8.293 9.293z"/>
            </svg>
        </div>
        <h1>Siparişiniz Başarılı!</h1>
        <p>Siparişiniz başarıyla tamamlandı. Kısa süre içinde onay e-postası alacaksınız.</p>
        <a href="<?= site_url('/cart') ?>">Sepetinize Geri Dönün</a>
    </div>
</body>
</html>
