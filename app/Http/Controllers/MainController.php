<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $category = Category::where('status', 1)->take(3)->get();
        $slider = Slider::all();
        return view('index', compact('category', 'slider'));
    }

    public function products()
    {
        $category = Category::where('status', 1)->take(3)->get();
        $product = Product::paginate(9);

        return view('frontpage.products', compact('category', 'product'));
    }

    public function productdetail(Product $product)
    {
        return view('frontpage.productdetail', compact('product'));
    }

    public function help()
    {
        return view('help');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
//       $search_text = $_GET['query'];
//       dd();
//        foreach ($request->query as $item)
//            echo $request->query[0];
        $category = Category::where('status', 1)->take(3)->get();
        $SEARCH_TEXT = $request->search_query;
        $type = Type::where('status', 1)->where('name', 'LIKE', '%' . $SEARCH_TEXT . '%')->get();
//       dd($type->product);

        $types_id_array=array();

        foreach ($type as $key=>$value)
        {
            $types_id_array[]=$value->id;
        }

        $product=Product::whereIn('type_id',$types_id_array)->paginate(9);
//        dd($product);

        return view('frontpage.products', compact('category', 'product'));


    }
}
