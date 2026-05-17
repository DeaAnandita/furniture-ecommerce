<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Homepage
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // category home
        if($request->category){

            $query->where('category', $request->category);

        }

        $products = $query->latest()->get();

        $categories = Product::select('category')
            ->distinct()
            ->pluck('category');

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * All products + search + filter
     */
    public function all(Request $request)
    {
        $query = Product::query();

        // search
        if($request->search){

            $query->where('name', 'like', '%' . $request->search . '%');

        }

        // category
        if($request->category){

            $query->where('category', $request->category);

        }

        // sorting dropdown
        if($request->sort == 'low'){

            $query->orderBy('price', 'asc');

        } elseif($request->sort == 'high'){

            $query->orderBy('price', 'desc');

        } else {

            $query->latest();

        }

        $products = $query->paginate(12);

        // categories buat filter
        $categories = Product::select('category')
            ->distinct()
            ->pluck('category');

        return view('products.all', compact('products', 'categories'));
    }

    /**
     * Detail product
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Admin product page
     */
    public function admin()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Create form
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store product
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
            'material' => 'required',
            'style' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('products'),
                $imageName
            );
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category' => $request->category,
            'material' => $request->material,
            'style' => $request->style,
            'image' => $imageName
        ]);

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil ditambahkan');
    }
}