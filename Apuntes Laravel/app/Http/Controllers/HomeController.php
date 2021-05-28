<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('homeLaravel');
    }

    /**
     * Vista del "home" de Jetstream
     */
    public function homeJetstream() {
        return view('homeJetstream');
    }
}
