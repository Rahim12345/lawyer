<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
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
        return view('Admin.Pages.all-services',[
            'services'=>Service::all()
        ]);
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

        $file = $request->file( 'photo' );

        $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
        $extention = $file->getClientOriginalExtension();
        $new_name  = $filename . '-' . time() . '.' . $extention;

        $file->storeAs( 'public/service-covers', $new_name );

        Service::create([
            'cover'=>$new_name,
            'service_name_az'=>$request->service_name_az,
            'service_name_en'=>$request->service_name_en,
            'service_less_az'=>$request->service_less_az,
            'service_less_en'=>$request->service_less_en,
            'service_more_az'=>$request->service_more_az,
            'service_more_en'=>$request->service_more_en
        ]);

        toastr()->success('Xidmət uğurla əlavə edildi','Uğurlu əməliyyat');
        return redirect()->route('service.index');
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
        $service = Service::findOrFail($id);

        return view('Admin.Pages.update-services',[
            'service'=>$service
        ]);
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
        $service = Service::whereId($id)->first();

        $this->validate($request,[
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=360,height=250',
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

        if ( $request->hasFile( 'photo' ) )
        {
            $photo = $service->cover;
            if ( File::exists( storage_path( 'app/public/service-covers/' . $photo ) ) )
            {
                File::delete( storage_path( 'app/public/service-covers/' . $photo ) );
            }

            $file = $request->file( 'photo' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/service-covers', $new_name );
        }
        else
        {
            $new_name = $service->cover;
        }

        Service::whereId($id)->update([
            'cover'=>$new_name,
            'service_name_az'=>$request->service_name_az,
            'service_name_en'=>$request->service_name_en,
            'service_less_az'=>$request->service_less_az,
            'service_less_en'=>$request->service_less_en,
            'service_more_az'=>$request->service_more_az,
            'service_more_en'=>$request->service_more_en
        ]);

        toastr()->success('Data updated successfully','Success');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::whereId($id)->first();
        $photo = $service->cover;
        if ( File::exists( storage_path( 'app/public/service-covers/' . $photo ) ) )
        {
            File::delete( storage_path( 'app/public/service-covers/' . $photo ) );
        }

        Service::whereId($id)->delete();
        toastr()->success('Data deleted successfully','Success');
        return redirect()->route('service.index');
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

        $text = $tr->translate(strip_tags($request->version_en));

        return $text;
    }

    public function frontService()
    {
        return view('Front.Pages.service',[
            'services'=>Service::all()
        ]);
    }
}
