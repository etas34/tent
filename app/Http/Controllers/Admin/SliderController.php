<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();

//            dd($request->file('image'));

        if ($request->file('image')) {
//            $request->validate([
//
//                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//
//            ]);
//
//
            foreach ($request->image as $key => $value) {
                $imageName[$key] = time() . "_$key" . '.' . $value->extension();
                $value->move(public_path('storage/images/slider_images/'), $imageName[$key]);
            }
            $slider->image = ($imageName);

        }

        $saved = $slider->save();

        if ($saved)
            toastr()->success('Record Is Successfully Saved');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.slider.index', app()->getLocale());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request->file('image')) {
            $resimler = $slider->getTranslations('image');
            foreach ($request->image as $key => $value) {
                $resim = isset($resimler[$key]) ? $resimler[$key] : '';

                if ($resim and file_exists(public_path("storage\\images\\slider_images\\$resim")))
                    unlink(public_path("storage\\images\\slider_images\\$resimler[$key]"));
                $imageName[$key] = time() . "_$key" . '.' . $value->extension();
                $value->move(public_path('storage/images/slider_images/'), $imageName[$key]);
            }
            $slider->image = ($imageName);

        }
        $saved = $slider->save();
        if ($saved)
            toastr()->success('Record Is Successfully Saved');
        else
            toastr()->error('Oops! Something\'s Went Wrong');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $resimler = $slider->getTranslations('image');
        foreach ($resimler as $key => $value)
            if ($resimler[$key] and file_exists(public_path("storage\\images\\slider_images\\$resimler[$key]")))
                unlink(public_path("storage\\images\\slider_images\\$resimler[$key]"));

        $saved = $slider->delete();

        if ($saved)
            toastr()->success('The record was deleted.');
        else
            toastr()->error('Oops! Something\'s Went Wrong');

        return redirect()->route('admin.slider.index', app()->getLocale());
    }
}
