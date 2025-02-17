<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #343a40;
            padding-top: 20px;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .sidebar .active {
            background-color: #007bff;
            border-radius: 5px;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        .section-title {
            color: #007bff;
            font-weight: bold;
        }

        /* Product Card Styling */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width:auto;
            height:auto;
            object-fit: cover;
            object-position: center;
        }

        .product-details {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-price {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <a href="#" class="active" data-section="users"><i class="fas fa-users"></i> Kullanıcı Listesi</a>
        <a href="#" data-section="messages"><i class="fas fa-envelope"></i> İletişim Mesajları</a>
        <a href="#" data-section="products"><i class="fas fa-box"></i> Ürün Yönetimi</a>
        <a href="<?= base_url('auth/logout'); ?>" class="btn btn-danger d-block mt-3">Çıkış Yap</a>
    </div>

    <div class="main-content">
        <h1 class="text-center my-4">Admin Paneli</h1>

        <!-- User List Section -->
        <div class="card" id="users">
            <div class="card-header">
                <h2 class="section-title">Kullanıcı Listesi</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['id']; ?></td>
                                    <td><?= $user['username']; ?></td>
                                    <td><?= $user['email']; ?></td>
                                    <td><?= $user['created_at']; ?></td>
                                    <td><?= $user['updated_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Contact Messages Section -->
        <div class="card d-none" id="messages">
            <div class="card-header">
                <h2 class="section-title">İletişim Mesajları</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($messages as $message): ?>
                                <tr>
                                    <td><?= $message['id']; ?></td>
                                    <td><?= $message['name']; ?></td>
                                    <td><?= $message['email']; ?></td>
                                    <td><?= $message['message']; ?></td>
                                    <td><?= $message['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Product Management Section -->
        <div class="card d-none" id="products">
            <div class="card-header">
                <h2 class="section-title">Ürün Yönetimi</h2>
            </div>
            <div class="card-body">
                <!-- Ürün Ekleme Formu -->
                <form id="addProductForm" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/add_product'); ?>">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Ürün Adı</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Ürün Fiyatı</label>
                        <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Ürün Görseli</label>
                        <input type="file" class="form-control" id="productImage" name="productImage" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ürün Ekle</button>
                </form>
                <hr>

                <!-- Mevcut Ürünler -->
                <div class="row">
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4 mb-4">
                            <div class="product-card">
                                <img src="<?= base_url('images/' . $product['product_image']); ?>" alt="<?= $product['product_name']; ?>" class="product-image">
                                <div class="product-details">
                                    <div class="product-title"><?= $product['product_name']; ?></div>
                                    <div class="product-price">₺<?= number_format($product['product_price'], 2); ?></div>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" 
                                                data-product-id="<?= $product['id']; ?>" 
                                                data-product-name="<?= $product['product_name']; ?>" 
                                                data-product-price="<?= $product['product_price']; ?>"
                                                data-product-image="<?= $product['product_image']; ?>">
                                            Düzenle
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteProduct(<?= $product['id']; ?>)">Sil</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Ürün Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="editProductForm" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/products/update/' . $product['id']); ?>">

                        <input type="hidden" id="productId" name="productId">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Ürün Adı</label>
                            <input type="text" class="form-control" id="productName" name="productName" required>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Ürün Fiyatı</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Ürün Görseli</label>
                            <input type="file" class="form-control" id="productImage" name="productImage">
                        </div>
                        <div class="mb-3">
                            <label for="productImagePreview" class="form-label">Görsel Önizleme</label>
                            <img id="productImagePreview" src="" alt="Ürün Görseli" class="img-fluid">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary" id="saveProductChanges">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        const links = document.querySelectorAll('.sidebar a');
        const sections = document.querySelectorAll('.card');

        links.forEach(link => {
            link.addEventListener('click', function() {
                const sectionId = link.getAttribute('data-section');

                sections.forEach(section => {
                    section.classList.add('d-none');
                });

                const activeSection = document.getElementById(sectionId);
                activeSection.classList.remove('d-none');

                links.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

        // Ürün düzenleme için modal'ı aç
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const productPrice = button.getAttribute('data-product-price');
            const productImage = button.getAttribute('data-product-image');
            
            document.getElementById('productId').value = productId;
            document.getElementById('productName').value = productName;
            document.getElementById('productPrice').value = productPrice;
            
            const productImagePreview = document.getElementById('productImagePreview');
            productImagePreview.src = `<?= base_url('images/'); ?>${productImage}`;
        });

        document.getElementById('saveProductChanges').addEventListener('click', function() {
            document.getElementById('editProductForm').submit();
        });

        function deleteProduct(productId) {
            if(confirm('Bu ürünü silmek istediğinizden emin misiniz?')) {
                window.location.href = `<?= base_url('admin/delete_product/'); ?>${productId}`;
            }
        }
    </script>
</body>
</html>
