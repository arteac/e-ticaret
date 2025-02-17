<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class OrderController extends Controller
{
    // Sipariş başarı sayfası
    public function orderSuccess()
    {
        // Sipariş başarılıysa kullanıcıya başarı mesajı göstermek için view'ı yükleyin
        return view('order_success');
    }
}
