<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Attorney;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class aboutController extends Controller
{
    public function index()
    {
        App::setLocale(Cookie::get('lang'));
        return view('Front.Pages.about',[
            'attorneys'=>Attorney::all(),
            'services'=>Service::all()
        ]);
    }
}
