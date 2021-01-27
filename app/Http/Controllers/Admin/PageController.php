<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::all();
        $compact = compact('page');
        return view('admin.page.index', $compact);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $page = new Page();
        $page->header = $request->header;
        $page->content = $request->description;
        $page->visibility = $request->visibility == 'on' ? 1 : 0;
        $saved = $page->save();
        if ($saved)
            toastr()->success('Record Is Successfully Stored');
        else
            toastr()->error('Something\'s went wrong!');

        return redirect()->route('admin.page.index', app()->getLocale());


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $compact = compact('page');
        return view('admin.page.edit',$compact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->header = $request->header;
        $page->content = $request->description;
        $page->visibility = $request->visibility == 'on' ? 1 : 0;
        $saved = $page->save();
        if ($saved)
            toastr()->success('Record Is Successfully Updated');
        else
            toastr()->error('Something\'s went wrong!');

        return redirect()->route('admin.page.index', app()->getLocale());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
