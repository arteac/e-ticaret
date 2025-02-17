<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeShop - Giriş ve Kayıt</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        .form-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: #333;
        }
        .form-button {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-button span {
            cursor: pointer;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            background: #f0f0f0;
            transition: background 0.3s, color 0.3s;
        }
        .form-button span.active {
            background: #007bff;
            color: white;
        }
        form {
            display: none;
        }
        form.active {
            display: block;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .form-footer {
            text-align: center;
            margin-top: 15px;
        }
        .form-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .success-message {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
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

                <a href="<?= base_url('hesap') ?>"><img src="<?= base_url('images/cart.png') ?>" alt="Sepet ikonu" width="25px"></a>
                <img src="images/menu.png" alt="Menu ikonu" width="26px" class="menu-icon" onclick="toggleMenu()">
            </nav>
        </header>
        <div class="row">
            <div class="col-2">
                <img src="<?= base_url('images/image1.png') ?>" alt="landing image">
            </div>
            <section>
                <div class="form-container">
                    <div class="form-button">
                        <span id="login-tab" class="" onclick="showLogin()">Giriş Yap</span>
                        <span id="register-tab" class="" onclick="showRegister()">Kayıt Ol</span>
                    </div>

                    <!-- Giriş Yap Formu -->
                    <form id="login-form" action="<?= base_url('user/login') ?>" method="POST">
                        <input type="email" name="email" placeholder="E-posta adresiniz" value="<?= old('email') ?>" required>
                        <input type="password" name="password" placeholder="Şifreniz" required>
                        <input type="submit" value="Giriş Yap">
                        
                        <!-- Hata Mesajı -->
                        <?php if (session()->getFlashdata('login_error')): ?>
                            <div class="error-message">
                                <?= session()->getFlashdata('login_error') ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-footer">
                            <p>Hesabınız yok mu? <a href="#" onclick="showRegister()">Kayıt Olun</a></p>
                        </div>
                    </form>

                    <!-- Kayıt Ol Formu -->
                    <form id="register-form" action="<?= base_url('user/register') ?>" method="POST">
                        <input type="text" name="username" placeholder="Kullanıcı Adınız" value="<?= old('username') ?>" required>
                        <input type="email" name="email" placeholder="E-posta adresiniz" value="<?= old('email') ?>" required>
                        <input type="password" name="password" placeholder="Şifreniz" required>
                        <input type="submit" value="Kayıt Ol">
                        
                        <!-- E-posta Hata Mesajı -->
                        <?php if (session()->getFlashdata('email_error')): ?>
                            <div class="error-message">
                                <?= session()->getFlashdata('email_error') ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Kayıt Başarılı Mesajı -->
                        <?php if (session()->getFlashdata('register_success')): ?>
                            <div class="success-message">
                                Kayıt başarılı, alışverişe başlayabilirsiniz.
                            </div>
                        <?php endif; ?>

                        <div class="form-footer">
                            <p>Zaten bir hesabınız var mı? <a href="#" onclick="showLogin()">Giriş Yapın</a></p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>

<script>
    // Sayfa yüklendiğinde hangi form açıksa onu aktif yap
    document.addEventListener("DOMContentLoaded", function() {
        var activeForm = localStorage.getItem('activeForm') || 'login';  // 'login' varsayılan
        if (activeForm === 'login') {
            showLogin();
        } else {
            showRegister();
        }

        // Sayfa yüklendiğinde menü kapalı olmalı
        var menuItems = document.getElementById('menuItems');
        menuItems.style.maxHeight = '0px';
        menuItems.style.padding = '0px';
    });

    function showLogin() {
        document.getElementById('login-form').classList.add('active');
        document.getElementById('register-form').classList.remove('active');
        document.getElementById('login-tab').classList.add('active');
        document.getElementById('register-tab').classList.remove('active');
        
        // Aktif formu kaydet
        localStorage.setItem('activeForm', 'login');
    }

    function showRegister() {
        document.getElementById('login-form').classList.remove('active');
        document.getElementById('register-form').classList.add('active');
        document.getElementById('login-tab').classList.remove('active');
        document.getElementById('register-tab').classList.add('active');
        
        // Aktif formu kaydet
        localStorage.setItem('activeForm', 'register');
    }

    // Menü açma ve kapama işlevi
    function toggleMenu() {
        var menuItems = document.getElementById('menuItems');
        
        if (menuItems.style.maxHeight === '0px') {
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
