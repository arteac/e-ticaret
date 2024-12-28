# Node.js Backend Uygulaması

Bu proje, Node.js kullanarak MongoDB Atlas veritabanı ile etkileşimde bulunan bir backend uygulamasıdır. Proje kapsamında ürün ekleme, listeleme, güncelleme ve silme işlemleri yapılabilir. Başlangıç olarak ürün ekleme işlemi gerçekleştirilmiştir ve ilerleyen süreçte haftalık olarak diğer CRUD işlemleri geliştirilecektir.

## Özellikler

### 1. **Ürün Ekleme**
- Kullanıcı, ürün adı, fiyatı ve resmini girerek yeni bir ürün ekleyebilir.
- Ürün başarıyla eklendiğinde, bir **JavaScript alert mesajı** ile bilgi verilir: `"Ürün başarıyla eklendi!"`.
- Ekleme işlemi MongoDB Atlas veritabanına yapılır ve sayfa yenilenerek yeni ürün listede görüntülenir.

### 2. **Ürün Listeleme**
- MongoDB Atlas veritabanından alınan ürünler, sayfada isim, fiyat ve resim bilgileri ile birlikte listelenir.

### 3. **Ürün Güncelleme**
- Kullanıcı, listelenen ürünlerin yanında bulunan "Düzenle" butonunu kullanarak ürün adını, fiyatını veya resmini güncelleyebilir.
- Güncellenen ürün MongoDB Atlas veritabanına kaydedilir ve sayfada yenilenmiş haliyle gösterilir.

### 4. **Ürün Silme**
- Kullanıcı, listelenen ürünlerin yanında bulunan "Sil" butonunu kullanarak ürünleri silebilir.
- Silinen ürün MongoDB Atlas veritabanından kaldırılır ve liste güncellenir.

---

## Kullanılan Teknolojiler

- **Node.js**: Backend uygulaması geliştirmek için kullanılmıştır.
- **Express.js**: HTTP sunucusu ve API endpointlerini oluşturmak için kullanılmıştır.
- **MongoDB Atlas**: Veritabanı olarak kullanılır.
- **Mongoose**: MongoDB ile etkileşim kurmak için kullanılmıştır.
- **HTML, CSS ve JavaScript**: Ön yüz tasarımı ve kullanıcı etkileşimleri için kullanılmıştır.

---

## İşleyiş Adımları

### **Backend İşlemleri**
1. **Ürün Ekleme**
   - Kullanıcıdan alınan ürün adı, fiyatı ve resim bilgileri POST isteği ile backend'e gönderilir.
   - Backend, bu bilgileri alarak MongoDB Atlas veritabanına kaydeder.
   - İşlem başarıyla tamamlandığında bir yanıt döner ve frontend kullanıcıya mesaj gösterir.

2. **Ürün Listeleme**
   - Frontend, backend'e bir GET isteği gönderir.
   - Backend, MongoDB Atlas veritabanından ürünleri alarak JSON formatında frontend'e döner.

3. **Ürün Güncelleme**
   - Kullanıcı, güncellemek istediği ürün için frontend üzerinden yeni bilgileri doldurur.
   - Bu bilgiler PUT isteği ile backend'e gönderilir.
   - Backend, MongoDB'deki ilgili ürün kaydını günceller ve işlem başarıyla tamamlandığında bir yanıt döner.

4. **Ürün Silme**
   - Kullanıcı, silmek istediği ürün için "Sil" butonuna tıkladığında, ilgili ürün ismi backend'e DELETE isteği ile gönderilir.
   - Backend, MongoDB Atlas veritabanından ilgili ürünü siler ve işlem tamamlandığında frontend'e bilgi döner.

---

1. **Proje Dosyalarını İndirme**
   ```bash
   git clone https://github.com/arteac/e-ticaret.git
   cd e-ticaret
