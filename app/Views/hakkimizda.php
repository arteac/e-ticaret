<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - E-Ticaret Sitesi</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <style>
        /* Orta Alan Tasarımı */
        #about-us {
            background-color: white;
            padding: 80px 20px;;
        }

        .about-us h2 {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 50px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .about-us .row {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            margin: 0 auto;
            max-width: 1200px;
        }

        .about-us .col-6 {
            width: 48%;
            max-width: 550px;
            margin-bottom: 30px;
        }

        .about-us .col-6 img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            object-fit: cover;
            transition: all .5s ease-in-out;
        }
        .about-us .col-6 img:hover {
            transform: scale(1.1);
            transition: all .5s ease-in-out;
        }

        .about-us h3 {
            font-size: 1.8em;
            color: #444;
            margin-top: 30px;
            font-weight: 600;
        }

        .about-us p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
        }

        .about-us .values {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .about-us .values p {
            margin-top: 15px;
            color: #777;
            font-size: 1.1em;
        }

        .about-us .values p strong {
            color: #333;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .about-us h2 {
                font-size: 2em;
            }

            .about-us .row {
                flex-direction: column;
                align-items: center;
            }

            .about-us .col-6 {
                width: 100%;
                margin-bottom: 30px;
            }

            .about-us h3 {
                font-size: 1.5em;
            }

            .about-us p {
                font-size: 1em;
            }

            .about-us .values {
                padding: 15px;
            }

            .about-us .values p {
                font-size: 1em;
            }
        }

        /* Very Small Devices (Portrait Phones, <=480px) */
        @media (max-width: 480px) {
            .about-us h2 {
                font-size: 1.8em;
                margin-bottom: 30px;
            }

            .about-us h3 {
                font-size: 1.4em;
            }

            .about-us p {
                font-size: 0.95em;
            }

            .about-us .values p {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body>

<section class="header-section">
    <div class="container">
        <header class="navbar">
            <div class="logo">
                <a href="<?= base_url('/') ?>" style="text-decoration: none; color: lightcoral;">
                    <h1>E-TİCARET SİTESİ</h1>
                </a>
            </div>

            <nav>
                <ul id="menuItems">
                    <li><a href="<?= base_url('/') ?>">Ana Sayfa</a></li>
                    <li><a href="<?= base_url('urunler') ?>">Ürünler</a></li>
                    <li><a href="<?= base_url('hakkimizda') ?>">Hakkımızda</a></li>
                    <li><a href="<?= base_url('iletisim') ?>">İletişim</a></li>
                    <li><a href="<?= base_url('hesap') ?>">Hesap</a></li>
                </ul>

                <a href="<?= base_url('hesap') ?>"><img src="images/cart.png" alt="Sepet ikonu" width="25px"></a>
                <img src="<?= base_url('images/menu.png') ?>" alt="Menu ikonu" width="26px" class="menu-icon" onclick="toggleButton()">
            </nav>
        </header>

        <div class="row">
            <div class="col-2">
                <h1>BİZ KİMİZ?</h1>
                <p>HAKKIMIZDA HER ŞEYİ ÖĞRENMEK İÇİN BU YAZIMIZI OKUYUN</p>
                <a href="<?= base_url('hesap') ?>">Üyelik için; &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="Hakkımızda Görseli">
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="about-us">
    <div class="container">
        <h2 style="user-select:none;">Hakkımızda</h2>
        <div class="row">
            <div class="col-6">
                <img src="<?= base_url('images/gs_away_2024.png') ?>" alt="Biz Kimiz Görseli" class="img-fluid">
            </div>
            <div class="col-6">
                <h3>Biz Kimiz?</h3>
                <p>
                    Biz, müşteri memnuniyetine odaklanmış ve kaliteli ürünler sunmayı hedefleyen bir e-ticaret platformuyuz. 
                    Amacımız, online alışveriş deneyimini daha hızlı, güvenli ve keyifli hale getirmek. Moda, teknoloji, ev ürünleri gibi geniş bir yelpazede ürünlerimizle her zaman yanınızdayız.
                </p>
                <h3>Vizyonumuz</h3>
                <p>
                    Türkiye'nin en büyük online alışveriş platformlarından biri olmayı hedefliyoruz. Müşterilerimize her zaman en iyi fiyatla en kaliteli ürünleri sunmayı amaçlıyoruz.
                </p>
                <h3>Misyonumuz</h3>
                <p>
                    Müşterilerimizin ihtiyaçlarını anlamak, onlara en uygun ürünleri sağlamak ve mükemmel müşteri hizmeti sunmak için sürekli gelişmeyi hedefliyoruz.
                </p>
                <h3>Değerlerimiz</h3>
                <div class="values">
                    <p><strong>Şeffaflık:</strong> İş yapış şeklimizin temel taşıdır.</p>
                    <p><strong>Dürüstlük:</strong> Her zaman açık ve dürüst olmayı ilke ediniriz.</p>
                    <p><strong>Yenilikçilik:</strong> Sürekli yeniliklere açık, değişime adapte olabiliriz.</p>
                    <p><strong>Müşteri Odaklılık:</strong> Müşterilerimizi her zaman ön planda tutarız.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo view('footer'); ?> <!-- Footer dosyasını dahil et -->

<script>
    var menuItems = document.getElementById('menuItems');
    menuItems.style.maxHeight = '0px';
    menuItems.style.padding = '0px';

    function toggleButton() {
        if (menuItems.style.maxHeight == '0px') {
            menuItems.style.maxHeight = '200px';
            menuItems.style.padding = '15px';
        } else {
            menuItems.style.maxHeight = '0px';
            menuItems.style.padding = '0px';
        }
    }
</script>

</body>
</html>
