<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Seçenekleri</title>
    <style>
        /* Genel stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 20px;
            max-width: 1200px;
        }

        .card {
            width: 300px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-sizing: border-box;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
        }

        .card h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .card p {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .mysql-card {
            background-color: #ffffff;
            border: 2px solid #3498db;
        }

        .mongodb-card {
            background-color: #ffffff;
            border: 2px solid #2ecc71;
        }

        .card:hover .mysql-card {
            border-color: #2980b9;
        }

        .card:hover .mongodb-card {
            border-color: #27ae60;
        }

        .card button {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card:hover button {
            background-color: #2980b9;
        }

        /* Responsive Tasarım */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                gap: 20px;
            }

            .card {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- MySQL Admin Paneli Kartı -->
        <div class="card mysql-card" onclick="window.location.href='<?= site_url('mysqladmin_dashboard'); ?>';">
            <h2>MySQL Admin Paneli</h2>
            <p>Veritabanı yönetimi için <br>MySQL admin paneline erişim sağlayın.</p>
        </div>

        <!-- MongoDB Admin Paneli Kartı -->
        <div class="card mongodb-card" onclick="window.location.href='<?= site_url('mongo_adminpanel'); ?>';">
            <h2>MongoDB Admin Paneli</h2>
            <p>Veritabanı yönetimi için MongoDB admin paneline erişim sağlayın.</p>
        </div>
    </div>
</body>
</html>
