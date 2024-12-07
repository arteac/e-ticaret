# Node.js Backend Uygulaması

Bu proje, Node.js kullanarak MongoDB Atlas veritabanı ile etkileşimde bulunan bir backend uygulamasıdır. Başlangıç olarak, ürün ekleme işlemi gerçekleştirilecek olup, ilerleyen dönemlerde diğer CRUD işlemleri (Create, Read, Update, Delete) haftalık olarak yapılacaktır. Uygulama, ürünlerin MongoDB Atlas'a eklenmesini ve sayfa üzerinde görüntülenmesini sağlar.

## Teknolojiler
- **Node.js**: Backend uygulama geliştirmek için kullanılmıştır.
- **MongoDB Atlas**: Veritabanı olarak kullanılır.
- **JavaScript**: Kullanıcı etkileşimleri ve alert mesajları için kullanılır.

## Proje Özeti

Bu projede, aşağıdaki temel işlemler yapılmaktadır:
- **Ürün Ekleme**: Kullanıcı, ürün adı, fiyatı ve resmini girerek yeni ürün ekler.
- **Ürün Listeleme**: Ekleme işlemi tamamlandıktan sonra, MongoDB Atlas'a kaydedilen ürünler sayfa üzerinde görüntülenir.

## Akış

1. **Ürün Ekleme**:
   - Ürün adı, fiyatı ve resmi girildikten sonra "Ürün Ekle" butonuna basılır.
   - Ürün başarıyla eklendikten sonra, kullanıcıya JavaScript alert mesajı gösterilir: "Ürün başarıyla eklendi!"
   - Sayfa yenilenir ve MongoDB Atlas'a eklenmiş olan ürün sayfada görünür.

2. **MongoDB Atlas'a Veri Ekleme**:
   - Ürünler MongoDB Atlas üzerindeki **Collection**'a eklenir. Bu işlem, backend tarafında bir API çağrısı ile yapılmaktadır.

## İşleyiş Adımları

1. **Ürün Ekleme Formu**:
   - Ürün adı (`product_name`), ürün fiyatı (`product_price`) ve ürün resmi (`product_image`) bilgileri girilir.
   - Formdan sonra, bu bilgiler **MongoDB Atlas**'a gönderilir ve kaydedilir.

2. **JavaScript Alert Mesajı**:
   - Ürün başarıyla eklendikten sonra, kullanıcıya "Ürün başarıyla eklendi!" mesajı gösterilir.

3. **Sayfa Yenileme ve Ürün Görüntüleme**:
   - Sayfa yenilendikten sonra, MongoDB Atlas'tan yeni ürünler çekilir ve sayfada listelenir.

## Kullanım

1. **Proje Dosyalarını İndirme**:
   - Projeyi bilgisayarınıza indirip çalıştırabilirsiniz.
   
   ```bash
   git clone https://github.com/arteac/e-ticaret.git
