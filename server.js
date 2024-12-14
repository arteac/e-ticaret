const express = require('express');
const path = require('path');
const { MongoClient, ObjectId } = require('mongodb');
const bodyParser = require('body-parser');
const multer = require('multer');
const fs = require('fs');

const app = express();
const port = 3000;

// MongoDB URI
const uri = "mongodb+srv://abdullaholuc37:eticaretsitesi@cluster0.yzsph.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0";

// MongoDB veritabanı ve koleksiyon adı
const databaseName = 'ecommerce';
const collectionName = 'products';

// Statik dosyaları sunmak için
app.use(express.static(path.join(__dirname, 'public')));

// JSON verisi alabilmek için middleware
app.use(bodyParser.json());

// Multer ile dosya yükleme yapılandırması
const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    // Yüklenen dosyaların kaydedileceği dizin
    const uploadDir = path.join(__dirname, 'uploads');
    if (!fs.existsSync(uploadDir)) {
      fs.mkdirSync(uploadDir);
    }
    cb(null, uploadDir);
  },
  filename: function (req, file, cb) {
    // Dosya adını değiştirmemek için orijinal adı kullanıyoruz
    const filename = file.originalname; // Orijinal dosya adı ve uzantısı
    cb(null, filename); // Orijinal dosya adı (uzantı ile birlikte)
  }
});

const upload = multer({ storage: storage });

// Ana sayfayı render et
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// API endpoint: Ürünleri al
app.get('/api/products', async (req, res) => {
  const client = new MongoClient(uri);

  try {
    // MongoDB'ye bağlan
    await client.connect();

    // Veritabanına erişim
    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    // 'products' koleksiyonundaki tüm verileri al
    const products = await collection.find().toArray();

    // JSON formatında ürünleri geri gönder
    res.json(products);
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    // Bağlantıyı kapat
    await client.close();
  }
});

// API endpoint: Ürün ekle
app.post('/api/products', upload.single('product_image'), async (req, res) => {
  const client = new MongoClient(uri);
  const { product_name, product_price } = req.body; // Formdan gelen veriler
  const product_image = req.file ? req.file.filename : null; // Yalnızca dosya adı (uzantı ile birlikte)

  try {
    // MongoDB'ye bağlan
    await client.connect();

    // Veritabanına erişim
    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    // Yeni ürün verisini ekle
    const result = await collection.insertOne({
      product_name,
      product_price,
      product_image
    });

    // Ürün başarıyla eklendiyse, eklenen ürünü döndür
    res.status(201).json(result);
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    // Bağlantıyı kapat
    await client.close();
  }
});

// API endpoint: Ürün sil
app.delete('/api/products/:id', async (req, res) => {
  const client = new MongoClient(uri);
  const productId = req.params.id; // Silinmek istenen ürünün ID'si

  try {
    // MongoDB'ye bağlan
    await client.connect();

    // Veritabanına erişim
    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    // Ürünü ID'ye göre sil
    const result = await collection.deleteOne({ _id: new ObjectId(productId) });

    if (result.deletedCount === 1) {
      res.status(200).send('Ürün başarıyla silindi.');
    } else {
      res.status(404).send('Ürün bulunamadı.');
    }
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    // Bağlantıyı kapat
    await client.close();
  }
});

// Sunucuyu başlat
app.listen(port, () => {
  console.log(`Sunucu http://localhost:${port} adresinde çalışıyor`);
});
