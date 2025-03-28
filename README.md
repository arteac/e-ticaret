# Forma & Krampon Satış Sitesi

Bu proje, **Node.js ve MongoAtlas** ile geliştirilmiş bir backend ve **CodeIgniter & MySQL** tabanlı bir admin paneline sahip bir e-ticaret sitesidir. Forma ve krampon satışı yapmaya odaklanmıştır.

## Proje Yapısı
- **Backend (Node.js & MongoAtlas)**: Kullanıcı girişi, ürün listeleme, sipariş işlemleri.
- **Admin Paneli (CodeIgniter & MySQL)**: Kullanıcı, sipariş ve ürün yönetimi.
- **Frontend (HTML, CSS, JavaScript)**: Kullanıcı dostu bir arayüz.

## Kullanılan Teknolojiler
- **Node.js** (Express.js, Mongoose)
- **MongoAtlas** (NoSQL veritabanı)
- **CodeIgniter 4** (PHP MVC Framework)
- **MySQL** (Admin paneli veritabanı)
- **HTML, CSS, JavaScript** (Frontend geliştirme)

## Kurulum

### 1. Backend (Node.js)
```sh
cd backend
npm install
node server.js
```

- **.env** dosyası oluşturun ve MongoDB Atlas bilgilerini ekleyin.

### 2. Admin Paneli (CodeIgniter)
```sh
cd admin-panel
composer install
php spark serve
```
- **.env** dosyası oluşturun ve MySQL bilgilerini ekleyin.

### 3. Frontend
- HTML, CSS ve JavaScript dosyaları statik olarak frontend klasöründe bulunur.

## API Endpoints (Node.js)
| Metot | Endpoint           | Açıklama          |
|-------|--------------------|------------------|
| GET   | /api/products      | Ürünleri getir  |
| POST  | /api/cart          | Sepete ekle     |
| GET   | /api/orders        | Siparişleri listele |
| POST  | /api/auth/register | Kullanıcı kayıt  |
| POST  | /api/auth/login    | Kullanıcı giriş  |

## Veritabanı Yapısı

### **MongoAtlas (Node.js)**
#### **Koleksiyonlar:**
- **users**: Kullanıcı bilgileri
- **products**: Ürün bilgileri
- **orders**: Sipariş kayıtları

### **MySQL (CodeIgniter Admin Paneli)**
#### **Tablolar:**
- **user** (`id`, `username`, `email`, `password`, `created_at`)
- **contact_messages** (`id`, `name`, `email`, `message`, `created_at`)
- **admin_user** (`id`, `username`, `email`, `password`, `created_at`)
--------------------------------------------------------------------------------
