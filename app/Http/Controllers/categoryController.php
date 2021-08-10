<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Pages.all-categories',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.new-category');
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
            'category_az'=>'required|max:50',
            'category_en'=>'required|max:50'
        ],[],[
            'category_az'=>'Kateqoriya(AZ)',
            'category_en'=>'Kateqoriya(EN)',
        ]);

        Category::create([
            'category_az'=>$request->category_az,
            'category_en'=>$request->category_en,
            'slug_az'=>str_slug($request->category_az),
            'slug_en'=>str_slug($request->category_en)
        ]);

        toastr()->success('Category saved successfully');
        return redirect()->route('category.index');
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
        $category = Category::whereId($id)->first();
        if ($category === null)
        {
            abort(404);
        }

        return view('Admin.Pages.update-category',[
            'category'=>$category
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
            'category_az'=>'required|max:50',
            'category_en'=>'required|max:50'
        ],[],[
            'category_az'=>'Kateqoriya(AZ)',
            'category_en'=>'Kateqoriya(EN)',
        ]);

        Category::whereId($id)->update([
            'category_az'=>$request->category_az,
            'category_en'=>$request->category_en,
            'slug_az'=>str_slug($request->category_az),
            'slug_en'=>str_slug($request->category_en)
        ]);

        toastr()->success('Category updated successfully');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::whereId($id)->delete();

        toastr()->success('Category deleted successfully');
        return redirect()->route('category.index');
    }
}
