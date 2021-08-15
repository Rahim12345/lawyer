<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class notificationsController extends Controller
{
    public function index($slug)
    {
        return view('Admin.Pages.notifications',[
            'slug'=>$slug
        ]);
    }

    public function show($type,$id)
    {
        if ($type == 'contact')
        {
            $notification = Contact::whereId($id)->first();
        }
        else
        {
            $notification = Evaluation::whereId($id)->first();
        }

        if ($notification === null)
        {
            toastr()->error(__('admin_contact.data_not_found'),__('admin_contact.error'));
            return redirect()->back();
        }
        else
        {
            if ($type == 'contact')
            {
                Contact::whereId($id)->update([
                    'read_unread'=>1
                ]);
            }
            else
            {
                Evaluation::whereId($id)->update([
                    'read_unread'=>1
                ]);
            }
            return view('Admin.Pages.single-notification',[
                'type'=>$type,
                'notification'=>$notification
            ]);
        }
    }
}
