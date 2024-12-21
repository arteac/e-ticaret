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

// Yüklenen dosyaları sunmak için uploads klasörünü statik olarak ekleyin
app.use('/uploads', express.static(path.join(__dirname, 'uploads')));

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
    await client.connect();

    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    const products = await collection.find().toArray();
    res.json(products);
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    await client.close();
  }
});

// API endpoint: Ürün ekle
app.post('/api/products', upload.single('product_image'), async (req, res) => {
  const client = new MongoClient(uri);
  const { product_name, product_price } = req.body; // Formdan gelen veriler
  const product_image = req.file ? req.file.filename : null; // Yalnızca dosya adı (uzantı ile birlikte)

  try {
    await client.connect();

    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    const result = await collection.insertOne({
      product_name,
      product_price,
      product_image
    });

    res.status(201).json(result);
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    await client.close();
  }
});

// API endpoint: Ürün sil
app.delete('/api/products/:id', async (req, res) => {
  const client = new MongoClient(uri);
  const productId = req.params.id;

  try {
    await client.connect();

    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

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
    await client.close();
  }
});

// API endpoint: Ürün güncelle
app.put('/api/products/:id', upload.single('product_image'), async (req, res) => {
  const client = new MongoClient(uri);
  const productId = req.params.id;
  const { product_name, product_price } = req.body;

  let product_image; // Ürün resminin yeni yolunu tutacak değişken

  try {
    await client.connect();

    const database = client.db(databaseName);
    const collection = database.collection(collectionName);

    // Ürün bilgilerini al
    const product = await collection.findOne({ _id: new ObjectId(productId) });

    if (!product) {
      return res.status(404).send('Ürün bulunamadı.');
    }

    // Eğer yeni bir resim yüklenmişse, yeni resmi kullan
    if (req.file) {
      product_image = req.file.filename;
    } else {
      // Yeni resim yüklenmediyse mevcut resmi kullan
      product_image = product.product_image;
    }

    // Ürün güncelleme
    const updateDoc = {
      $set: {
        product_name,
        product_price,
        product_image
      }
    };

    const result = await collection.updateOne({ _id: new ObjectId(productId) }, updateDoc);

    if (result.modifiedCount === 1) {
      res.status(200).send('Ürün başarıyla güncellendi.');
    } else {
      res.status(404).send('Ürün bulunamadı veya hiçbir değişiklik yapılmadı.');
    }
  } catch (error) {
    console.error('MongoDB bağlantısında bir hata oluştu:', error);
    res.status(500).send('Bir hata oluştu.');
  } finally {
    await client.close();
  }
});

// Sunucuyu başlat
app.listen(port, () => {
  console.log(`Sunucu http://localhost:${port} adresinde çalışıyor`);
});
