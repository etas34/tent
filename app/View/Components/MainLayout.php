<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $category = Category::where('status',1)->get();
        $page = Page::where('visibility',1)
            ->get();

        $product = Product::all();
        return view('layouts.main-layout',compact('category','product','page'));
    }
}
