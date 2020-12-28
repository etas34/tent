<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insulation;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Toastr;

class InsulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insulation = Insulation::where('status', 1)->get();
        return view('admin.insulation.index', compact('insulation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insulation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insulation = new Insulation();
        $insulation->name = $request->ins_name;
        $saved = $insulation->save();
        if ($saved)
            toastr()->success('Record Is Successfully Updated');
        else
            toastr()->error('Something\'s went wrong!');
        return redirect()->route('admin.insulation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Insulation $insulation
     * @return \Illuminate\Http\Response
     */
    public function show(Insulation $insulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Insulation $insulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Insulation $insulation)
    {
        return view('admin.insulation.edit',compact('insulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Insulation $insulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insulation $insulation)
    {
        $insulation->name = $request->ins_name;
        $saved = $insulation->save();
        if ($saved)
            toastr()->success('Record Is Successfully Updated');
        else
            toastr()->error('Something\'s went wrong!');
        return redirect()->route('admin.insulation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Insulation $insulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insulation $insulation)
    {
       $insulation->status = 0;
        $saved = $insulation->save();
        if ($saved)
            toastr()->success('Record Is Successfully Deleted');
        else
            toastr()->error('Something\'s went wrong!');
        return redirect()->route('admin.insulation.index');
    }
}
