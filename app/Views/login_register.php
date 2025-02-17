<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Giriş & Kayıt</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6e7bff, #00d2d3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .auth-container {
            max-width: 500px;
            width: 100%;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .auth-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 32px;
            font-weight: bold;
            color: #333;
        }
        .auth-container .btn-primary {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 50px;
            transition: all 0.3s;
        }
        .auth-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .auth-container .form-control {
            margin-bottom: 15px;
            font-size: 16px;
            padding: 15px;
            border-radius: 50px;
            border: 1px solid #007bff;
        }
        .auth-container .form-label {
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }
        .nav-tabs {
            justify-content: center;
        }
        .nav-link {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            border-radius: 50px;
            transition: all 0.3s;
        }
        .nav-link:hover {
            background-color: #007bff;
            color: white;
        }
        .alert {
            margin-bottom: 20px;
            font-size: 14px;
            border-radius: 10px;
            padding: 15px;
            color: #333;
        }
        .alert-danger {
            background-color: #f8d7da;
        }
        .alert-success {
            background-color: #d4edda;
        }
    </style>
</head>
<body>

    <div class="auth-container">
        <h2>Admin Giriş & Kayıt</h2>
        
        <!-- Sekmeler -->
        <ul class="nav nav-tabs" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Giriş Yap</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Kayıt Ol</a>
            </li>
        </ul>
        
        <!-- Sekme İçeriği -->
        <div class="tab-content" id="authTabsContent">
            <!-- Giriş Formu -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form action="<?= base_url('/auth/login') ?>" method="POST">
                    <!-- Flashdata ile gelen hata mesajını göster -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="username" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= old('username'); ?>" required>
                        <?php if (isset($validation) && $validation->getError('username')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('username') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= old('password'); ?>" required>
                        <?php if (isset($validation) && $validation->getError('password')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('password') ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>

            <!-- Kayıt Formu -->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form action="<?= base_url('/auth/register') ?>" method="POST">
                    <?= session()->getFlashdata('success') ? '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>' : ''; ?>
                    <?= session()->getFlashdata('error') ? '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>' : ''; ?>

                    <div class="mb-3">
                        <label for="username" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= old('username'); ?>" required>
                        <?php if (isset($validation) && $validation->getError('username')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('username') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-posta</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>" required>
                        <?php if (isset($validation) && $validation->getError('email')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('email') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= old('password'); ?>" required>
                        <?php if (isset($validation) && $validation->getError('password')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('password') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Şifreyi Onayla</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        <?php if (isset($validation) && $validation->getError('confirmPassword')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('confirmPassword') ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>
