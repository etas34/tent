<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $category = Category::where('status',1)->take(3)->get();
        $slider = Slider::all();
        return view('index',compact('category','slider'));
    }
}
