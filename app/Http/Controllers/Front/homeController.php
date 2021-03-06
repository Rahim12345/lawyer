<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Attorney;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class homeController extends Controller
{
    public function index()
    {
        App::setLocale(Cookie::get('lang'));
        return view('Front.Pages.home',[
            'attorneys'=>Attorney::all(),
            'services'=>Service::all(),
            'latest_blogs'=>Blog::orderBy('id','desc')->take(2)->get()
        ]);
    }

    public function lang($lang)
    {
        if (! in_array($lang, ['en', 'az'])) {
            $lang = 'en';
        }

        Cookie::queue(
            Cookie::make('lang', $lang, 10*365*24)
        );

        return redirect()->back();
    }
}
