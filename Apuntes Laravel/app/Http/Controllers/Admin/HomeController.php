<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Vista principal del Panel de Administración
     */
    public function home() {
        return view('admin.home');
    }
}
