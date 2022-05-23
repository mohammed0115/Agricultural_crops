<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $products = product::with('categories')->where('category_id',$category);
        return view('products',compact(['products' ]));
//        return view('products',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        $categories = category::all();
        return view('add_product',compact(['categories','category' ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep1($category,Request $request)
    {
        $products = $request->session()->get('products');
        return view('products.step1',compact('products','category'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:productss',
        ]);
        if(empty($request->session()->get('products'))){
            $products = new product();
            $products->fill($validatedData);
            $request->session()->put('products', $products);
        }else{
            $products = $request->session()->get('products');
            $products->fill($validatedData);
            $request->session()->put('products', $products);
        }
        return redirect('/products-create-step-2');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep2(Request $request)
    {
        $products = $request->session()->get('products');
        return view('products.step2',compact('products'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|unique:products',
        ]);
        if(empty($request->session()->get('products'))){
            $products = new products();
            $products->fill($validatedData);
            $request->session()->put('products', $products);
        }else{
            $products = $request->session()->get('products');
            $products->fill($validatedData);
            $request->session()->put('products', $products);
        }
        return redirect()->route('products.create.step.3');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep3(Request $request)
    {
        $products = $request->session()->get('products');
        return view('products.step3',compact('products'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
        $products = $request->session()->get('products');
        if(!isset($products->productImg)) {
            $request->validate([
                'productimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $fileName = "productImage-" . time() . '.' . request()->productimg->getClientOriginalExtension();
            $request->productimg->storeAs('productimg', $fileName);
            $products = $request->session()->get('products');
            $products->productImg = $fileName;
            $request->session()->put('products', $products);
        }
        return view('products.step4',compact('products'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeImage(Request $request)
    {
        $products = $request->session()->get('products');
        $products->productImg = null;
        return view('products.step3',compact('products'));
    }
//    /**
//     * Write code on Method
//     *
//     * @return response()
//     */
//    public function store(Request $request)
//    {
//        $products = $request->session()->get('products');
//        $products->save();
//        return redirect('/data');
//    }
}
