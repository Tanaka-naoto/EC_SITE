<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {

        return view('product.index')
            ->with('products', Product::get());

    }

    public function show(Product $product) {

        return view('product.show',compact('product'));


    }

    public function destroy() {

        // $products = Product::all();
        // $products->delete();
        Product::query()->delete();

        return redirect()
            ->route('product.index')
            ->with('message', 'プロダクトテーブルの中身をすべて削除しました。');
    }
}