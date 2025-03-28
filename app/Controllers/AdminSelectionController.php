<?php
// app/Controllers/AdminSelectionController.php

namespace App\Controllers;

class AdminSelectionController extends BaseController
{
    public function index()
    {
        return view('admin_selection'); // admin_selection.php adında view dosyasını render eder
    }
}

?>