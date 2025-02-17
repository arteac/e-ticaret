<?php
namespace App\Controllers;

use App\Models\AdminUserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    protected $adminUserModel;
    protected $validation;

    public function __construct()
    {
        $this->adminUserModel = new AdminUserModel();
        $this->validation = \Config\Services::validation();
    }

    // Admin Giriş işlemi
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $_POST süper globalini kullanarak verileri almak ve temizlemek
            $username = isset($_POST['username']) ? trim($_POST['username']) : null;
            $password = isset($_POST['password']) ? trim($_POST['password']) : null;
            
            // Giriş verilerini doğrulama
            $this->validation->setRules([
                'username' => 'required|min_length[3]|max_length[255]',
                'password' => 'required|min_length[6]'
            ]);
            
            // Eğer validasyon başarısızsa, hata mesajı göster ve geri dön
            if (!$this->validation->withRequest($this->request)->run()) {
                session()->setFlashdata('error', 'Please fill in all fields correctly.');
                return redirect()->back()->withInput();
            }

            // Kullanıcıyı veritabanından alıyoruz
            $user = $this->adminUserModel->getUserByUsernameOrEmail($username);

            // Kullanıcı varsa, şifreyi kontrol ediyoruz
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    // Kullanıcı bilgilerini session'a kaydediyoruz
                    session()->set('user_id', $user['id']);
                    session()->set('username', $user['username']);
                    
                    // Başarılı giriş sonrası admin sayfasına yönlendirme
                    return redirect()->to(base_url('/mysqladmin/admin'));
                } else {
                    session()->setFlashdata('error', 'Invalid password');
                }
            } else {
                session()->setFlashdata('error', 'User not found');
            }
        }

        // Views klasöründe login_register.php dosyasını görüntüle
        return view('login_register');
    }

    // Admin Kayıt işlemi
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $_POST süper globalini kullanarak verileri almak
            $username = isset($_POST['username']) ? trim($_POST['username']) : null;  // username kontrolü
            $email = isset($_POST['email']) ? trim($_POST['email']) : null;            // email kontrolü
            $password = isset($_POST['password']) ? $_POST['password'] : null;    // password kontrolü
            
            // Username, email, and password kontrolü
            if (empty($username) || empty($email) || empty($password)) {
                session()->setFlashdata('error', 'Please fill in all fields.');
                return redirect()->back()->withInput();
            }
    
            // Kullanıcı adının zaten var olup olmadığını kontrol ediyoruz
            $existingUser = $this->adminUserModel->where('username', $username)->first();
            if ($existingUser) {
                session()->setFlashdata('error', 'This username is already taken.');
                return redirect()->back()->withInput();
            }
    
            // E-posta adresinin zaten var olup olmadığını kontrol ediyoruz
            $existingEmail = $this->adminUserModel->where('email', $email)->first();
            if ($existingEmail) {
                session()->setFlashdata('error', 'This email is already registered.');
                return redirect()->back()->withInput();
            }
        
            // Kullanıcıyı kaydetmeye çalışıyoruz
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];
        
            // Kullanıcıyı veritabanına kaydet
            $result = $this->adminUserModel->save($data);
            
            if ($result) {
                session()->setFlashdata('success', 'Registration successful.');
                return redirect()->to('/auth/login');
            } else {
                session()->setFlashdata('error', 'Registration failed. Please check the provided information.');
            }
        }
        
        // Views klasöründe login_register.php dosyasını görüntüle
        return view('login_register');
    }

    // Admin Çıkış işlemi
    public function logout()
    {
        // Oturumu sonlandır
        session()->destroy();

        // Cookie'yi temizle (remember me)
        response()->deleteCookie('remember_me');

        // Giriş sayfasına yönlendir
        return redirect()->to(base_url('/login_register'));
    }
    public function login_register()
    {
        // POST isteği ile form verilerini al
        if ($this->request->getMethod() === 'post') {
            // Burada giriş işlemi veya kayıt işlemi yapılabilir.
            // Örneğin kullanıcı adı ve şifre doğrulama yapılabilir.

            // Başarılı giriş sonrası admin paneline yönlendirme yapılabilir:
            return redirect()->to(base_url('/dashboard')); // Örneğin dashboard sayfasına yönlendir
        }

        // GET isteği olduğunda login_register sayfasını görüntüle
        return view('login_register');
    }
}
