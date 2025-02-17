<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminUserModel extends Model
{
    protected $table = 'admin_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    // Kullanıcıyı username ile veritabanından almak
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    // Kullanıcıyı username veya email ile almak
    public function getUserByUsernameOrEmail($usernameOrEmail)
    {
        return $this->where('username', $usernameOrEmail)
                    ->orWhere('email', $usernameOrEmail)
                    ->first();
    }

    // Şifreyi doğrulamak
    public function verifyPassword($password, $hashedPassword)
    {
        return password_verify($password, $hashedPassword);
    }
    
    // Kullanıcıyı kaydetmek
    public function saveUser($data)
    {
        // Kullanıcı adı ve e-posta kontrolü
        $existingUser = $this->where('username', $data['username'])->first();
        $existingEmail = $this->where('email', $data['email'])->first();

        if ($existingUser || $existingEmail) {
            return false; // Eğer kullanıcı adı veya e-posta mevcutsa, false döndür
        }

        // Şifreyi hash'leyerek kaydet
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Veritabanına yeni kullanıcıyı ekle
        return $this->insert($data);
    }
}
