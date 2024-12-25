<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function about()
    {
        return view('about');
    }

    public function comments()
    {
        return view('comments', [
            'products' => Product::all(),
            'comments' => Comment::all()
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products', ([
            'products' => Product::all(),
            'comments' => Comment::all()
        ]));
    }

    public
    function index()
    {
        return view('index',
            [
                'products' => Product::all(),
                'comments' => Comment::all()
            ]);
    }
public function showContactPage(Request $request)
    {
        $productId = $request->query('id');
        $product = Product::find($productId) ;// Retrieve the product by ID


        return view('contact', compact('product'));
    }

}
