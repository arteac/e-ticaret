<?php
namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function send_message()
    {
        // $_POST ile form verilerini al
        $name = $_POST['name'] ?? '';  // Post ile gelen 'name' değeri
        $email = $_POST['email'] ?? '';  // Post ile gelen 'email' değeri
        $message = $_POST['message'] ?? '';  // Post ile gelen 'message' değeri

        // Basit doğrulama: Alanlar boş olamaz
        if (empty($name) || empty($email) || empty($message)) {
            return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Tüm alanlar zorunludur.']);
        }

        // E-posta doğrulaması
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Geçersiz e-posta formatı.']);
        }

        // Modeli yükle
        $contactModel = new ContactModel();

        // Veritabanına kaydedilecek veri
        $data = [
            'name'      => $name,
            'email'     => $email,
            'message'   => $message,
            'created_at' => date('Y-m-d H:i:s')  // Şu anki zaman
        ];

        // Veritabanına ekleme işlemi
        if ($contactModel->insert($data)) {
            // Başarılı ekleme
            return $this->response->setStatusCode(200)->setJSON(['status' => 'success', 'message' => 'Mesajınız başarıyla gönderildi!']);
        } else {
            // Ekleme başarısız
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => 'Mesaj gönderilirken bir hata oluştu.']);
        }
    }
}
