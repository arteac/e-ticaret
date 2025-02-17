<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact_messages';  // Veritabanı tablonuzun adı
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'message', 'created_at']; // Kullanıcı tarafından sağlanacak alanlar
    protected $useTimestamps = false;  // Eğer zaman damgası kullanmak isterseniz true yapabilirsiniz
}
