<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2025 MongoDB Admin Paneli - Ürün Yönetimi">
    <meta name="keywords" content="admin panel, mongodb, e-ticaret, 2025">
    <meta name="author" content="xAI Grok 3">
    <title>MongoDB Admin Paneli 2025</title>

    <!-- Fontlar -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        :root {
            --primary-color: #7c3aed;
            --secondary-color: #22d3ee;
            --text-color: #1e293b;
            --bg-light: #f1f5f9;
            --bg-dark: #0f172a;
            --card-bg: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background: var(--bg-light);
            color: var(--text-color);
            line-height: 1.7;
            overflow-x: hidden;
            transition: var(--transition);
        }

        body.dark-mode {
            background: var(--bg-dark);
            color: #e2e8f0;
        }

        body.dark-mode .card-bg,
        body.dark-mode .product-container,
        body.dark-mode .form-container {
            background: #1e293b;
            color: #e2e8f0;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .hidden {
            opacity: 0;
            transform: translateY(30px);
            transition: var(--transition);
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 20px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        header h1 {
            color: #fff;
            font-size: 2.2rem;
            font-weight: 800;
            text-align: center;
            letter-spacing: 1px;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 80px;
            left: 0;
            width: 280px;
            height: calc(100% - 80px);
            background: var(--card-bg);
            padding: 30px 20px;
            box-shadow: var(--shadow);
            transform: translateX(-100%);
            transition: var(--transition);
            z-index: 999;
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background: var(--primary-color);
            color: #fff;
            transform: translateX(5px);
        }

        .sidebar-toggle {
            position: fixed;
            top: 25px;
            left: 20px;
            font-size: 1.8rem;
            color: #fff;
            cursor: pointer;
            z-index: 1100;
            transition: var(--transition);
        }

        .sidebar-toggle:hover {
            transform: rotate(90deg);
        }

        /* Main Content */
        .main-content {
            margin-left: 0;
            padding: 100px 20px 20px;
            transition: margin-left 0.4s ease;
        }

        .sidebar.active ~ .main-content {
            margin-left: 280px;
        }

        /* Product Container */
        .product-container {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .product-container h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .product {
            background: #f8fafc;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            position: relative;
            transition: var(--transition);
        }

        body.dark-mode .product {
            background: #334155;
            border-color: #475569;
        }

        .product:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .product h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .product img {
            max-width: 180px;
            height: auto;
            border-radius: 10px;
            margin: 15px 0;
            transition: var(--transition);
        }

        .product img:hover {
            transform: scale(1.1);
        }

        .product p {
            font-size: 1.1rem;
            color: #64748b;
        }

        .product-actions {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .delete-btn, .update-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .delete-btn {
            background: #ef4444;
            color: #fff;
        }

        .delete-btn:hover {
            background: #dc2626;
            transform: scale(1.05);
        }

        .update-btn {
            background: var(--primary-color);
            color: #fff;
        }

        .update-btn:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }

        /* Forms */
        .form-container {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .form-container h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text-color);
            margin-bottom: 10px;
            display: block;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            background: #f9fafb;
            transition: var(--transition);
        }

        body.dark-mode .form-group input {
            background: #334155;
            border-color: #475569;
            color: #e2e8f0;
        }

        .form-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(124, 58, 237, 0.3);
            outline: none;
        }

        .form-container button {
            background: var(--primary-color);
            color: #fff;
            padding: 14px 30px;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: var(--transition);
        }

        .form-container button:hover {
            background: var(--secondary-color);
            transform: scale(1.03);
        }

        #update-form-container {
            display: none;
        }

        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-color);
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: var(--secondary-color);
            transform: rotate(360deg);
        }

        .theme-toggle i {
            font-size: 1.8rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .product-list {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }

            .sidebar {
                width: 240px;
            }

            .sidebar.active ~ .main-content {
                margin-left: 240px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .product-list {
                grid-template-columns: 1fr;
            }

            .sidebar {
                width: 100%;
                height: auto;
                top: 80px;
            }

            .sidebar.active ~ .main-content {
                margin-left: 0;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.8rem;
            }

            .product-container h2,
            .form-container h2 {
                font-size: 1.6rem;
            }

            .product h3 {
                font-size: 1.3rem;
            }

            .product img {
                max-width: 140px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>MongoDB Admin Paneli 2025</h1>
        </div>

    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Product List -->
            <div class="product-container hidden">
                <h2>Ürün Listesi</h2>
                <div class="product-list">
                    <?php
                    foreach ($products as $product) {
                        echo '<div class="product">';
                        echo '<h3>' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '</h3>';
                        echo '<p><strong>Fiyat:</strong> ' . htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8') . ' ₺</p>';

                        if (!empty($product['product_image'])) {
                            echo '<img src="' . base_url('uploads/' . $product['product_image']) . '" alt="' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '">';
                        }

                        echo '<div class="product-actions">';
                        echo '<form action="' . site_url('admin-panel/delete-product') . '" method="POST">';
                        echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '">';
                        echo '<button type="submit" class="delete-btn">Sil</button>';
                        echo '</form>';

                        echo '<button class="update-btn" onclick="fillUpdateForm(\'' . (string)$product['_id'] . '\', \'' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '\', \'' . htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8') . '\'); showUpdateForm();">Güncelle</button>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Add Product Form -->
            <div class="form-container hidden">
                <h2>Yeni Ürün Ekle</h2>
                <form action="<?= site_url('admin-panel/add-product'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product_name">Ürün Adı</label>
                        <input type="text" id="product_name" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="product_price">Ürün Fiyatı (₺)</label>
                        <input type="number" id="product_price" name="product_price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_image">Ürün Resmi</label>
                        <input type="file" id="product_image" name="product_image" accept="image/*">
                    </div>
                    <button type="submit">Ürün Ekle</button>
                </form>
            </div>

            <!-- Update Product Form -->
            <div class="form-container hidden" id="update-form-container">
                <h2>Ürün Güncelle</h2>
                <form action="<?= site_url('admin-panel/edit-product'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="update_product_id" name="product_id">
                    <div class="form-group">
                        <label for="update_product_name">Mevcut Ürün Adı</label>
                        <input type="text" id="update_product_name" name="product_name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="new_product_name">Yeni Ürün Adı</label>
                        <input type="text" id="new_product_name" name="new_product_name">
                    </div>
                    <div class="form-group">
                        <label for="update_product_price">Yeni Fiyat (₺)</label>
                        <input type="number" id="update_product_price" name="product_price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="update_product_image">Yeni Ürün Resmi</label>
                        <input type="file" id="update_product_image" name="product_image" accept="image/*">
                    </div>
                    <button type="submit">Güncelle</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Theme Toggle -->
    <div class="theme-toggle" onclick="toggleTheme()">
        <i class="fas fa-moon"></i>
    </div>

    <script>
        // Sidebar Toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // Theme Toggle
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
            const icon = document.querySelector('.theme-toggle i');
            icon.classList.toggle('fa-moon');
            icon.classList.toggle('fa-sun');
            localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
        }

        // Load Theme
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            document.querySelector('.theme-toggle i').classList.replace('fa-moon', 'fa-sun');
        }

        // Fill and Show Update Form
        function fillUpdateForm(productId, productName, productPrice) {
            document.getElementById('update_product_id').value = productId;
            document.getElementById('update_product_name').value = productName;
            document.getElementById('new_product_name').value = '';
            document.getElementById('update_product_price').value = productPrice;
            document.getElementById('update_product_image').value = '';
        }

        function showUpdateForm() {
            const updateForm = document.getElementById('update-form-container');
            updateForm.style.display = 'block';
            updateForm.scrollIntoView({ behavior: 'smooth' });
        }

        // Intersection Observer for Animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll('.hidden').forEach(el => observer.observe(el));
    </script>
</body>
</html>