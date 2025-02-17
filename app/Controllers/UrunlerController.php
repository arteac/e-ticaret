<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UrunlerController extends Controller
{
    // Ürünler sayfası fonksiyonu
    public function index()
    {
        return view('urunler'); // 'urunler' adlı view dosyasını gösterecek
    }
}
?>