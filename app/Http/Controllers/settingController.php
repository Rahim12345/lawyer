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
            'legal_solutions'=>Options::getOption('legal_solutions'),
            'cases_we_won'=>Options::getOption('cases_we_won'),
            'free_consultations'=>Options::getOption('free_consultations'),
            'cases_dismissed'=>Options::getOption('cases_dismissed'),
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
            'legal_solutions'=>'required|integer|between:1,100',
            'cases_we_won'=>'required|integer|between:1,100',
            'free_consultations'=>'required|integer|between:1,10000',
            'cases_dismissed'=>'required|integer|between:1,10000'
        ],[],[
            'tel'=>__('admin_master.tel'),
            'email'=>'Email',
            'legal_solutions'=>__('front_about.legal_solutions'),
            'cases_we_won'=>__('front_about.cases_we_won'),
            'free_consultations'=>__('front_about.free_consultations'),
            'cases_dismissed'=>__('front_about.cases_dismissed'),
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
