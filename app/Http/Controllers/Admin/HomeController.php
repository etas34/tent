<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Insulation;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::count();
        $category = Category::count();
        $type = Type::count();
        $ins = Insulation::count();
        $compact = compact(
            'product',
            'category',
            'type',
            'ins'
        );
        return view('admin.dashboard',$compact);
    }

    public function form_index()
    {
        return view('admin.form.index');
    }

    public function setlocale($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function form_create()
    {
        return view('admin.form.create');
    }

}
