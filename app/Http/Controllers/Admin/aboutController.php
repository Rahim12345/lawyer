<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Options;
use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->add_or_update == 0)
        {
            $this->validate($request,[
                'photo_banner'=>'required|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=1920,height=1285',
                'photo_mission'=>'required|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=960,height=685'
            ],[],[
                'photo_banner'=>'Banner şəkli',
                'photo_mission'=>'Missiya şəkli'
            ]);

            //Banner db - ye yazildi
            $file = $request->file( 'photo_banner' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/about/banners', $new_name );

            Option::updateOrCreate(
                ['key'   => 'photo_banner'],
                [
                    'value' => $new_name
                ]
            );

            //Mission db - ye yazildi
            $file = $request->file( 'photo_mission' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/about/missions', $new_name );

            Option::updateOrCreate(
                ['key'   => 'photo_mission'],
                [
                    'value' => $new_name
                ]
            );
        }
        else
        {
            $this->validate($request,[
                'photo_banner'=>'mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=1920,height=1280',
                'photo_mission'=>'mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=1920,height=685'
            ],[],[
                'photo_banner'=>'Banner şəkli',
                'photo_mission'=>'Missiya şəkli'
            ]);

            if ($request->has('photo_banner'))
            {
                if (File::exists(Storage::path('/public/about/banners'.'/'.Options::getOption('photo_banner'))))
                {
                    File::delete(Storage::path('/public/about/banners'.'/'.Options::getOption('photo_banner')));
                }

                //Banner db - ye yazildi
                $file = $request->file( 'photo_banner' );

                $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
                $extention = $file->getClientOriginalExtension();
                $new_name  = $filename . '-' . time() . '.' . $extention;

                $file->storeAs( 'public/about/banners', $new_name );

                Option::updateOrCreate(
                    ['key'   => 'photo_banner'],
                    [
                        'value' => $new_name
                    ]
                );
            }

            if ($request->has('photo_mission'))
            {
                if (File::exists(Storage::path('/public/about/missions'.'/'.Options::getOption('photo_mission'))))
                {
                    File::delete(Storage::path('/public/about/missions'.'/'.Options::getOption('photo_mission')));
                }

                //Missionu db - ye yazildi
                $file = $request->file( 'photo_mission' );

                $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
                $extention = $file->getClientOriginalExtension();
                $new_name  = $filename . '-' . time() . '.' . $extention;

                $file->storeAs( 'public/about/missions', $new_name );

                Option::updateOrCreate(
                    ['key'   => 'photo_mission'],
                    [
                        'value' => $new_name
                    ]
                );
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
