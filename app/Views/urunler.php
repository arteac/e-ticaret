<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ticaret Sitesi Tasarımı</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

   <!-- En İyi Ürünler -->
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
                    <h1>EN KALİTELİ ÜRÜNLERİN ADRESİ</h1>
                    <p>DEĞERLİ VE ŞEFFAF, KALİTELİ ÜRÜNLER
                        <br> Tüm Detaylar için;</p>

                    <a href="<?php echo base_url('hesap'); ?>">Üyelik için; &#8594; </a>
                </div>

                <div class="col-2">
                    <img src="images/image1.png" alt="landing image">
                </div>

            </div>
        </div>

   </section>
   <section id="featured-products" class="featured-products">
    <div class="container"> 
        <h2>En İyi Formalar</h2>

        <div class="row">
            <div class="col-4">
                    <img src="images/gs_away_2024.png" alt="Ürün 1" class="img-fluid">
                </a>
                
                <h3>Galatasaray Deplasman Forması</h3>


                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>7.000 TL</p>

                <!-- Sepete Ekle Butonu -->
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>

            <div class="col-4">
                <img src="images/gs_home_2024.png" alt="Ürün 2" class="img-fluid">

                <h3>Galatasaray İç Saha Forması</h3>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>7.000 TL</p>

                <!-- Sepete Ekle Butonu -->
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>

            <div class="col-4">
                <img src="images/gs_third_2024.png" alt="Ürün 3" class="img-fluid">

                <h3>Galatasaray Üçüncü Forması</h3>

                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>

                <p>7.000 TL</p>

                <!-- Sepete Ekle Butonu -->
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Yeni Ürünler -->
<section class="featured-products">
    <div class="container"> 
        <h2>Kaliteli Formalar ve Kramponlar Burada !</h2>

        <div class="row">
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Galatasaray Deplasman Forması', event)">
                    <img src="images/gs_away_2024.png" alt="Galatasaray Deplasman Forması" class="img-fluid">
                </a>
                <h3>Galatasaray Deplasman Forması</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>5.000 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Galatasaray İç Saha Forması', event)">
                    <img src="images/gs_home_2024.png" alt="Galatasaray İç Saha Forması" class="img-fluid">
                </a>
                <h3>Galatasaray İç Saha Forması</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>5.000 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Galatasaray Üçüncü Forma', event)">
                    <img src="images/gs_third_2024.png" alt="Galatasaray Üçüncü Forma" class="img-fluid">
                </a>
                <h3>Galatasaray Üçüncü Forma</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>5.000 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Galatasaray 100. Yıl Forması', event)">
                    <img src="images/gs_100.jpeg" alt="Galatasaray 100. Yıl Forması" class="img-fluid">
                </a>
                <h3>Galatasaray 100. Yıl Forması</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>6.000 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Adidas Predator Krampon', event)">
                    <img src="images/adidas_predator.png" alt="Adidas Predator Krampon" class="img-fluid">
                </a>
                <h3>Adidas Predator Krampon</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1.200 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Nike Mercurial Krampon', event)">
                    <img src="images/nike_mercurial_9.png" alt="Nike Mercurial Krampon" class="img-fluid">
                </a>
                <h3>Nike Mercurial Krampon</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1.500 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Nike Tiempo Krampon', event)">
                    <img src="images/nike_tiempo.png" alt="Nike Tiempo Krampon" class="img-fluid">
                </a>
                <h3>Nike Tiempo Krampon</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>1.350 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
            <div class="col-4">
                <a href="javascript:void(0)" onclick="urunDetaylariniGoster('Puma Ultra Krampon', event)">
                    <img src="images/puma_ultra.png" alt="Puma Ultra Krampon" class="img-fluid">
                </a>
                <h3>Puma Ultra Krampon</h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1.450 TL</p>
                <a href="<?php echo base_url('hesap'); ?>" class="btn btn-danger btn-block">
                    <i class="fa fa-shopping-cart"></i> Sepete Ekle
                </a>
            </div>
        </div>
    </div>
</section>

   
   <?php echo view('footer'); ?>

   <script>
    var menuItems = document.getElementById('menuItems');

    menuItems.style.maxHeight = '0px';
    menuItems.style.padding = '0px';

    function toggleButton(){
        
        if(menuItems.style.maxHeight == '0px'){
            menuItems.style.maxHeight = '200px';
            menuItems.style.padding = '15px';
        }else{
            menuItems.style.maxHeight = '0px';
            menuItems.style.padding = '0px';
        }
    }

</script>
</body>
</html>
