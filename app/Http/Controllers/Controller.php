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
            "de" => "deutsch",
            "en" => "english",
            "hu" => "magyar",
            "sk" => "slovenský",
            "sl" => "slovenščina",
            "sr" => "српски",
            "ro" => "română",
            "hr" => "hrvatski",
            "cs" => "český",
            "es" => "español",
            "nl" => "nederlands",
        );

        // Sharing is caring
        View::share('langs', $langs);


    }
}
