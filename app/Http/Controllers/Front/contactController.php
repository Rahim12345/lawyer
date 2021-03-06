<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class contactController extends Controller
{
    public function index()
    {
        App::setLocale(Cookie::get('lang'));
        return view('Front.Pages.contact');
    }

    public function sendEmail(Request $request)
    {
        App::setLocale(Cookie::get('lang'));
        $this->validate($request,[
            'name'=>'required|max:30',
            'email'=>'required|email',
            'subject'=>'required|max:100',
            'message'=>'required|max:10000'
        ],[],[
            'name'=>__('front_master.your_name'),
            'email'=>'Email',
            'subject'=>__('front_master.subject'),
            'message'=>__('front_master.message')
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => env('RECAPTCHA_SITE_SECRET'), 'response' => $request->recaptcha_response)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $arrResponse = json_decode($response, true);

        // verify the response
        if(!empty($arrResponse) && $arrResponse["success"] == '1' && $arrResponse["action"] == $request->action && $arrResponse["score"] >= 0.5)
        {
            Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message,
                'ip'=>\request()->ip()
            ]);

            $this->sendNotification('Yeni contact mesajınız var');

            toastr()->success('Thanks for contacting us. We will contact you ASAP!','Success');
            return redirect()->route('front.contact');
        }
        else
        {
            toastr()->error('Google thinks you are a bot','Error');
            return redirect()->route('front.contact');
        }
    }

    public function subscribe(Request $request)
    {
        App::setLocale(Cookie::get('lang'));
        $this->validate($request,[
           'email'=>'required|email|unique:subscribes,email'
        ],[],[
            'email'=>'Email'
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6LfkLJ8bAAAAAP9JkRBotrWImFYJ80O22cjl-UZL', 'response' => $request->recaptcha)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $arrResponse = json_decode($response, true);
        // verify the response
        if(!empty($arrResponse) && $arrResponse["success"] == '1' && $arrResponse["action"] == $request->action && $arrResponse["score"] >= 0.5)
        {
            Subscribe::create([
                'email'=>$request->email
            ]);

            return 'true';
        }
        else
        {
            return response()->json([
                'errors'=>[
                    'recaptcha'=>'Google thinks you are a bot'
                ]
            ],422);
        }
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
            'url'=>route('admin.notifications',['slug'=>'contact-notifications']),
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
