<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Insulation;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function deneme()
    {

    }

    public function index()
    {
        $category = Category::where('status', 1)
            ->orderByRaw('ISNULL(sira), sira ASC')
            ->take(6)
            ->get();
        $slider = Slider::orderBy('rank', 'asc')
            ->get();
        $product = Product::wherein('id', [1, 2, 3, 4, 5, 6])->paginate(99);
        return view('index', compact('category', 'slider', 'product'));
    }

    public function products(Category $category)
    {

        $model = Type::where('category_id', $category->id)->where('status', 1)->get();
        $insulation = Insulation::where('status', 1)->get();
        $product = Product::where('category_id', $category->id)->where('category_id', $category->id)->paginate(12);
        $width = Product::where('category_id', $category->id)->where('width', '!=', null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $diameter = Product::where('category_id', $category->id)->where('diameter', '!=', null)->select('diameter')->distinct('diameter')->orderByRaw('diameter+0 asc')->get();
        $length = Product::where('category_id', $category->id)->where('length', '!=', null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $door = Product::where('category_id', $category->id)->where('door', '!=', null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();

        return view('frontpage.products', compact('category', 'product', 'model', 'width', 'diameter', 'length', 'insulation', 'door'));

    }

    public function productsmodel(Category $category, Type $type)
    {

        $secili_model = $type;
        $model = Type::where('category_id', $category->id)->where('status', 1)->get();
        $insulation = Insulation::where('status', 1)->get();
        $product = Product::where('category_id', $category->id)->where('type_id', $type->id)->paginate(12);
        $width = Product::where('category_id', $category->id)->where('type_id', $type->id)->where('width', '!=', null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $length = Product::where('category_id', $category->id)->where('type_id', $type->id)->where('length', '!=', null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $diameter = Product::where('category_id', $category->id)->where('type_id', $type->id)->where('diameter', '!=', null)->select('diameter')->distinct('diameter')->orderByRaw('diameter+0 asc')->get();
        $door = Product::where('category_id', $category->id)->where('type_id', $type->id)->where('door', '!=', null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();

        return view('frontpage.products', compact('category', 'product', 'model', 'width', 'length', 'insulation', 'door', 'secili_model', 'diameter'));

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

    public function page(Page $page)
    {
        $compact = compact('page');
        return view('page', $compact);
    }

    public function contact()
    {
        return view('contact');
    }

    public function search($text)
    {
        $SEARCH_TEXT = $text;
        $type = Type::where('status', 1)->where('name', 'LIKE', '%' . $SEARCH_TEXT . '%')->get();

        $types_id_array = array();

        foreach ($type as $key => $value) {
            $types_id_array[] = $value->id;
        }

        $product = Product::whereIn('type_id', $types_id_array)->paginate(12);

        return view('frontpage.productsSearch', compact('product'));


    }


    public function filtre(Request $request)
    {

        $model = Type::query();
        $model = $model->where('status', '=', 1);
        $model = $model->join('products', 'types.id', 'products.type_id');


        $product = Product::query();
        $width = Product::query();
        $length = Product::query();
        $diameter = Product::query();
        $door = Product::query();
        $insulation = Product::query()->join('insulations', 'products.insulation_id', 'insulations.id')
            ->where('insulations.status', 1);

        if ($request->category_id != 0) {
            $product = $product->where('category_id', $request->category_id);
            $width = $width->where('category_id', $request->category_id);
            $length = $length->where('category_id', $request->category_id);
            $diameter = $diameter->where('category_id', $request->category_id);
            $door = $door->where('category_id', $request->category_id);
            $model = $model->where('products.category_id', $request->category_id);
        }

        if ($request->type_id != 0) {
            $product = $product->where('type_id', $request->type_id);
            $width = $width->where('type_id', $request->type_id);
            $length = $length->where('type_id', $request->type_id);
            $diameter = $diameter->where('type_id', $request->type_id);
            $door = $door->where('type_id', $request->type_id);
            $model = $model->where('type_id', $request->type_id);
            $insulation = $insulation->where('type_id', $request->type_id);
        }

        if ($request->insulation_id != 0) {
            $product = $product->where('insulation_id', $request->insulation_id);
            $width = $width->where('insulation_id', $request->insulation_id);
            $length = $length->where('insulation_id', $request->insulation_id);
            $diameter = $diameter->where('insulation_id', $request->insulation_id);
            $door = $door->where('insulation_id', $request->insulation_id);
            $model = $model->where('insulation_id', $request->insulation_id);
            $insulation = $insulation->where('insulation_id', $request->insulation_id);
        }
        $width_id = null;
        $length_id = null;
        $diameter_id = null;
        $door_id = null;
        if ($request->has('widths')) {
            $product = $product->whereIn('width', $request->widths);
            $width = $width->whereIn('width', $request->widths);
            $length = $length->whereIn('width', $request->widths);
            $diameter = $diameter->whereIn('width', $request->widths);
            $door = $door->whereIn('width', $request->widths);
            $model = $model->whereIn('width', $request->widths);
            $insulation = $insulation->whereIn('width', $request->widths);
            $width_id = $request->widths;
        }

        if ($request->has('lengths')) {
            $product = $product->whereIn('length', $request->lengths);
            $width = $width->whereIn('length', $request->lengths);
            $length = $length->whereIn('length', $request->lengths);
            $diameter = $diameter->whereIn('length', $request->lengths);
            $door = $door->whereIn('length', $request->lengths);
            $model = $model->whereIn('length', $request->lengths);
            $insulation = $insulation->whereIn('length', $request->lengths);
            $length_id = $request->lengths;
        }
        if ($request->has('diameters')) {
            $product = $product->whereIn('diameter', $request->diameters);
            $width = $width->whereIn('diameter', $request->diameters);
            $length = $length->whereIn('diameter', $request->diameters);
            $diameter = $diameter->whereIn('diameter', $request->diameters);
            $door = $door->whereIn('diameter', $request->diameters);
            $model = $model->whereIn('diameter', $request->diameters);
            $insulation = $insulation->whereIn('diameter', $request->diameters);
            $diameter_id = $request->diameters;
        }
        if ($request->has('doors')) {
            $product = $product->whereIn('door', $request->doors);
            $width = $width->whereIn('door', $request->doors);
            $length = $length->whereIn('door', $request->doors);
            $diameter = $diameter->whereIn('door', $request->doors);
            $door = $door->whereIn('door', $request->doors);
            $model = $model->whereIn('door', $request->doors);
            $insulation = $insulation->whereIn('door', $request->doors);
            $door_id = $request->doors;
        }

        $width = $width->where('width', '!=', null)->select('width')->distinct('width')->orderByRaw('width+0 asc')->get();
        $length = $length->where('length', '!=', null)->select('length')->distinct('length')->orderByRaw('length+0 asc')->get();
        $diameter = $diameter->where('diameter', '!=', null)->select('diameter')->distinct('diameter')->orderByRaw('diameter+0 asc')->get();
        $door = $door->where('door', '!=', null)->select('door')->distinct('door')->orderByRaw('door+0 asc')->get();
        $model = $model->select('types.*')->distinct('types.name')->get();

        $product = $product->paginate(12);
        $model_id = $request->type_id;
        $insulation = $insulation->get();
        $insulation_id = $request->insulation_id;


//        return view('frontpage.items', compact( 'product'))->render();


        return response()->json([

            'view_products' => $this->sanitize_output(view('frontpage.items', compact('product'))->render()),
            'view_models' => view('frontpage.models', compact('model', 'model_id'))->render(),
            'view_widths' => view('frontpage.widths', compact('width', 'width_id'))->render(),
            'view_lengths' => view('frontpage.lengths', compact('length', 'length_id'))->render(),
            'view_diameters' => view('frontpage.diameters', compact('diameter', 'diameter_id'))->render(),
//            'view_insulations' => view('frontpage.insulations', compact('insulation', 'insulation_id'))->render(),
            'view_doors' => view('frontpage.doors', compact('door', 'door_id'))->render()
        ]);
    }

    public function getinfo(Request $request)
    {

//
        $this->validate($request, [
            'product_id' => 'required'
        ]);

        $data = array(
            'fullname' => $request->full_name,
            'email' => $request->email,
            'product_id' => $request->product_id,
            'message' => $request->message
        );

        Mail::to('mail@moonzelt.com')->send(new SendMail($data));
//        return view('dynamic_email_template');

//        toastr()->success('Thanks for contacting us!');

        return redirect()->route('emailsuccess', app()->getLocale());
//        dd($request);
    }


    public function emailsuccess()
    {
        return view('email_success');
    }

    /**
     * Minify HTML
     *
     * @param $buffer
     *
     * @return string|string[]|null
     */
    function sanitize_output($buffer)
    {

        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
            '/[^\S ]+\</s',     // strip whitespaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove HTML comments
        );

        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );

        $buffer = preg_replace($search, $replace, $buffer);

        return $buffer;

    }
}
