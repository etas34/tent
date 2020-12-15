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
            "de"=>"deutsch",
            "en"=>"english",
            "ro"=>"română",
            "hu"=>"magyar",
            "cs"=>"český",
            "sr"=>"српски",
            "hr"=>"hrvatski",
            "sk"=>"slovenský",
            "sl"=>"slovenščina",
            "es"=>"español"
        );

        // Sharing is caring
        View::share('langs', $langs);
    }
}
