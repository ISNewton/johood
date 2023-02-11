<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function form()
    {
        return view('student.form');
    }

    public function products() {
        $products = Product::with([
            'media' => function ( $query) {
                $query->where('collection_name', Product::MEDIA_COLLECTION);
            }
        ])->where('is_visible',true)->get();
        dd($products->first());
        return view('student.products',compact('products'));
    }
}
