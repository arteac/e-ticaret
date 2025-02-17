<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function register()
    {
        // $_POST süper globali ile form verilerini al
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
    
        // UserModel'i yükle
        $userModel = new UserModel();
    
        // Aynı e-posta adresi var mı kontrol et
        $existingUser = $userModel->where('email', $email)->first();
    
        if ($existingUser) {
            // E-posta adresi zaten varsa hata mesajı göster
            return redirect()->back()->withInput()->with('email_error', 'Bu e-posta adresi kullanımda.');
        }
    
        // Şifreyi hash'le
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Kullanıcı verisi
        $userData = [
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword,
        ];
    
        // Kullanıcıyı veritabanına kaydet
        if ($userModel->insert($userData)) {
            // Başarılı kayıt sonrası giriş sayfasına yönlendir
            return redirect()->to(base_url('/hesap'))->with('register_success', 'Kayıt başarılı, alışverişe başlayabilirsiniz.');
        } else {
            // Hata durumu
            return redirect()->back()->with('error', 'Kayıt sırasında bir hata oluştu. Lütfen tekrar deneyin.');
        }
    }
    

    public function login()
    {
        // $_POST süper globali ile formdan gelen verileri al
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // UserModel'i yükle
        $userModel = new UserModel();
        
        // E-posta ile kullanıcıyı bul
        $user = $userModel->where('email', $email)->first();

        // Kullanıcı bulunduysa
        if ($user) {
            // Şifreyi kontrol et
            if (password_verify($password, $user['password'])) {
                // Oturum aç
                $session = session();
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'is_logged_in' => true,
                ]);
                // Sepet sayfasına yönlendir
                return redirect()->to(base_url('/cart'));
            } else {
                // Şifre yanlışsa hata mesajı
                session()->setFlashdata('login_error', 'E-posta adresi veya şifre hatalı.');
                return redirect()->to(base_url('hesap'));
            }
        } else {
            // Kullanıcı bulunamadıysa hata mesajı
            session()->setFlashdata('login_error', 'E-posta adresi bulunamadı.');
            return redirect()->to(base_url('hesap'));
        }
    }
}
