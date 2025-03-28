<?php
namespace App\Controllers;

use App\Models\MysqlAdminModel;
use CodeIgniter\Controller;

class MysqlAdminController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new MysqlAdminModel();

        // Oturum başlatma (CodeIgniter'ın kendi session hizmetini kullanıyoruz)
        if (!session()->has('user_id')) {
            // Kullanıcı giriş yapmamışsa login sayfasına yönlendir
            return redirect()->to(base_url('/auth/login'));
        }
    }

    public function index()
    {
        // Admin paneline yönlendir
        if (session()->has('user_id')) {
            $data['users'] = $this->model->getUsers();
            $data['messages'] = $this->model->getContactMessages();
            $data['products'] = $this->model->getProducts(); // Ürün verileri yüklendi

            return view('mysqladmin_dashboard', $data);
        }

        return redirect()->to(base_url('/auth/login'));
    }

    // Ürün güncelleme
    public function updateProduct($id)
    {
        // $_POST süper globali ile formdan gelen verileri al
        $product_name = $_POST['productName']; // Ürün adı
        $product_price = $_POST['productPrice']; // Ürün fiyatı
        $product_image = $_FILES['productImage']; // Ürün resmi

        // Güncellenmesi gereken veri setini oluştur
        $data = [
            'product_name' => $product_name,
            'product_price' => $product_price,
        ];

        // Resim varsa, resmi güncelle
        if ($product_image && $product_image['error'] == 0) {
            $imageName = uniqid() . '-' . $product_image['name']; // Benzersiz bir isim oluştur
            $targetPath = WRITEPATH . 'uploads/' . $imageName;

            // Resmi belirtilen dizine taşı
            if (move_uploaded_file($product_image['tmp_name'], $targetPath)) {
                $data['product_image'] = $imageName; // Veritabanına kaydedeceğimiz resim adını ekle
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Resim yüklenemedi.']);
            }
        }

        // Ürünü güncelle
        $this->model->updateProduct($id, $data);

        return $this->response->setJSON(['status' => 'success']);
    }

    // Ürün silme
    public function deleteProduct($id)
    {
        // Ürünü sil
        $this->model->deleteProduct($id);

        return $this->response->setJSON(['status' => 'success']);
    }

    // Çıkış işlemi
    public function logout()
    {
        session()->destroy();
        delete_cookie('remember_me');
        return redirect()->to(base_url('/auth/login'));
    }

    // Ürün ekleme
    public function addProduct()
    {
        // $_POST ve $_FILES süper globali ile formdan gelen verileri alıyoruz
        $product_name = $_POST['productName']; // Ürün adı
        $product_price = $_POST['productPrice']; // Ürün fiyatı
        $product_image = $_FILES['productImage']; // Ürün görseli

// Resim yükleme işlemi
$imageName = '';
if ($product_image && $product_image['error'] == 0) {
    // Benzersiz bir isim oluştur
    $imageName = uniqid() . '-' . $product_image['name'];
    $targetPath = FCPATH . 'images/' . $imageName;


    // Resmi belirtilen dizine taşı
    if (!move_uploaded_file($product_image['tmp_name'], $targetPath)) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Resim yüklenemedi.']);
    }
}

        // Ürün verilerini veritabanına eklemek için hazırlıyoruz
        $data = [
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $imageName,
        ];

        // Ürünü veritabanına ekle
        $this->model->addProduct($data);

        // Ürün ekleme başarılıysa admin paneline yönlendir
        return redirect()->to(base_url('mysqladmin_dashboard'));
    }
}
?>
