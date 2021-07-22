<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attorney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class vekilController extends Controller
{
    public function index()
    {
        return view('Admin.Pages.attorneys',[
            'attorneys'=>Attorney::all()
        ]);
    }

    public function create()
    {
        return view('Admin.Pages.new-attorney');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=285,height=300',
            'name' => 'required|max:50',
            'job' => 'required|max:50',
            'tel' => 'required|max:50',
            'email' => 'required|email',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'youtube' => 'required|url',
        ]);

        $file = $request->file( 'photo' );

        $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
        $extention = $file->getClientOriginalExtension();
        $new_name  = $filename . '-' . time() . '.' . $extention;

        $file->storeAs( 'public/attorneys', $new_name );

        Attorney::create([
            'photo'=>$new_name,
            'name_lastname'=>$request->name,
            'job'=>$request->job,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'twitter'=>$request->twitter,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
        ]);

        toastr()->success('Data recorded successfully','Success');
        return redirect()->route('admin.vekiller.index');
    }

    public function delete(Request $request)
    {
        $this->validate($request,[
            'id'=>['required',Rule::in(Attorney::get()->pluck('id')->toArray())]
        ]);

        $attorney = Attorney::whereId($request->id)->first();

        if ( File::exists( storage_path( 'app/public/attorneys/' . $attorney->photo ) ) )
        {
            File::delete( storage_path( 'app/public/attorneys/' . $attorney->photo ) );
        }
        Attorney::whereId($request->id)->delete();

        toastr()->success('Data deleted successfully','Success');
        return redirect()->route('admin.vekiller.index');
    }

    public function edit($id)
    {
        $attorney = Attorney::whereId($id)->first();

        if ($attorney === null)
        {
            abort(404);
        }

        return view('Admin.Pages.update-attorney',[
            'attorney'=>$attorney
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'attorney_id' => ['required',Rule::in(Attorney::get()->pluck('id')->toArray())],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072|dimensions:width=285,height=300',
            'name' => 'required|max:50',
            'job' => 'required|max:50',
            'tel' => 'required|max:50',
            'email' => 'required|email',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'youtube' => 'required|url',
        ]);

        $attorney = Attorney::whereId($request->attorney_id)->first();
        if ( $request->hasFile( 'photo' ) )
        {
            $photo = $attorney->photo;
            if ( File::exists( storage_path( 'app/public/attorneys/' . $photo ) ) )
            {
                File::delete( storage_path( 'app/public/attorneys/' . $photo ) );
            }

            $file = $request->file( 'photo' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/attorneys', $new_name );
        }
        else
        {
            $new_name = $attorney->photo;
        }

        Attorney::whereId($request->attorney_id)->update([
            'photo'=>$new_name,
            'name_lastname'=>$request->name,
            'job'=>$request->job,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'twitter'=>$request->twitter,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'youtube'=>$request->youtube,
        ]);

        toastr()->success('Data updated successfully','Success');
        return redirect()->route('admin.vekiller.index');
    }

    public function vekiller()
    {
        return view('Front.Pages.attorneys',[
            'attorneys'=>Attorney::all()
        ]);
    }
}
