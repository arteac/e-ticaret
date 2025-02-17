<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ticaret Sitesi Tasarımı</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <li><a href="<?php echo base_url('urunler'); ?>">Ürünler</a></li>
                        <li><a href="<?php echo base_url('hakkimizda'); ?>">Hakkımızda</a></li>
                        <li><a href="<?php echo base_url('iletisim'); ?>">İletişim</a></li>
                        <li><a href="<?php echo base_url('hesap'); ?>">Hesap</a></li>
                    </ul>
                    
                    <a href="<?php echo base_url('hesap'); ?>"><img src="images/cart.png" alt="Sepet ikonu" width="25px"></a>
                    <img src="<?= base_url('images/menu.png'); ?>" alt="Menu ikonu" width="26px" class="menu-icon" onclick="toggleButton()">
                </nav>
        
            </header>

            <div class="row">

                <div class="col-2">
                    <h1>Egzersizlerinize Yeni Bir Stil Katın!</h1>
                    <p>Başarı her zaman büyüklükle ilgili değildir. 
                        <br> Bu tutarlılık meselesidir. Sıkı ve sürekli çalışmak başarıyı getirir. Büyüklük zamanla gelecektir.</p>

                    <a href="<?php echo base_url('hesap'); ?>">Şimdi Keşfedin &#8594; </a>
                </div>

                <div class="col-2">
                    <img src="images/image1.png" alt="landing image">
                </div>

            </div>
        </div>

   </section>
</body>
</html>
