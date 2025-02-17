<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sayfası</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <style>
        /* Genel stil ayarları */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: #f9f9f9;
            color: #333;
        }

        /* İletişim Bölümü */
        .contact-section {
            padding: 80px 15px;
            background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
            color: #fff;
            text-align: center;
            border-bottom: 10px solid (135deg, #a1c4fd, #c2e9fb);
            backdrop-filter: blur(10px); /* Arka plan bulanıklığı */
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
            align-items: center;
            flex-direction: column;
        }

        /* İletişim Bilgileri */
        .contact-info {
            flex: 1;
            max-width: 80%;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 40px;
            transition: transform 0.4s ease;
        }

        .contact-info:hover {
            transform: translateY(-10px);
        }

        .contact-info h2 {
            font-size: 2.5rem;
            color: #106e77;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .contact-info p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #555;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .info-item {
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            color: #333;
        }

        .info-item i {
            font-size: 1.7rem;
            color: #106e77;
            margin-right: 12px;
        }

        /* İletişim Formu */
        .contact-form {
            flex: 1;
            max-width: 80%;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            transition: transform 0.4s ease;
        }

        .contact-form:hover {
            transform: translateY(-10px);
        }

        .contact-form h3 {
            font-size: 2rem;
            margin-bottom: 25px;
            color: #106e77;
            font-weight: 600;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #106e77;
            background-color: #eaf6f6;
        }

        .contact-form button {
            background-color: #106e77;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            margin-right: 17%;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #014f56;
            transform: scale(1.05);
        }

        /* Türkiye Haritası */
        .map-section {
            margin-top: 80px;
            text-align: center;
        }

        .map-section h2 {
            font-size: 2.2rem;
            color: #106e77;
            margin-bottom: 20px;
        }

        .map-section iframe {
            width: 100%;
            max-width: 1200px;
            height: 500px;
            border: none;
            border-radius: 15px;
        }

        /* Responsive Tasarım */
        @media only screen and (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .contact-info, .contact-form {
                max-width: 100%;
                margin-bottom: 40px;
            }

            .contact-info h2, .contact-form h3 {
                font-size: 1.8rem;
            }

            .info-item {
                font-size: 1rem;
            }

            .contact-form button {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Başlık ve Menü -->
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
                <h1>BİZİMLE İLETİŞİME GEÇİN..</h1>
                <p>GÖRÜŞ VE DÜŞÜNCELERİNİZ BİZİM İÇİN ÖNEMLİDİR..</p>
                <a href="<?= base_url('hesap') ?>">Üyelik için; &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="Hakkımızda Görseli">
            </div>
        </div>
    </div>
</section>

<!-- İletişim Bölümü -->
<section class="contact-section">
    <div class="contact-container">
        <!-- İletişim Bilgileri -->
        <div class="contact-info">
            <h2>Bizimle İletişime Geçin</h2>
            <p>Herhangi bir sorunuz varsa, bizimle iletişime geçmekten çekinmeyin. Size en kısa sürede dönüş yapacağız!</p>
            <div class="contact-details">
                <div class="info-item">
                    <i class="fa fa-phone"></i>
                    <span>+90 123 456 7890</span>
                </div>
                <div class="info-item">
                    <i class="fa fa-envelope"></i>
                    <span>info@domain.com</span>
                </div>
                <div class="info-item">
                    <i class="fa fa-map-marker"></i>
                    <span>Adres: İstanbul, Türkiye</span>
                </div>
            </div>
        </div>
        
        <!-- İletişim Formu -->
        <div class="contact-form">
            <h3>Bize Mesaj Gönderin</h3>
            <form id="contactForm">
                <input type="text" name="name" placeholder="Adınız" required>
                <input type="email" name="email" placeholder="E-posta" required>
                <textarea name="message" placeholder="Mesajınız" rows="4" required></textarea>
                <button type="submit" class="btn">Gönder</button>
                <button style="background-color: #f44336;" type="reset" class="btn">Temizle</button>
            </form>
            <div id="responseMessage" style="display: none; margin-top: 20px; padding: 10px; border-radius: 5px;"></div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();  // Formun sayfayı yenilemesini engelle

    var formData = new FormData(this);  // Form verilerini al

    // AJAX isteği gönder
    fetch('<?php echo base_url('iletisim'); ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Mesajı göster
        var responseMessage = document.getElementById('responseMessage');
        if (data.status === 'success') {
            responseMessage.style.backgroundColor = '#4CAF50';  // Yeşil başarı mesajı
            responseMessage.style.color = '#fff';
            responseMessage.textContent = data.message;  // Başarı mesajı
        } else {
            responseMessage.style.backgroundColor = '#f44336';  // Kırmızı hata mesajı
            responseMessage.style.color = '#fff';
            responseMessage.textContent = data.message;  // Hata mesajı
        }
        responseMessage.style.display = 'block';  // Mesajı göster
    })
    .catch(error => {
        console.error('Hata:', error);
        alert('Mesaj gönderilirken bir hata oluştu.');
    });
});
</script>


<!-- Türkiye Haritası -->
<section class="map-section">
    <h2>Konumumuz</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385399.3520038009!2d28.682533630611694!3d41.00485195359158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1733341599756!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- Footer -->
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