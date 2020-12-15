<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        //its just a dummy data object.
        $langs = array(
            "deutsch"=>"de",
            "english"=>"en",
            "română"=>"ro",
            "magyar"=>"hu",
            "český"=>"cs",
            "српски"=>"sr",
            "hrvatski"=>"hr",
            "slovenský"=>"sk",
            "slovenščina"=>"sl",
            "español"=>"es"
        );

        // Sharing is caring
        View::share('langs', $langs);
    }
}
