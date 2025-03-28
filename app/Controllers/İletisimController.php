<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class İletisimController extends Controller
{
    public function index()
    {
        // iletisim sayfasını görüntülemek için view yükleme
        return view('iletisim'); // 'iletisim' adındaki görünümü yükle
    }
}
