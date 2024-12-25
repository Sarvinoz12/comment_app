<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display the list of products
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('products.create', );
    }

    // Store the new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
//            'category_id' => 'required|exists:managers,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Photo', 'public');
        } else {
            $imagePath = null;
        }


        $product = Product::create($request->all());

        $product->photo = $imagePath;
        $product->save();

        return redirect()->route('products.index');
    }

    // Show form to edit an existing product
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Update the product
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipe_images', 'public');
        } else {
            $imagePath = null;
        }

        $product->update($request->all());
        $product->photo  = $imagePath;
        $product->save();

        return redirect()->route('products.index');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
