<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function inicio() {

        return view ("welcome");
    }

    public function contactanos() {

        return view ("contactanos");
    }

    public function quienesSomos() {

        return view ("quienesSomos");
    }

    public function blog() {

        return view ("blog");
    }
}
