<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function showAll()
    {
        $blogs = $this->blog->paginate(5);
        return view('blog.index', compact('blogs'));
    }

    public function showFormAdd()
    {
        return view('blog.formAdd');
    }

    public function add(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->category = $request->category;
        $blog->date = $request->date;
        $blog->save();

        return redirect()->route('blog.list');
    }

    public function delete($id)
    {
        $blog = $this->blog->findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.list');
    }

    public function showFormEdit($id)
    {
        $blog = $this->blog->findOrFail($id);
        return view("blog.formEdit", compact('blog'));
    }

    public function edit(Request $request, $id)
    {
        $blog = $this->blog->findOrFail($id);
        $blog->name = $request->name;
        $blog->category = $request->category;
        $blog->date = $request->date;
        $blog->save();
        return redirect()->route('blog.list');
    }

    public function search(Request $request){
        if ($request->ajax()){
            $blogs = Blog::where('name','LIKE',"%$request->search%")->paginate(5);
            return response()->json($blogs);
        }


    }
}
