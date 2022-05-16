<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (request()->category) {
            $home = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        } else {

            $home = Product::inRandomOrder()->paginate(9);
            $categories = Category::all();
            $categoryName = 'Featured';

        }
        return view('home.index')->with([
            'home' => $home,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'mode' => 'public'
        ]);
//        return view('home.index');
    }
}
