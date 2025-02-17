<?php

namespace App\Models;

use MongoDB\Client as MongoClient;

class MongoModel
{
    protected $db; // MongoDB veritabanı bağlantısı

    public function __construct()
    {
        // MongoDB bağlantısı
        $this->db = new MongoClient('mongodb+srv://abdullaholuc37:eticaretsitesi@cluster0.yzsph.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0');
    }

    // Koleksiyonu seçmek (ecommerce veritabanındaki 'products' koleksiyonu)
    private function getCollection()
    {
        // Veritabanı adı 'ecommerce' ve koleksiyon adı 'products'
        return $this->db->ecommerce->selectCollection('products');
    }

    // Tüm ürünleri almak
    public function listAllProducts()
    {
        $collection = $this->getCollection();
        $cursor = $collection->find();  // Tüm ürünleri çek
        return iterator_to_array($cursor); // Array'e dönüştür
    }

    // Ürün adı ile tek bir ürünü almak
    public function getProductByName($productName)
    {
        $collection = $this->getCollection();
        return $collection->findOne(['product_name' => $productName]); // Tek ürün
    }

    // Tek bir veri ekleme
    public function insertDocument($data)
    {
        $collection = $this->getCollection();
        return $collection->insertOne($data); // Tek veri ekle
    }

    // Çoklu veri ekleme
    public function insertManyDocuments($data)
    {
        $collection = $this->getCollection();
        return $collection->insertMany($data); // Birden fazla veri ekle
    }

    // Ürün adı ile tek bir ürünü güncelleme
    public function updateProductByName($productName, $newData)
    {
        $collection = $this->getCollection();
        return $collection->updateOne(
            ['product_name' => $productName],  // Arama kriteri
            ['$set' => $newData]  // Güncellenen veri
        );
    }

    // Veri silme
    public function deleteDocument($productName)
    {
        $collection = $this->getCollection();
        return $collection->deleteOne(['product_name' => $productName]);  // Tek ürün sil
    }

    // Çoklu veri silme
    public function deleteManyDocuments($productNames)
    {
        $collection = $this->getCollection();
        return $collection->deleteMany(['product_name' => ['$in' => $productNames]]); // Birden fazla ürün sil
    }

    // Koleksiyondaki toplam veri sayısını getirme
    public function countDocuments()
    {
        $collection = $this->getCollection();
        return $collection->countDocuments();  // Belirtilen koleksiyondaki toplam belge sayısını döner
    }
}
