<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\TagBlogCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Yajra\DataTables\DataTables;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Blog::latest()
                ->get();

            return DataTables::of($data)

                ->editColumn('photo', function ($row) {
                    return '<img style="width:50px;height:50px" src="'.config('app.url').'storage/blog-covers/'.$row->photo.'" alt="'.$row->title_en.'" />';
                })

                ->addColumn('status',function ($row){
                    return $row->show != 1 ? '<span style="cursor: pointer" data-id="'.$row->id.'" class="badge bg-danger switcher">gizlidir</span>' : '<span style="cursor: pointer" data-id="'.$row->id.'" class="badge bg-success switcher">görünür</span>';
                })

                ->addColumn('action',function ($row){
                    return '
                    <div class="btn-list flex-nowrap">
                        <a href="'.route('admin.blog.delete',$row->id).'" class="btn btn-danger">
                          <i class="fa fa-times"></i>
                        </a>
                        <a class="btn btn-info"
                        href="'.route('blog.edit',[$row->id]).'"><i class="fa fa-edit"></i></a>
                    </div>
                    ';
                })

                ->rawColumns(['photo','action','status'])

                ->make(true);
        }

        return view('Admin.Pages.all-blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.new-blog',[
            'kateqoriyas'=>Category::all(),
            'tags'=>Tag::all()
        ]);
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
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            'kateqoriyas'=>['required',Rule::in(Category::pluck('id')->toArray())],
            'tags'=>'required|array',
            'tags.*'=>['required',Rule::in(Tag::pluck('id')->toArray())],
            'title_az'=>'required|max:100',
            'title_en'=>'required|max:100',
            'blog_az'=>'required|max:5000',
            'blog_en'=>'required|max:5000',
        ],[],[
            'photo'=>'Banner (780x400 - optional)',
            'kateqoriyas'=>'Kateqoriyalar',
            'tags'=>'Taglar',
            'title_az'=>'Title(AZ)',
            'title_en'=>'Title(EN)',
            'blog_az'=>'Blog(AZ)',
            'blog_en'=>'Blog(EN)',
        ]);

        $file = $request->file( 'photo' );

        $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
        $extention = $file->getClientOriginalExtension();
        $new_name  = $filename . '-' . time() . '.' . $extention;

        $file->storeAs( 'public/blog-covers', $new_name );

        Blog::create([
            'photo'=>$new_name,
            'category_id'=>$request->kateqoriyas,
            'title_az'=>$request->title_az,
            'slug_az'=>str_slug($request->title_az),
            'title_en'=>$request->title_en,
            'slug_en'=>str_slug($request->title_en),
            'blog_az'=>$request->blog_az,
            'blog_en'=>$request->blog_en
        ]);

        $blog = Blog::orderBy('id','desc')->first();

        foreach ($request->tags as $tag)
        {
            TagBlogCenter::create([
                'blog_id'=>$blog->id,
                'tag_id'=>$tag
            ]);
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
        $blog = Blog::whereId($id)->first();
        if ($blog === null)
        {
            abort(404);
        }

        return view('Admin.Pages.update-blog',[
            'blog'=>$blog,
            'kateqoriyas'=>Category::all(),
            'tags'=>Tag::all(),
            'existTags'=>array_values($blog->getTags->pluck('tag_id')->toArray())
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function upload(Request $request)
    {
        if ( $request->hasFile( 'upload' ) )
        {
            $file = $request->file( 'upload' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/blogs', $new_name );

            $CKEditorFuncNum = $request->input( 'CKEditorFuncNum' );
            $url             = asset( 'storage/blogs/' . $new_name );
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

    public function myUpdate(Request $request)
    {
        $blog = Blog::whereId($request->blog_id)->first();
        if ($blog === null)
        {
            return response()->json([
                'errors'=>[
                    'data'=>'Data not found'
                ]
            ],422);
        }

        $this->validate($request,[
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072',
            'kateqoriyas'=>['required',Rule::in(Category::pluck('id')->toArray())],
            'tags'=>'required|array',
            'tags.*'=>['required',Rule::in(Tag::pluck('id')->toArray())],
            'title_az'=>'required|max:100',
            'title_en'=>'required|max:100',
            'blog_az'=>'required|max:5000',
            'blog_en'=>'required|max:5000',
        ],[],[
            'photo'=>'Banner (780x400 - optional)',
            'kateqoriyas'=>'Kateqoriyalar',
            'tags'=>'Taglar',
            'title_az'=>'Title(AZ)',
            'title_en'=>'Title(EN)',
            'blog_az'=>'Blog(AZ)',
            'blog_en'=>'Blog(EN)',
        ]);

        if ( $request->hasFile( 'photo' ) )
        {
            $photo = $blog->photo;
            if ( File::exists( storage_path( 'app/public/blog-covers/' . $photo ) ) )
            {
                File::delete( storage_path( 'app/public/blog-covers/' . $photo ) );
            }

            $file = $request->file( 'photo' );

            $filename  = pathinfo( $file->getClientOriginalName(), PATHINFO_FILENAME );
            $extention = $file->getClientOriginalExtension();
            $new_name  = $filename . '-' . time() . '.' . $extention;

            $file->storeAs( 'public/blog-covers', $new_name );
        }
        else
        {
            $new_name = $blog->photo;
        }

        TagBlogCenter::where('blog_id',$blog->id)->delete();

        foreach ($request->tags as $tag)
        {
            TagBlogCenter::create([
                'blog_id'=>$blog->id,
                'tag_id'=>$tag
            ]);
        }

        Blog::whereId($request->blog_id)->update([
            'photo'=>$new_name,
            'category_id'=>$request->kateqoriyas,
            'title_az'=>$request->title_az,
            'title_en'=>$request->title_en,
            'blog_az'=>$request->blog_az,
            'blog_en'=>$request->blog_en
        ]);
    }

    public function myDelete($id)
    {
        $blog = Blog::whereId($id)->first();
        if ($blog === null)
        {
            abort(404);
        }
        $photo = $blog->photo;
        if ( File::exists( storage_path( 'app/public/blog-covers/' . $photo ) ) )
        {
            File::delete( storage_path( 'app/public/blog-covers/' . $photo ) );
        }

        Blog::whereId($id)->delete();
        toastr()->success('Data deleted successfully','Success');
        return redirect()->route('blog.index');
    }

    public function switcher(Request $request)
    {
        $this->validate($request,[
           'id'=>['required',Rule::in(Blog::pluck('id')->toArray())]
        ]);

        $blog = Blog::whereId($request->id)->first();
        $blog->show ? $blog->show = 0 : $blog->show = 1;
        $blog->save();
    }

    public function frontIndex()
    {
        App::setLocale(Cookie::get('lang'));
        return view('Front.Pages.blogs',[
            'blogs'=>Blog::where('show',1)->orderBy('id','desc')->paginate(10),
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }

    public function frontSingle($slug)
    {
        App::setLocale(Cookie::get('lang'));
        if (\app()->getLocale() == 'az')
        {
            $blog = Blog::where('slug_az',$slug)->first();
            if ($blog === null)
            {
                $blog = Blog::where('slug_en',$slug)->first();
                if ($blog === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.single.blog',$blog->slug_az);
                }
            }
        }
        else
        {
            $blog = Blog::where('slug_en',$slug)->first();
            if ($blog === null)
            {
                $blog = Blog::where('slug_az',$slug)->first();
                if ($blog === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.single.blog',$blog->slug_en);
                }
            }
        }

        return view('Front.Pages.single-blog',[
            'blog'=>$blog,
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }

    public function Category($slug)
    {
        App::setLocale(Cookie::get('lang'));
        if (\app()->getLocale() == 'az')
        {
            $category = Category::where('slug_az',$slug)->first();
            if ($category === null)
            {
                $category = Category::where('slug_en',$slug)->first();
                if ($category === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.category',$category->slug_az);
                }
            }
        }
        else
        {
            $category = Category::where('slug_en',$slug)->first();
            if ($category === null)
            {
                $category = Category::where('slug_az',$slug)->first();
                if ($category === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.category',$category->slug_en);
                }
            }
        }

        return view('Front.Pages.blogs',[
            'blogs'=>Blog::where('category_id',$category->id)->where('show',1)->orderBy('id','desc')->paginate(10),
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }

    public function Tag($slug)
    {
        App::setLocale(Cookie::get('lang'));
        if (\app()->getLocale() == 'az')
        {
            $tag = Tag::where('slug_az',$slug)->first();
            if ($tag === null)
            {
                $tag = Tag::where('slug_en',$slug)->first();
                if ($tag === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.tag',$tag->slug_az);
                }
            }
        }
        else
        {
            $tag = Category::where('slug_en',$slug)->first();
            if ($tag === null)
            {
                $tag = Tag::where('slug_az',$slug)->first();
                if ($tag === null)
                {
                    abort(404);
                }
                else
                {
                    return redirect()->route('front.tag',$tag->slug_en);
                }
            }
        }

        $blog_ids = TagBlogCenter::where('tag_id',$tag->id)->pluck('blog_id')->toArray();
        $blog_ids = array_unique($blog_ids);

        return view('Front.Pages.blogs',[
            'blogs'=>Blog::whereIn('id',$blog_ids)->where('show',1)->orderBy('id','desc')->paginate(10),
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }

    public function Search(Request $request)
    {
        $this->validate($request,[
           'word'=>'required|min:3|max:30'
        ]);
        App::setLocale(Cookie::get('lang'));

        if (\app()->getLocale() == 'az')
        {
            $blogs = Blog::where('title_az','like','%'.$request->word.'%')->take(5)->get();
        }
        else
        {
            $blogs = Blog::where('title_en','like','%'.$request->word.'%')->take(5)->get();
        }

        $output = '<ul style="list-style: none;padding-left: 10px">';
        if (count($blogs) === 0)
        {
            $output .= '<li class="search-element">'.__('blog.data_not_found').'</li>';
        }
        else
        {
            if (\app()->getLocale() == 'az')
            {
                foreach ($blogs as $blog)
                {
                    $output .= '<li class="search-element"><a href="'.route('front.single.blog',$blog->slug_az).'"><img style="width:35px;height:35px" src="'.asset('storage/blog-covers/'.$blog->photo).'" /> '.$blog->title_az.'</a></li>';
                }
            }
            else
            {
                foreach ($blogs as $blog)
                {
                    $output .= '<li class="search-element"><a href="'.route('front.single.blog',$blog->slug_en).'"><img style="width:35px;height:35px" src="'.asset('storage/blog-covers/'.$blog->photo).'" /> '.$blog->title_en.'</a></li>';
                }
            }
        }
        $output .= '</ul>';

        return $output;
    }
}
