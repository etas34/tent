<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insulation;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MainController extends Controller
{
    public function deneme(){

    }
    public function index()
    {
        $category = Category::where('status', 1)
            ->whereNotNull('sira')
            ->orderBy('sira','asc')
            ->take(6)
            ->get();
        $slider = Slider::all();
        $product = Product::wherein('id',[1,2,3,4,5,6])->paginate(99);
        return view('index', compact('category', 'slider','product'));
    }

    public function products(Category $category)
    {

        $model = Type::where('category_id',$category->id)->where('status', 1)->get();
        $insulation = Insulation::where('status', 1)->get();
        $product = Product::where('category_id',$category->id)->where('category_id',$category->id)->paginate(9);
        $width=Product::where('category_id',$category->id)->where('width','!=',null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $length=Product::where('category_id',$category->id)->where('length','!=',null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $door=Product::where('category_id',$category->id)->where('door','!=',null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();

        return view('frontpage.products', compact('category', 'product','model','width','length','insulation','door'));

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
        $SEARCH_TEXT = $request->search_query;
        $type = Type::where('status', 1)->where('name', 'LIKE', '%' . $SEARCH_TEXT . '%')->get();

        $types_id_array=array();

        foreach ($type as $key=>$value)
        {
            $types_id_array[]=$value->id;
        }

        $product=Product::whereIn('type_id',$types_id_array)->paginate(9);
        $category = Category::where('status', 1)->get();
        $model = Type::where('status', 1)->get();
        $insulation = Insulation::where('status', 1)->get();
        $width=Product::where('width','!=',null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $length=Product::where('length','!=',null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $door=Product::where('door','!=',null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();

        return view('frontpage.products', compact('category', 'product','model','width','length','insulation','door'));



    }


    public function filtre(Request $request)
    {

        $model=Type::query();
        $model=$model->where('status','=',1);
        $model=$model->join('products','types.id','products.type_id');


        $product=Product::query();
        $width=Product::query();
        $length=Product::query();
        $door=Product::query();
        $insulation=Product::query()->join('insulations','products.insulation_id','insulations.id')
                    ->where('insulations.status',1);

          if ($request->category_id !=0)
        {
            $product=$product->where('category_id',$request->category_id);
            $width=$width->where('category_id',$request->category_id);
            $length=$length->where('category_id',$request->category_id);
            $door=$door->where('category_id',$request->category_id);
            $model=$model->where('products.category_id',$request->category_id);
        }

        if ($request->type_id !=0)
        {
            $product=$product->where('type_id',$request->type_id);
            $width=$width->where('type_id',$request->type_id);
            $length=$length->where('type_id',$request->type_id);
            $door=$door->where('type_id',$request->type_id);
            $model=$model->where('type_id',$request->type_id);
            $insulation=$insulation->where('type_id',$request->type_id);
        }

        if ($request->insulation_id !=0)
        {
            $product=$product->where('insulation_id',$request->insulation_id);
            $width=$width->where('insulation_id',$request->insulation_id);
            $length=$length->where('insulation_id',$request->insulation_id);
            $door=$door->where('insulation_id',$request->insulation_id);
            $model=$model->where('insulation_id',$request->insulation_id);
            $insulation=$insulation->where('insulation_id',$request->insulation_id);
        }
        $width_id=null;
        $length_id=null;
        $door_id=null;
        if($request->has('widths')){
            $product=$product->whereIn('width',$request->widths);
            $width=$width->whereIn('width',$request->widths);
            $length=$length->whereIn('width',$request->widths);
            $door=$door->whereIn('width',$request->widths);
            $model=$model->whereIn('width',$request->widths);
            $insulation=$insulation->whereIn('width',$request->widths);
            $width_id=$request->widths;
        }

        if($request->has('lengths')){
            $product=$product->whereIn('length',$request->lengths);
            $width=$width->whereIn('length',$request->lengths);
            $length=$length->whereIn('length',$request->lengths);
            $door=$door->whereIn('length',$request->lengths);
            $model=$model->whereIn('length',$request->lengths);
            $insulation=$insulation->whereIn('length',$request->lengths);
            $length_id=$request->lengths;
        }
        if($request->has('doors')){
            $product=$product->whereIn('door',$request->doors);
            $width=$width->whereIn('door',$request->doors);
            $length=$length->whereIn('door',$request->doors);
            $door=$door->whereIn('door',$request->doors);
            $model=$model->whereIn('door',$request->doors);
            $insulation=$insulation->whereIn('door',$request->doors);
            $door_id=$request->doors;
        }

        $width=$width->where('width','!=',null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $length=$length->where('length','!=',null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $door=$door->where('door','!=',null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();
        $model=$model->select('types.*')->distinct('types.name')->get();

        $product=$product->paginate(9);
        $model_id=$request->type_id;
        $insulation=$insulation->get();
        $insulation_id=$request->insulation_id;




//        return view('frontpage.items', compact( 'product'))->render();
        return response()->json([
            'view_products' => view('frontpage.items', compact( 'product'))->render(),
            'view_models' => view('frontpage.models', compact( 'model','model_id'))->render(),
            'view_widths' => view('frontpage.widths', compact( 'width','width_id'))->render(),
            'view_lengths' => view('frontpage.lengths', compact( 'length','length_id'))->render(),
            'view_insulations' => view('frontpage.insulations', compact( 'insulation','insulation_id'))->render(),
            'view_doors' => view('frontpage.doors', compact( 'door','door_id'))->render()
        ]);
    }



}
