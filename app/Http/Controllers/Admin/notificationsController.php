<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class notificationsController extends Controller
{
    public function index($slug)
    {
        return view('Admin.Pages.notifications',[
            'slug'=>$slug
        ]);
    }

    public function show($id)
    {
        $notification = Contact::whereId($id)->first();
        if ($notification === null)
        {
            toastr()->error(__('admin_contact.data_not_found'),__('admin_contact.error'));
            return redirect()->back();
        }
        else
        {
            Contact::whereId($id)->update([
               'read_unread'=>1
            ]);
            return view('Admin.Pages.single-notification',[
                'notification'=>$notification
            ]);
        }
    }
}
