<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SanPham;

class HomeController extends Controller
{
    public function index()
    {
        $data = SanPham::orderBy("id", "desc")->paginate();
        return view('index')->with("data", $data);
    }

    public function admin()
    {
        return view('dashboard');
    }
}
