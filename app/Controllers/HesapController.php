<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HesapController extends Controller
{
    public function index()
    {
        // Kullanıcı hesabı sayfası için view yükleme
        return view('hesap'); // Hesap sayfasını 'hesap.php' olarak oluşturacağız
    }
}
?>