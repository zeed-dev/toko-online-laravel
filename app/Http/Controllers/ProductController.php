<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll($id)
    {
        // Note: Kode lohika mengambil atau menampilkan data
        // $dataDariModelProduct = "";
        // return view('test.test', ["products" => $dataDariModelProduct]);
        return "Show $id";
    }

    public function saveNew()
    {
        // Note: Kode logika menyimpan product baru
    }
}
