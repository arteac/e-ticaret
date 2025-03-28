<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeShop - Hesap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary: #7c3aed;
            --secondary: #db2777;
            --text-dark: #1e293b;
            --text-light: #fff;
            --bg-light: #f5f7fa;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            background: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Header */
       
        /* Account Section */
        .account {
            min-height: calc(100vh - 80px);
            display: grid;
            place-items: center;
            padding: 2rem 1rem;
        }

        .account-wrapper {
            width: 100%;
            max-width: 500px;
            background: #fff;
            border-radius: 1.5rem;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .tabs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #f8fafc;
        }

        .tab {
            padding: 1.25rem;
            text-align: center;
            font-size: 1.125rem;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab.active {
            background: var(--primary);
            color: var(--text-light);
        }

        .tab:hover:not(.active) {
            background: #ddd6fe;
            color: var(--text-dark);
        }

        .content {
            padding: 2rem;
        }

        .form {
            display: none;
        }

        .form.active {
            display: block;
            animation: slideIn 0.4s ease-out;
        }

        .field {
            margin-bottom: 1.25rem;
            position: relative;
        }

        .field label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .field input {
            width: 100%;
            padding: 0.875rem;
            font-size: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            transition: var(--transition);
        }

        .field input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.2);
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 0.875rem;
            background: var(--primary);
            color: var(--text-light);
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 0.75rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn:hover {
            background: #6d28d9;
            transform: translateY(-2px);
        }

        .message {
            padding: 0.75rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            text-align: center;
        }

        .error {
            background: #fee2e2;
            color: #dc2626;
        }

        .success {
            background: #dcfce7;
            color: #16a34a;
        }

        .footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .footer a:hover {
            text-decoration: underline;
            color: #6d28d9;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: var(--primary);
                padding: 1rem;
                flex-direction: column;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .nav-links.active {
                display: flex;
                max-height: 300px;
            }

            .nav-icon {
                display: block;
            }

            .account-wrapper {
                margin: 1rem;
            }
        }

        /* Animations */
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
     <?php include ('header.php') ?>

    <!-- Account -->
    <section class="account">
        <div class="account-wrapper">
            <div class="tabs">
                <div class="tab active" data-tab="login">Giriş Yap</div>
                <div class="tab" data-tab="register">Kayıt Ol</div>
            </div>
            <div class="content">
                <!-- Login Form -->
                <form id="login" class="form active" action="<?= base_url('user/login') ?>" method="POST">
                    <div class="field">
                        <label for="email">E-posta</label>
                        <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
                    </div>
                    <div class="field">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <?php if (session()->getFlashdata('login_error')): ?>
                        <div class="message error"><?= session()->getFlashdata('login_error') ?></div>
                    <?php endif; ?>
                    <button type="submit" class="btn">Giriş Yap</button>
                    <div class="footer">
                        <p>Hesabınız yok mu? <a href="#" data-tab="register">Kayıt Olun</a></p>
                    </div>
                </form>

                <!-- Register Form -->
                <form id="register" class="form" action="<?= base_url('user/register') ?>" method="POST">
                    <div class="field">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" id="username" value="<?= old('username') ?>" required>
                    </div>
                    <div class="field">
                        <label for="reg-email">E-posta</label>
                        <input type="email" name="email" id="reg-email" value="<?= old('email') ?>" required>
                    </div>
                    <div class="field">
                        <label for="reg-password">Şifre</label>
                        <input type="password" name="password" id="reg-password" required>
                    </div>
                    <?php if (session()->getFlashdata('email_error')): ?>
                        <div class="message error"><?= session()->getFlashdata('email_error') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('register_success')): ?>
                        <div class="message success">Kayıt başarılı, alışverişe başlayabilirsiniz.</div>
                    <?php endif; ?>
                    <button type="submit" class="btn">Kayıt Ol</button>
                    <div class="footer">
                        <p>Hesabınız var mı? <a href="#" data-tab="login">Giriş Yapın</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const tabs = document.querySelectorAll('.tab');
        const forms = document.querySelectorAll('.form');
        const navLinks = document.getElementById('navLinks');

        // Tab Switching
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.tab;
                tabs.forEach(t => t.classList.remove('active'));
                forms.forEach(f => f.classList.remove('active'));
                tab.classList.add('active');
                document.getElementById(target).classList.add('active');
                localStorage.setItem('activeTab', target);
            });
        });

        // Footer Links
        document.querySelectorAll('.footer a').forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                const target = link.dataset.tab;
                tabs.forEach(t => t.classList.remove('active'));
                forms.forEach(f => f.classList.remove('active'));
                document.querySelector(`.tab[data-tab="${target}"]`).classList.add('active');
                document.getElementById(target).classList.add('active');
                localStorage.setItem('activeTab', target);
            });
        });

        // Load Active Tab
        const activeTab = localStorage.getItem('activeTab') || 'login';
        tabs.forEach(t => t.classList.remove('active'));
        forms.forEach(f => f.classList.remove('active'));
        document.querySelector(`.tab[data-tab="${activeTab}"]`).classList.add('active');
        document.getElementById(activeTab).classList.add('active');

        // Toggle Navigation
        function toggleNav() {
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>