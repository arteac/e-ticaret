<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ticaret Sitesi Tasarımı</title>
    <link rel="stylesheet" href="<?= base_url('assets/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /* Genel Stiller */
    .urun-modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    padding-top: 60px;
    overflow: auto; /* Modal içerik dışına taşarsa kaydırma ekler */
}

.urun-modal-icerik {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    max-width: 700px;
    display: flex;
    justify-content: space-between;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.modal-sol img {
    width: 200px;
    height: auto;
    object-fit: contain;
    margin-right: 20px;
}

.modal-sag {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    max-width: 50%;
}

.modal-sag h3 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.modal-sag p {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

.kapat-btn {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 25px;
    cursor: pointer;
}

.kapat-btn:hover,
.kapat-btn:focus {
    color: black;
    text-decoration: none;
}

.btn-tehlike {
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-tehlike:hover {
    background-color: #c0392b;
}

strong {
    font-weight: bold;
}

/* Responsive Düzenlemeler */
@media (max-width: 768px) {
    .urun-modal-icerik {
        flex-direction: column;
        width: 90%;
    }

    .modal-sol img {
        width: 100%;
        margin-right: 0;
    }

    .modal-sag {
        width: 100%;
        margin-top: 15px;
    }
}
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #fff;
    }

    /* Arama Kutusu */
    .search-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
        position: relative;
    }

    .search-bar input {
        width: 100%;
        max-width: 500px;
        padding: 10px 15px;
        font-size: 16px;
        border: 2px solid #ddd;
        border-radius: 30px 0 0 30px;
        outline: none;
        transition: border 0.3s ease;
    }

    .search-bar input:focus {
        border-color: #ff5722;
    }

    .search-bar button {
        background-color: #ff5722;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 0 30px 30px 0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-bar button:hover {
        background-color: #e64a19;
    }

    .clear-btn {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #aaa;
        cursor: pointer;
        display: none;
    }

    .clear-btn:hover {
        color: #ff5722;
    }

    /* Arama Sonuçları Konteyneri */
    .search-results-container {
        margin: 20px auto;
        max-width: 1200px;
        display: block; /* Grid yerine block */
    }

    /* Ürün Kartı Stili */
    .search-result-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px; /* Ürünler arasında boşluk */
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .search-result-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .search-result-card img {
        width: 100%;
        max-height: 150px;
        object-fit: contain;
        margin-bottom: 15px;
        border-radius: 8px;
        cursor: pointer; /* Resme tıklanabilirlik ekledik */
    }

    .search-result-card span {
        display: block;
        font-weight: bold;
        font-size: 16px;
        color: #333;
        margin-bottom: 10px;
    }

    /* Modal Penceresi (Ürün Detayı) */
    .product-modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .product-modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        max-width: 700px;
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
    }

    .modal-left img {
        width: 200px;
        height: auto;
    }

    .modal-right {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .sizes {
        margin: 10px 0;
    }

    .sizes select {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .close-btn {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        top: 10px;
        right: 25px;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #e74c3c;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }
    .product-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 20px auto;
    padding: 10px;
    max-width: 1200px;
}

.product-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.product-card img {
    width: 100%;
    height: auto;
    max-height: 200px;
    object-fit: contain;
    margin-bottom: 15px;
    border-radius: 10px;
}

.product-card h2 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

.product-card .product-price {
    font-size: 16px;
    color: #e74c3c;
    margin-bottom: 15px;
}

.add-to-cart-btn {
    background-color: #ff5722;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart-btn:hover {
    background-color: #e64a19;
}

.no-products {
    text-align: center;
    font-size: 18px;
    color: #999;
    margin: 20px 0;
}


    /* Responsive Düzenlemeler */
/* Responsive Düzenlemeler */
@media (max-width: 768px) {
    .urun-modal-icerik {
        flex-direction: column;
        width: 90%;
    }

    .modal-sol img {
        width: 100%;
        margin-right: 0;
    }

    .modal-sag {
        width: 100%;
        margin-top: 15px;
    }

    .search-bar {
        flex-direction: column;
        align-items: stretch;
    }

    .search-bar input,
    .search-bar button {
        width: 100%;
        margin-bottom: 10px;
    }

    .product-modal-content {
        flex-direction: column;
        width: 90%;
    }

    .modal-left img {
        width: 100%;
    }
}
/* Ürün Detay Butonunun Stilini Ayarlama */
.urun-detay-btn {
    background-color: #ff9900;  /* Parlak turuncu */
    color: #fff;  /* Beyaz metin rengi */
    padding: 12px 24px;  /* Yükseklik ve genişlik */
    font-size: 16px;  /* Font büyüklüğü */
    font-weight: bold;  /* Kalın yazı */
    border: none;  /* Sınır yok */
    border-radius: 8px;  /* Yuvarlatılmış köşeler */
    cursor: pointer;  /* İmleç tipi */
    transition: all 0.3s ease-in-out;  /* Animasyon geçişi */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);  /* Hafif gölge */
    text-transform: uppercase;  /* Büyük harflerle yazı */
}

/* Hover Efekti - Buton üzerine gelindiğinde */
.urun-detay-btn:hover {
    background-color: #ff6600;  /* Hover sırasında daha koyu turuncu */
    transform: translateY(-4px);  /* Butonu yukarı kaydır */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);  /* Hover ile gölgeyi arttır */
}

