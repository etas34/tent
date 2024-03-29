<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status', 1)
            ->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        dd(Category::find(5)->getTranslations('name')['en']);
//        dd(Type::where('status',1)->where('category_id',3)->get());

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->description);
//
//        $category->image= 'denemeurl';
//        $category->save();

//        dd(Category::find(5)->name);


//        foreach ($request->cat_name as $key=>$item)
//            echo($key.'=>'.$item."\r\n");
//        dd();
        $category = new Category();
        $category->description = $request->description;

        $category->name = $request->cat_name;
        $category->sira = $request->sira;

        if ($request->file('image')) {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


//                $belge->image = url('/public/images') . "/" . $fileName;

            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('storage/images/cat_images/'), $imageName);
//            $request->image->storeAs('/public/', );
//            dd(Storage::disk('public')->put($imageName,$request->image));
            $category->image = $imageName;

        }

        if ($request->file('banner')) {

            if ($category->banner and file_exists(public_path("storage\\images\\banner_images\\$category->banner")))
                unlink(public_path("storage\\images\\banner_images\\$category->banner"));

            $request->validate([

                'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


            $imageName = time() . '.' . $request->banner->extension();
            $request->file('banner')->move(public_path('storage/images/banner_images/'), $imageName);
//            Storage::disk('public')->put($imageName,$request->image);
//            $request->image->storeAs('/public/storage/images/cat_images', $imageName);
            $category->banner = $imageName;

        }



        $saved = $category->save();

        if ($saved)
            toastr()->success('Record Is Successfully Updated');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.category.index', app()->getLocale());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $category->description = $request->description;
        $category->name = $request->cat_name;

        $category->sira = $request->sira;

        if ($request->file('image')) {

            if ($category->image and file_exists(public_path("storage\\images\\cat_images\\$category->image")))
                unlink(public_path("storage\\images\\cat_images\\$category->image"));

            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('storage/images/cat_images/'), $imageName);
//            Storage::disk('public')->put($imageName,$request->image);
//            $request->image->storeAs('/public/storage/images/cat_images', $imageName);
            $category->image = $imageName;

        }

        if ($request->file('banner')) {

            if ($category->banner and file_exists(public_path("storage\\images\\banner_images\\$category->banner")))
                unlink(public_path("storage\\images\\banner_images\\$category->banner"));

            $request->validate([

                'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


            $imageName = time() . '.' . $request->banner->extension();
            $request->file('banner')->move(public_path('storage/images/banner_images/'), $imageName);
//            Storage::disk('public')->put($imageName,$request->image);
//            $request->image->storeAs('/public/storage/images/cat_images', $imageName);
            $category->banner = $imageName;

        }

        $saved = $category->save();

        if ($saved)
            toastr()->success('Record Is Successfully Saved');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        if ($category->image and file_exists(asset("public\\storage\\images\\cat_images\\$category->image")))
            unlink(asset("public\\storage\\images\\cat_images\\$category->image"));
        $category->status = 0;
        $type = $category->type;
        foreach ($type as $types) {
            $types->status = 0;
            $category->type()->save($types);
        }

        $saved = $category->save();

        if ($saved)
            toastr()->success('Record Is Successfully Deleted');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.category.index', app()->getLocale());
    }

    public function getsubcat(Request $request)
    {
        $sub_cat = Type::where('status', 1)->where('category_id', $request->cat_id)->get();


        return response()->json($sub_cat);
    }


}
