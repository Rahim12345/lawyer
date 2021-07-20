<?php

namespace App\Http\Controllers;

use App\Helpers\Options;
use App\Models\Option;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index()
    {
        return view('Admin.Pages.settings',[
            'tel'=>Options::getOption('tel'),
            'email'=>Options::getOption('email'),
            'twitter'=>Options::getOption('twitter'),
            'facebook'=>Options::getOption('facebook'),
            'instagram'=>Options::getOption('instagram'),
            'youtube'=>Options::getOption('youtube'),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tel'=>'required|max:50',
            'email'=>'required|email',
            'twitter'=>'required|url|max:150',
            'facebook'=>'required|url|max:150',
            'instagram'=>'required|url|max:150',
            'youtube'=>'required|url|max:150',
        ],[],[
            'tel'=>__('admin_master.tel'),
            'email'=>'Email'
        ]);

        foreach ($request->keys() as $key)
        {
            if ($key != '_token')
            {
                Option::updateOrCreate(
                    ['key'   => $key],
                    [
                        'value' => $request->post($key)
                    ]
                );
            }
        }

        toastr()->success('Settings recorded successfully','Successful operation');

        return redirect()->route('admin.settings');
    }
}
