<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';  // Tablo adı
    protected $primaryKey = 'id'; // Birincil anahtar
    protected $allowedFields = ['name', 'address', 'phone', 'total_price', 'created_at'];  // İzin verilen alanlar

    // Tarih alanı otomatik olarak eklenebilir
    protected $useTimestamps = true;

    public function createOrder($data)
    {
        return $this->insert($data);  // Veriyi tabloya ekler
    }
}
