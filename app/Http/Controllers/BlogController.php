<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function saved(){
      $blogs = Blog::where('user_id', Auth::user()->id)
                    ->orderBy('created_at','desc')
                    ->paginate(6);
      return view('blogs.saved',['blogs'=>$blogs]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|unique:blogs|min:5|max:100',
        'isi_blog' => 'required|min:5',
        'featured_img' => 'required|max:100',
      ]);

      $blog = Blog::create([
        'title' => $request->title,
        'slug' => str_slug($request->title,'-'),
        'content' => $request->isi_blog,
        'user_id' => Auth::user()->id,
        'featured_img' => $request->featured_img,
      ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blogs.single',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $blog = Blog::findOrFail($id);
      if($blog->isOwner())
        return view('blogs.edit',compact('blog'));
      else abort(403);
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
      $this->validate($request, [
        'title' => 'required|unique:blogs|min:5|max:100',
        'isi_blog' => 'required|min:5',
        'featured_img' => 'required|max:100',
      ]);

      $blog = Blog::findOrFail($id);
      if($blog->isOwner())
        $blog->update([
          'title' => $request->title,
          'content' => $request->isi_blog,
          'featured_img' => $request->featured_img,
        ]);
      else abort(403);

        return redirect('/blog/saved')->with('msg','Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blog = Blog::findOrFail($id);
      if($blog->isOwner())
        $blog->delete();
      else abort(403);

      return redirect('/blog/saved')->with('msg','Berhasil di Hapus');
    }
}
