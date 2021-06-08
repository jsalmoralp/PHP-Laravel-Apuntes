<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Muestra una "view" directamente
     *
     * Vista de mi presentación, y mis trabajos
     */
    public function tarjetaPresentacion() {
        return view('personal.tarjetaPresentacion');
    }

    /**
     * Vista del "home" de Laravel
     */
    public function homeLaravel() {
        return view('framework.homeLaravel');
    }

    /**
     * Vista del "home" de Jetstream
     */
    public function homeJetstream() {
        return view('framework.homeJetstream');
    }
}
