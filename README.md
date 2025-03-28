
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
=======
# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
>>>>>>> f2770ee (İlk commit)
