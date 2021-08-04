<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.services');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=360,height=250',
            'service_name_az'=>'required|max:20',
            'service_name_en'=>'required|max:20',
            'service_less_az'=>'required|max:130',
            'service_less_en'=>'required|max:130',
            'service_more_az'=>'required|max:5000',
            'service_more_en'=>'required|max:5000',
        ],[],[
            'photo' =>'Cover (360x250)',
            'service_name_az'=>'Xidmətin adı(AZ)',
            'service_name_en'=>'Xidmətin adı(EN)',
            'service_less_az'=>'Xidmət haqqında qısa məlumat(AZ)',
            'service_less_en'=>'Xidmət haqqında qısa məlumat(EN)',
            'service_more_az'=>'Xidmət haqqında-Ətraflı(AZ)',
            'service_more_en'=>'Xidmət haqqında-Ətraflı(EN)'
        ]);
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

    public function upload(Request $request)
    {
        if ( $request->hasFile( 'upload' ) )
        {
            $file = $request->file( 'upload' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/service', $new_name );

            $CKEditorFuncNum = $request->input( 'CKEditorFuncNum' );
            $url             = asset( 'storage/service/' . $new_name );
            $msg             = 'Image uploaded successfully';
            $response        = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header( 'Content-type: text/html; charset=utf-8' );
            echo $response;
        }
    }

    public function translateToAz(Request $request)
    {
        $this->validate($request,[
            'version_en'=>'required|max:5000'
        ]);

        $tr = new GoogleTranslate('az');

        $text = $tr->translate($request->version_en);

        return $text;
    }

    public function translateToEn(Request $request)
    {
        $this->validate($request,[
            'version_az'=>'required|max:5000'
        ]);

        $tr = new GoogleTranslate('en');

        $text = $tr->translate($request->version_az);

        return $text;
    }
}
