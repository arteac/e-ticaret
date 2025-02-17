<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;  // Modeli dahil et

class SepetController extends Controller
{
    public function index()
    {
        $model = new ProductModel();  // Model nesnesi oluştur
        $products = $model->findAll();  // Veritabanından tüm ürünleri al
        
        return view('sepet/index', ['products' => $products]);  // Verileri view'a gönder
    }
}

?>