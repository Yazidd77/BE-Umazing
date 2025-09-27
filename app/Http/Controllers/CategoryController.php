<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Menampilkan semua data kategori.
     */
    public function index()
    {
        // Ambil kategori yang relevan untuk mahasiswa
        $studentCategoryNames = [
            'Komputer & Aksesoris',
            'Handphone & Aksesoris',
            'Alat Tulis',
            'Tas',
            'Pakaian',
            'Elektronik',
            'Hobi & Koleksi',
            'Makanan & Minuman'
        ];

        $categories = DB::table('categories')
                        ->whereIn('name', $studentCategoryNames)
                        ->get();
        
        return response()->json($categories);
    }
}