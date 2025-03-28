<?php

namespace App\Controllers;

use MongoDB\Client;

class AdminPanel extends BaseController
{
    private $uri = "mongodb+srv://abdullaholuc37:eticaretsitesi@cluster0.yzsph.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0";
    private $databaseName = "ecommerce";
    private $collectionName = "products";

    // MongoDB'ye bağlanma fonksiyonu
    private function getMongoClient()
    {
        return new Client($this->uri);
    }

    // Admin paneli için ana metod
    public function mongoAdminPanel()
    {
        try {
            // MongoDB'ye bağlan
            $client = $this->getMongoClient();
            $database = $client->selectDatabase($this->databaseName);
            $collection = $database->selectCollection($this->collectionName);

            // Ürünleri MongoDB'den al
            $products = $collection->find()->toArray();

            // Admin paneli view dosyasına veri gönder
            return view('mongo_adminpanel', ['products' => $products]);

        } catch (\Exception $e) {
            return redirect()->to(site_url('admin-panel'))->with('error', 'MongoDB bağlantısı hatalı: ' . $e->getMessage());
        }
    }

    // Ürün ekleme fonksiyonu
    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product_name = $this->request->getPost('product_name');
            $product_price = $this->request->getPost('product_price');
            $product_image = null;

            // Resim dosyasını yükleme işlemi (opsiyonel)
            if ($this->request->getFile('product_image')->isValid()) {
                $product_image = $this->request->getFile('product_image')->getName();
                $this->request->getFile('product_image')->move('uploads/');
            }

            try {
                // MongoDB'ye bağlan
                $client = $this->getMongoClient();
                $database = $client->selectDatabase($this->databaseName);
                $collection = $database->selectCollection($this->collectionName);

                // Yeni ürün verisini MongoDB'ye ekle
                $result = $collection->insertOne([
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_image' => $product_image,
                ]);

                if ($result->getInsertedCount() > 0) {
                    return redirect()->to(site_url('admin-panel'))->with('success', 'Yeni ürün başarıyla eklendi.');
                } else {
                    return redirect()->to(site_url('admin-panel'))->with('error', 'Ürün eklenemedi.');
                }
            } catch (\Exception $e) {
                return redirect()->to(site_url('admin-panel'))->with('error', 'MongoDB bağlantısı hatalı: ' . $e->getMessage());
            }
        } else {
            // Ürün ekleme formunu render et
            return view('mongo_adminpanel');
        }
    }

    // Ürün silme fonksiyonu
    public function deleteProduct()
    {
        $product_name = $this->request->getPost('product_name');
        
        try {
            $client = $this->getMongoClient();
            $database = $client->selectDatabase($this->databaseName);
            $collection = $database->selectCollection($this->collectionName);
    
            // 'product_name' ile eşleşen ürünü sil
            $result = $collection->deleteOne(['product_name' => $product_name]);
    
            if ($result->getDeletedCount() > 0) {
                return redirect()->to(site_url('admin-panel'))->with('success', 'Ürün başarıyla silindi.');
            } else {
                return redirect()->to(site_url('admin-panel'))->with('error', 'Ürün bulunamadı veya silinemedi.');
            }
        } catch (\Exception $e) {
            echo 'MongoDB bağlantısı hatalı: ' . $e->getMessage();
        }
    }

    // Ürün güncelleme fonksiyonu
    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Formdan gelen verileri alıyoruz
            $product_name = $this->request->getPost('product_name');
            $new_product_name = $this->request->getPost('new_product_name'); // Yeni ürün adı
            $new_product_price = $this->request->getPost('product_price');
            $productImage = $this->request->getFile('product_image');
            $new_product_image = null;
    
            try {
                // Eğer yeni bir resim yüklenmişse
                if ($productImage && $productImage->isValid()) {
                    // Dosyanın adı rastgele bir isimle oluşturuluyor
                    $imageName = $productImage->getRandomName();
                    
                    // Resmi varsayılan 'public/uploads' dizinine taşıyoruz
                    if ($productImage->move(FCPATH . 'uploads', $imageName)) {
                        // Resmin adı veritabanına ekleniyor
                        $new_product_image = $imageName;
                    } else {
                        // Eğer yükleme başarısızsa
                        return redirect()->to(site_url('admin-panel'))->with('error', 'Resim yüklenemedi!');
                    }
                }
    
                // MongoDB bağlantısını yap
                $client = $this->getMongoClient();
                $database = $client->selectDatabase($this->databaseName);
                $collection = $database->selectCollection($this->collectionName);
    
                // Güncellenecek veri
                $updateData = ['product_price' => $new_product_price];
                
                // Yeni ürün adı varsa, onu da ekliyoruz
                if ($new_product_name) {
                    $updateData['product_name'] = $new_product_name;
                }
                
                // Eğer yeni bir resim yüklenmişse
                if ($new_product_image) {
                    $updateData['product_image'] = $new_product_image;
                }
    
                // 'product_name' ile eşleşen ürünü güncelle
                $result = $collection->updateOne(
                    ['product_name' => $product_name], // Eski ürün adıyla arama yapıyoruz
                    ['$set' => $updateData] // Yeni verilerle güncelleniyor
                );
    
                // Güncelleme sonucu kontrolü
                if ($result->getModifiedCount() > 0) {
                    return redirect()->to(site_url('admin-panel'))->with('success', 'Ürün başarıyla güncellendi.');
                } else {
                    return redirect()->to(site_url('admin-panel'))->with('error', 'Ürün güncellenemedi.');
                }
            } catch (\Exception $e) {
                return redirect()->to(site_url('admin-panel'))->with('error', 'MongoDB bağlantısı hatalı: ' . $e->getMessage());
            }
        } else {
            return view('mongo_adminpanel');
        }
    }
    
    
}
