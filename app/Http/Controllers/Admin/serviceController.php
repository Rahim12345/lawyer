<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
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
            'service_less_az'=>'required|max:190',
            'service_less_en'=>'required|max:190',
            'service_more_az'=>'required|max:20000',
            'service_more_en'=>'required|max:20000',
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
            'service_more_en'=>$request->service_more_en,
            'slug'=>str_slug($request->service_name_en)
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
            'service_less_az'=>'required|max:190',
            'service_less_en'=>'required|max:190',
            'service_more_az'=>'required|max:20000',
            'service_more_en'=>'required|max:20000',
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
            'service_more_en'=>$request->service_more_en,
            'slug'=>str_slug($request->service_name_en)
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
        App::setLocale(Cookie::get('lang'));
        return view('Front.Pages.service',[
            'services'=>Service::all()
        ]);
    }

    public function frontSingleService($slug)
    {
        App::setLocale(Cookie::get('lang'));
        $service = Service::where('slug',$slug)->first();
        if ($service === null)
        {
            abort();
        }

        return view('Front.Pages.single-service',[
           'service'=>$service
        ]);
    }

    public function getFreeCaseEvaluation(Request $request)
    {
        App::setLocale(Cookie::get('lang'));

        $this->validate($request,[
            'appointment_name'=>'required|max:50',
            'appointment_email'=>'required|max:50',
            'appointment_phone'=>'required|max:50',
            'appointment_date'=>'required|max:50',
            'appointment_clock'=>['required',Rule::in(['9.01-12.00','12.01-15.00','15.01-11.00'])],
            'appointment_service'=>['required',Rule::in(Service::pluck('id')->toArray())],
            'appointment_message'=>'required|max:5000',
        ],[],[
            'appointment_name'=>__('front_master.your_name'),
            'appointment_email'=>__('login.email'),
            'appointment_phone'=>__('front_master.phone'),
            'appointment_date'=>__('front_about.select_day'),
            'appointment_clock'=>__('front_about.select_time'),
            'appointment_service'=>__('front_about.service_required'),
            'appointment_message'=>__('front_master.message'),
        ]);

        Evaluation::create([
            'name'=>$request->appointment_name,
            'email'=>$request->appointment_email,
            'phone'=>$request->appointment_phone,
            'date'=>$request->appointment_date,
            'clock'=>$request->appointment_clock,
            'service_id'=>$request->appointment_service,
            'message'=>$request->appointment_message
        ]);

        $this->sendNotification('Görüş üçün yeni mesajınız var');
    }

    public function sendNotification($message)
    {
        $content      = array(
            "en" => $message
        );

        $fields = array(
            'app_id' => env('ADMIN_ONE_SIGNAL_APP_ID'),
            'included_segments' => array(
                'Subscribed Users'
            ),
            'url'=>route('admin.notifications',['slug'=>'free-evaluation-notifications']),
            'contents' => $content,
        );

        $fields = json_encode($fields);


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic '.env('ADMIN_ONE_SIGNAL_AUTHORIZE')
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
