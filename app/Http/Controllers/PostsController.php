<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        return view('blog.index', [
            'posts' => Post::orderBy('updated_at', 'desc')->get()
        ]);
        // dd($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:posts|maz:255',
            'excerpt' => 'required',
            'body' => 'required',
            'image_path' => ['required', 'mimes:jpg,png,jpeg', 'max:5048'],
            'min_to_read' => 'min:0|max:60',
        ]);

        
       Post::create([
        'title' => $request->title,
        'excerpt' => $request->excerpt,
        'body' => $request->body,
        'image_path' => $this->storeImage($request),
        'is_published' => $request->is_published === '0',
        'min_to_read' => $request->min_to_read,
       ]);
       return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id = 1)
    {
        return view('blog.show', [
            'post'=> Post::findOrFail($id)
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('blog.edit', [
        'post' => Post::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|maz:255|unique:posts,title,' . $id,
            'excerpt' => 'required',
            'body' => 'required',
            'image_path' => ['mimes:jpg,png,jpeg', 'max:5048'],
            'min_to_read' => 'min:0|max:60',
        ]);

        Post::where('id', $id)->update($request->except(['_token', '_method']));

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        return $request->image->move(public_path('images'), $newImageName);    
    }
}
