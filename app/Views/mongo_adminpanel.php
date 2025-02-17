<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB Admin Paneli</title>
    <style>
        /* Genel stil */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Ürün Listesi */
        .product-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .product-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .product {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            background-color: #fafafa;
            position: relative;
        }

        .product h3 {
            font-size: 20px;
            margin: 0;
        }

        .product img {
            max-width: 120px;
            height: auto;
            border-radius: 8px;
        }

        .product p {
            font-size: 16px;
            color: #555;
        }

        /* Silme Butonu */
        .delete-btn {
            background-color: #dc3545;
            color: white;
            font-size: 14px;
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            top: 5px; 
            right: 5px;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        /* Güncelleme Butonu */
        .update-btn {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            top: 5px; 
            right: 80px;
            transition: background-color 0.3s;
        }

        .update-btn:hover {
            background-color: #0056b3;
        }

        /* Ürün Ekleme ve Güncelleme Formu */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
            margin-top: 6rem;
        }

        .form-container h2 {
            font-size: 24px;
            color: #343a40;
            margin-bottom: 20px;
        }

        .form-container label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="number"]:focus,
        .form-container input[type="file"]:focus {
            border-color: #28a745;
            outline: none;
        }

        .form-container button {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #218838;
        }

        /* Ürün Güncelleme Formu Başlangıçta Gizlensin */
        #update-form-container {
            display: none;
        }

        /* Responsive Tasarım */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .product {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .product img {
                max-width: 100px;
                margin-top: 10px;
            }
        }
    </style>
<script>
// Güncelleme butonuna tıklandığında formu doldur
function fillUpdateForm(productId, productName, productPrice) {
    document.getElementById('update_product_id').value = productId;
    document.getElementById('update_product_name').value = productName;
    document.getElementById('update_product_price').value = productPrice;
}

// Güncelleme formunu göster ve sayfayı kaydır
function showUpdateForm() {
    // Güncelleme formunu göster
    document.getElementById('update-form-container').style.display = 'block';
    
    // Sayfayı en aşağıya kaydır
    document.getElementById('update-form-container').scrollIntoView({ behavior: 'smooth' });
}
</script>
</head>
<body>
    <h1>MongoDB Admin Paneli</h1>
    
    <div class="container">
        <!-- Ürün Listeleme -->
        <div class="product-container">
            <h2>Ürün Listesi</h2>
            <?php
            foreach ($products as $product) {
                echo '<div class="product">';
                echo '<div>';
                echo '<h3>' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '</h3>';
                echo '<p><strong>Fiyat:</strong> ' . htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8') . ' ₺</p>';
                echo '</div>';

                // Resim var ise göster
                if (!empty($product['product_image'])) {
                    echo '<div><img src="' . base_url('uploads/' . $product['product_image']) . '" alt="' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '"></div>';
                }

                     // Silme butonu
                        echo '<form action="' . site_url('admin-panel/delete-product') . '" method="POST" style="position: absolute; top: 5px; right: 5px;">';
                        echo '<input type="hidden" name="product_name" value="' . $product['product_name'] . '">';
                        echo '<button type="submit" class="delete-btn">Sil</button>';
                        echo '</form>';
                // Güncelleme butonu
                echo '<form action="javascript:void(0);" method="POST" style="position: absolute; top: 5px; right: 80px;" onsubmit="fillUpdateForm(\'' . (string)$product['_id'] . '\', \'' . htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') . '\', \'' . htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8') . '\'); showUpdateForm(); return false;">';
                echo '<button type="submit" class="update-btn">Güncelle</button>';
                echo '</form>';

                echo '</div>';
            }
            ?>
        </div>

        <!-- Ürün Ekleme Formu -->
        <div class="form-container">
            <h2>Yeni Ürün Ekle</h2>
            <form action="<?= site_url('admin-panel/add-product'); ?>" method="POST" enctype="multipart/form-data">
                <label for="product_name">Ürün Adı</label>
                <input type="text" id="product_name" name="product_name" required><br>

                <label for="product_price">Ürün Fiyatı</label>
                <input type="number" id="product_price" name="product_price" required><br>

                <label for="product_image">Ürün Resmi</label>
                <input type="file" id="product_image" name="product_image"><br>

                <button type="submit">Ürün Ekle</button>
            </form>
        </div>
            
        <!-- Ürün Güncelleme Formu -->
        <div class="form-container" id="update-form-container">
            <h2>Ürün Güncelleme</h2>
            <form action="<?= site_url('admin-panel/edit-product'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="update_product_id" name="product_id">
                <input type="text" id="update_product_name" name="product_name" placeholder="Eski ürün adı" required>
                <input type="text" name="new_product_name" placeholder="Yeni ürün adı">
                <input type="number" id="update_product_price" name="product_price" placeholder="Yeni fiyat" required>
                <input type="file" name="product_image" accept="image/*">
                <button type="submit">Güncelle</button>
            </form>
        </div>
    </div>
</body>
</html>
