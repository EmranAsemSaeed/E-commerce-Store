<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    protected function productsData()
    {
        return [
            ['name' => 'Alpha Sneakers', 'price' => 79.99, 'on_sale' => true,  'description' => 'Comfortable sneakers for everyday wear.'],
            ['name' => 'Beta Jacket',    'price' => 129.50,'on_sale' => false, 'description' => 'Windproof jacket.'],
            ['name' => 'Gamma Bag',      'price' => 45.00, 'on_sale' => true,  'description' => 'Stylish crossbody bag.'],
        ];
    }

    public function index()
    {
        return view('shop.index');
    }

    public function products()
    {
        $products = $this->productsData();
        return view('shop.products', compact('products'));
    }

    public function productDetails($id = 0)
    {
        $products = $this->productsData();
        $product = $products[$id] ?? $products[0];
        return view('shop.product-details', compact('product'));
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function about()
    {
        $title = 'About Our Store';
        $description = 'We sell high-quality products with great customer service.';
        $rawHtml = '<p><strong>Our mission:</strong> Bring the best products to our customers.</p>';
        return view('shop.about-us', compact('title','description','rawHtml'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}
