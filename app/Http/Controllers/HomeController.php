<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function form()
    {
        // if(!session()->has('product_id')) {
        //     return redirect()->route('products');
        // }

        return view('student.form');
    }

    // public function products() {
    //     $products = Product::with([
    //         'media' => function ( $query) {
    //             $query->where('collection_name', Product::MEDIA_COLLECTION);
    //         }
    //     ])
    //     ->where('is_visible',true)
    //     ->get();

    //     return view('student.products',compact('products'));
    // }

    public function save(Product $product) {

        $this->validate(request(),[
            'installment_type' => 'required',
            'with_sim_card' => 'sometimes',
        ]);

        session()->put('product_id',$product->id);
        session()->put('installment_type',request()->get('installment_type'));
        session()->put('with_sim_card',!!request()->get('with_sim_card'));

        return redirect()->route('form');
    }

    // public function index() {
    //     $projects = Project::where('is_visible',true)->get();
    //     return view('index',compact('projects'));
    // }

    // public function products() {
    //     $projects = Project::where('is_visible',true)->get();
    //     return view('products',compact('projects'));
    // }
}
