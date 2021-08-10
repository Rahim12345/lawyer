<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Pages.all-tags',[
            'tags'=>Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.new-tag');
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
           'tag_az'=>'required|max:50',
           'tag_en'=>'required|max:50'
        ],[],[
            'tag_az'=>'Tag(AZ)',
            'tag_en'=>'Tag(EN)',
        ]);

        Tag::create([
            'tag_az'=>$request->tag_az,
            'tag_en'=>$request->tag_en,
            'slug_az'=>str_slug($request->tag_az),
            'slug_en'=>str_slug($request->tag_en)
        ]);

        toastr()->success('Tag saved successfully');
        return redirect()->route('tag.index');
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
        $tag = Tag::whereId($id)->first();
        if ($tag === null)
        {
            abort(404);
        }

        return view('Admin.Pages.update-tag',[
           'tag'=>$tag
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
        $this->validate($request,[
            'tag_az'=>'required|max:50',
            'tag_en'=>'required|max:50'
        ],[],[
            'tag_az'=>'Tag(AZ)',
            'tag_en'=>'Tag(EN)',
        ]);

        Tag::whereId($id)->update([
            'tag_az'=>$request->tag_az,
            'tag_en'=>$request->tag_en,
            'slug_az'=>str_slug($request->tag_az),
            'slug_en'=>str_slug($request->tag_en)
        ]);

        toastr()->success('Tag updated successfully');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::whereId($id)->delete();

        toastr()->success('Tag deleted successfully');
        return redirect()->route('tag.index');
    }
}
