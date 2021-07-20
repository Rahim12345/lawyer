<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class subsciberController extends Controller
{
    public function index()
    {
        return view('Admin.Pages.subscribers',[
            'subscribes'=>Subscribe::paginate(10)
        ]);
    }
}
