<?php

namespace App\Controllers;

use App\Models\MongoModel;

class Home extends BaseController
{
    public function index()
    {
        // MongoModel'den veri al
        $mongoModel = new MongoModel();

        // Ürünleri listele
        $products = $mongoModel->listAllProducts();

        // View'e veri gönder
        return view('homepage', ['products' => $products]);
    }
    public function hakkimizda()
    {
        // Hakkımızda sayfasını yükle
        return view('hakkimizda');
    }
}
