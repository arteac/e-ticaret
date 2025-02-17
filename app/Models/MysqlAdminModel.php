<?php
namespace App\Models;

use CodeIgniter\Model;

class MysqlAdminModel extends Model
{
    // Varsayılan tablo adı ve diğer ayarlar
    protected $table = 'user'; // 'user' tablosu için
    protected $primaryKey = 'id'; // Birincil anahtar
    protected $allowedFields = ['name', 'email']; // Geçerli alanlar

    // Kullanıcıları getirme
    public function getUsers()
    {
        return $this->findAll(); // Tüm kullanıcıları getir
    }

    // İletişim mesajlarını getirme
    public function getContactMessages()
    {
        return $this->db->table('contact_messages')->get()->getResultArray(); // İletişim mesajlarını getir
    }

    // Ürünleri getirme
    public function getProducts()
    {
        return $this->db->table('product')->get()->getResultArray(); // 'product' tablosundaki tüm ürünleri getir
    }

    // Ürün ekleme işlemi
    public function addProduct($data)
    {
        return $this->db->table('product')->insert($data); // 'product' tablosuna yeni ürün ekler
    }

    // Ürün güncelleme işlemi
    public function updateProduct($id, $data)
    {
        return $this->db->table('product')->update($data, ['id' => $id]); // Ürünü günceller
    }

    // Ürün silme işlemi
    public function deleteProduct($id)
    {
        return $this->db->table('product')->delete(['id' => $id]); // Ürünü siler
    }

    // Ürün bulma işlemi
    public function findProduct($id)
    {
        return $this->db->table('product')->where('id', $id)->get()->getRowArray(); // ID'ye göre ürünü bulur
    }
}
?>