/* Butonun odaklanmış hali (focus) */
.urun-detay-btn:focus {
    outline: none;  /* Varsayılan odak çerçevesini kaldır */
    box-shadow: 0 0 10px rgba(255, 102, 0, 0.6);  /* Turuncu odak ışığı */
}

/* Butonun tıklandığında efekt vermesi */
.urun-detay-btn:active {
    transform: translateY(2px);  /* Tıklanırken aşağı kaydır */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);  /* Tıklanmış gölge */
}/* Başlık Stilini Ayarlama */
.urun {
    font-size: 2.5rem;  /* Büyük font boyutu */
    font-weight: bold;  /* Kalın yazı */
    color: #333;  /* Koyu gri renk */
    text-align: center;  /* Başlığı ortalayacak */
    line-height: 1.4;  /* Satır arası mesafesini arttırma */
    margin: 20px 0;  /* Üst ve alt boşluk */
    padding: 0 15px;  /* Yanlarda biraz boşluk */
}

/* Başlık için Responsive Özellikler */
@media (max-width: 768px) {
    .urun {
        font-size: 2rem;  /* Ekran küçükse font boyutunu küçült */
        line-height: 1.5;  /* Satır arası mesafesini biraz daha arttır */
    }
}

@media (max-width: 480px) {
    .urun {
        font-size: 1.5rem;  /* Mobil ekranlar için font boyutunu daha da küçült */
        line-height: 1.6;  /* Daha fazla satır arası mesafe */
    }
}
/* Sepete Ekle Butonu */
.sepete-ekle-btn {
    background-color: #28a745;  /* Yeşil renk */
    color: #fff;  /* Beyaz metin */
    padding: 12px 24px;  /* Yükseklik ve genişlik */
    font-size: 16px;  /* Font büyüklüğü */
    font-weight: bold;  /* Kalın yazı */
    border: none;  /* Sınır yok */
    border-radius: 8px;  /* Yuvarlatılmış köşeler */
    cursor: pointer;  /* İmleç tipi */
    transition: all 0.3s ease-in-out;  /* Animasyon geçişi */
    margin-top: 20px;  /* Üstten boşluk */
    display: inline-block;  /* Butonun yatayda ortalanması */
}

/* Sepete Ekle Butonunda Hover Efekti */
.sepete-ekle-btn:hover {
    background-color: #218838;  /* Hover'da daha koyu yeşil */
    transform: translateY(-4px);  /* Butonu yukarı kaydır */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);  /* Gölge efekti */
}

/* Sepete Ekle Butonunda Odaklanma Efekti */
.sepete-ekle-btn:focus {
    outline: none;  /* Varsayılan odak çerçevesini kaldır */
    box-shadow: 0 0 10px rgba(40, 167, 69, 0.6);  /* Yeşil odak ışığı */
}

/* Sepete Ekle Butonunda Tıklanmış Efekti */
.sepete-ekle-btn:active {
    transform: translateY(2px);  /* Tıklanırken aşağı kaydır */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);  /* Tıklanmış gölge */
}


