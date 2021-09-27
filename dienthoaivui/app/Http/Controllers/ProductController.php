<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::paginate(3);
        // $products = DB::table('products')->get();
        // print_r($products);
        // $categories = DB::table('categories')->get();
        $categories = Category::all();
        // print_r($categories);
        return view('list',['products' => $products, 'categories' => $categories]);
    }
    public function store(Request $request)
    {

        $product=Product::create($request->all());
        $image= time().'.'.$request->image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image);
        $product->image = $image;

        // $image = $request->image;
        $product->save();
        return response()->json([
            'data'=>$product,
            'message'=>'Tạo thành công'
        ]);

    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return response()->json(['data'=>'removed']);
    }
    public function show(Request $request, $id){
        $product = Product::find($id);
        if($request->hasFile('image')){
            $image= time().'.'.$request->image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('', $image);
            $product->image = $image;
        }
        $product->update($request->all());
        return response()->json(['data'=>$product]);
    }
    public function home()
    {
        $products = Product::all();
        // $products = DB::table('products')->get();
        // print_r($products);
        // $categories = DB::table('categories')->get();
        $categories = Category::all();
        // print_r($categories);
        return view('home',['products' => $products, 'categories' => $categories]);

    }
    public function getProductById($id){
        $product =Product::findOrFail($id);
        return response()->json(['data'=>$product]);

    }
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        // $product->fill($request->all)->save();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return $request->name;

        // return response()->json(['data'=>$product]);
    }


}
