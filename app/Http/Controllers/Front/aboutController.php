<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Options;
use App\Http\Controllers\Controller;
use App\Models\Attorney;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        return view('Front.Pages.about',[
            'attorneys'=>Attorney::all()
        ]);
    }
}
