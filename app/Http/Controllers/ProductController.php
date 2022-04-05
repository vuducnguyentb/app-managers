<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Event;
use App\Events\NewProduct;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
       $data = $request->all();
        $active = $request->has('active')? 1 : 0;
        $pro = new Product();
        $pro->name = $data['name'];
        $pro->price = $data['price'];
        $pro->image = $data['image'];
        $pro->content = $data['content'];
        $pro->active = $active;
        $pro->save();
        $product_id = $pro->id;

        // fire a new product event
        $product = Product::find($product_id);
//        dd(NewProduct::dispatch());
//        event(new NewProduct($product));
        NewProduct::dispatch($product);
//        event(new \App\Events\NewProduct($product));
        return redirect('products/create')
            ->with('message', 'Sản phẩm được tạo thành công với ID: ' . $product_id);
    }
}
