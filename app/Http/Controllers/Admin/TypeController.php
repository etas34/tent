<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::where('status',1)
            ->get();
        return view('admin.model.index',compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status',1)->get();
        return view('admin.model.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type();
        $type->category_id = $request->cat_id;
        $type->name = $request->mod_name;
        $saved = $type->save();
        if ($saved)
            toastr()->success('Record Is Successfully Saved');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.model.index' , app()->getLocale());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $category = Category::where('status',1)->get();
        return view('admin.model.edit',compact('type','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {

        $type->category_id = $request->cat_id;
        $type->name = $request->mod_name;
        $saved = $type->save();
        if ($saved)
            toastr()->success('Record Is Successfully Saved');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->status = 0;
        $saved = $type->save();

        if ($saved)
            toastr()->success('Record Is Successfully Deleted');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.model.index' , app()->getLocale());
    }
}
