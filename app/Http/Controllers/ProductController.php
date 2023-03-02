<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Shop";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Product Details";
        $viewData["product"] = $product;
        $viewData["products"] = Product::all();
        return view('product.show')->with("viewData", $viewData);
    }
}