@media (max-width: 480px) {
    .urun-modal-icerik {
        padding: 15px;
    }

    .modal-sag h3 {
        font-size: 20px;
    }

    .modal-sag p {
        font-size: 14px;
    }

    .product-card h2 {
        font-size: 16px;
    }

    .product-card .product-price {
        font-size: 14px;
    }

    .add-to-cart-btn {
        padding: 8px 16px;
        font-size: 14px;
    }

    .search-result-card img {
        max-height: 100px;
    }

    .search-bar input {
        font-size: 14px;
        padding: 8px 12px;
    }

    .search-bar button {
        font-size: 14px;
        padding: 8px 12px;
    }
}

</style>
</head>
<body>

<?php echo view('header'); ?>

<section class="search-bar">
    <input type="text" id="searchInput" placeholder="Aramak istediğiniz ürünü yazın..." oninput="toggleClearButton()">
    <button onclick="performSearch()">
        <i class="fa fa-search"></i> Ara
    </button>
    <span class="clear-btn" id="clearBtn" onclick="clearSearch()">×</span>
</section>

<!-- Arama Sonuçları -->
<section class="search-results-container" id="searchResults"></section>

<!-- Modal (Ürün Detayı) -->
<div class="product-modal" id="productModal">
    <div class="product-modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <div class="modal-left">
            <img id="modalImage" src="" alt="Ürün Resmi">
        </div>
        <div class="modal-right">
            <h3 id="modalTitle"></h3>
            <p id="modalPrice"></p>
            <div class="sizes">
                <label for="size">Beden:</label>
                <select id="size" name="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
            </div>
            <button class="btn-danger" onclick="window.location.href='<?= base_url('hesap'); ?>'">Sepete Ekle</button>
        </div>
    </div>
</div>

