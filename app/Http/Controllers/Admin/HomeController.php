<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function form_index()
    {
        return view('admin.form.index');
    }

    public function form_create()
    {
        return view('admin.form.create');
    }

}
