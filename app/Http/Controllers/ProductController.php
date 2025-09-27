<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Menampilkan semua data produk yang aktif.
     */
    public function index()
    {
        $products = DB::table('products')->where('is_active', 1)->get();
        
        return response()->json($products);
    }
}