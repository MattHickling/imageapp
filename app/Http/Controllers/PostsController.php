<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        return view('blog.index', [
            'posts' => Post::orderBy('updated_at', 'desc')->paginate(20)
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
    public function store(PostFormRequest $request)
    {

        $request->validated();

        
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
    public function update(PostFormRequest $request, string $id)
    {

        $request->validated();

        Post::where('id', $id)->update($request->except(['_token', '_method']));

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return redirect(route('blog.index'))->with('message', "Post has been deleted.");
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        return $request->image->move(public_path('images'), $newImageName);    
    }
}