<script>
    const items = [
        { name: "Galatasaray Deplasman Forması", image: "images/gs_away_2024.png", price: "5.000 TL" },
        { name: "Galatasaray 100. Yıl Forması", image: "images/gs_100.jpeg", price: "5.000 TL" },
        { name: "Galatasaray İç Saha Forması", image: "images/gs_home_2024.png", price: "7.000 TL" },
        { name: "Galatasaray Üçüncü Forma", image: "images/gs_third_2024.png", price: "6.000 TL" },
        { name: "Nike Mercurial Krampon", image: "images/nike_mercurial_9.png", price: "1.500 TL" },
        { name: "Adidas Predator Krampon", image: "images/adidas_predator.png", price: "1.200 TL" },
        { name: "Nike Tiempo Krampon", image: "images/nike_tiempo.png", price: "1.350 TL" },
        { name: "Puma Ultra Krampon", image: "images/puma_ultra.png", price: "1.450 TL" },
    ];

    // Arama fonksiyonu
    function performSearch() {
        const query = document.getElementById("searchInput").value.toLowerCase();
        const resultsContainer = document.getElementById("searchResults");
        resultsContainer.innerHTML = ""; // Önceki sonuçları temizle

        if (query) {
            const filteredItems = items.filter(item => item.name.toLowerCase().includes(query));
            filteredItems.forEach(item => {
                const productCard = document.createElement("div");
                productCard.classList.add("search-result-card");
                productCard.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" onclick="openModal('${item.name}', '${item.image}', '${item.price}')">
                    <span>${item.name}</span>
                    <p>${item.price}</p>
                `;
                resultsContainer.appendChild(productCard);
            });
        }
    }

    // Modal açma
    function openModal(name, image, price) {
        document.getElementById("modalTitle").innerText = name;
        document.getElementById("modalImage").src = image;
        document.getElementById("modalPrice").innerText = price;
        document.getElementById("productModal").style.display = "block";
    }

    // Modal kapama
    function closeModal() {
        document.getElementById("productModal").style.display = "none";
    }

    // Arama kutusundaki temizleme butonu
    function toggleClearButton() {
        const searchInput = document.getElementById("searchInput");
        const clearBtn = document.getElementById("clearBtn");
        if (searchInput.value) {
            clearBtn.style.display = "block";
        } else {
            clearBtn.style.display = "none";
        }
    }

    // Arama kutusunu temizleme
    function clearSearch() {
        document.getElementById("searchInput").value = "";
        document.getElementById("clearBtn").style.display = "none";
        performSearch(); // Yeniden arama yaparak sonuçları sıfırla
    }
</script>
<h1 class="urun">ÜRÜNLERİMİZ</h1>
<?php if (!empty($products)): ?>
<section class="product-list">
    <?php foreach ($products as $product): ?>
    <div class="product-card">
        <img src="<?php echo base_url('uploads/' . $product['product_image']); ?>" alt="<?php echo $product['product_name']; ?>">
        <h2><?php echo $product['product_name']; ?></h2>
        <p class="product-price"><?php echo $product['product_price']; ?> ₺</p>
        <!-- Ürün Detay Butonu -->
        <button class="urun-detay-btn" onclick="urunDetaylariniGoster('<?php echo $product['_id']; ?>', '<?php echo addslashes($product['product_name']); ?>', '<?php echo base_url('uploads/' . $product['product_image']); ?>', '<?php echo addslashes($product['product_price']); ?>', '<?php echo addslashes($product['product_description'] ?? 'Açıklama mevcut değil.'); ?>', event)">Ürün Detay</button>
    </div>

    <!-- Modal (Her Ürün İçin) -->
<!-- Modal (Her Ürün İçin) -->
<div class="urun-modal" id="urunModal-<?php echo $product['_id']; ?>" style="display:none;">
    <div class="urun-modal-icerik">
        <span class="kapat-btn" onclick="kapatModal('<?php echo $product['_id']; ?>')">&times;</span>
        <div class="modal-sol">
            <img id="modalResim-<?php echo $product['_id']; ?>" src="" alt="Ürün Resmi">
        </div>
        <div class="modal-sag">
            <h3 id="modalBaslik-<?php echo $product['_id']; ?>"></h3>
            <p id="modalFiyat-<?php echo $product['_id']; ?>"></p>
            <p><strong>Ürün Detayı</strong></p>
            <p id="modalAciklama-<?php echo $product['_id']; ?>"></p>
            <!-- Sepete Ekle Butonu -->
            <button class="sepete-ekle-btn" onclick="sepeteEkle('<?php echo base_url('hesap'); ?>', '<?php echo $product['_id']; ?>')">Sepete Ekle</button>
        </div>
    </div>
</div>

    <?php endforeach; ?>
</section>
<?php else: ?>
<p class="no-products">Henüz ürün eklenmemiş.</p>
<?php endif; ?>


<script>
// Ürün verilerini MongoDB'den gelen verilere göre dinamik olarak güncellemek için
// Bu örnekte hardcoded değerler kullanıyoruz. Gerçek veriler MongoDB'den gelir.

function urunDetaylariniGoster(id, urunAdi, urunResim, urunFiyat, urunAciklama, event) {
    event.preventDefault(); // Sayfanın üst kısmına kaymasını engeller.

    // Modal id'sini dinamik oluşturuyoruz
    const modalId = 'urunModal-' + id;
    const resimId = 'modalResim-' + id;
    const baslikId = 'modalBaslik-' + id;
    const fiyatId = 'modalFiyat-' + id;
    const aciklamaId = 'modalAciklama-' + id;

    // Modal içeriğini güncelleme
    document.getElementById(resimId).src = urunResim;
    document.getElementById(baslikId).textContent = urunAdi;
    document.getElementById(fiyatId).textContent = urunFiyat;
    document.getElementById(aciklamaId).textContent = urunAciklama;

    // Modal'ı gösterme
    document.getElementById(modalId).style.display = 'block';
}

// Modal'ı Kapatma
function kapatModal(productId) {
    // Modal id'sini dinamik olarak oluşturuyoruz
    const modalId = 'urunModal-' + productId;
    const modalElement = document.getElementById(modalId);

    if (modalElement) {
        modalElement.style.display = 'none';  // Modal'ı gizle
    } else {
        console.error("Modal bulunamadı: " + modalId);
    }
}

// Sepete Ekleme Fonksiyonu
function sepeteEkle(baseUrl, productId) {

    
    // Kullanıcıyı sepete yönlendirme
    window.location.href = baseUrl + '?product_id=' + productId;  // Sepet sayfasına git
}
</script>


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
</div>
   <!-- Footer -->
   <?php echo view('footer'); ?>
</body>
</html> 
</body>
</html>
