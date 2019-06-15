<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        $viewVars = [
            'title' => 'About page'
        ];
        return view('pages/about', $viewVars);
    }
}
