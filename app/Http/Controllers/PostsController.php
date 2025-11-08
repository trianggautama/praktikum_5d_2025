<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        Posts::create($input);
        return redirect()->route('dashboard')->with('success','data berhasil ditambah');
    }

    public function edit($id)
    {
        $post = Posts::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $input  = $request->all();
        $post   = Posts::find($id);
        $post->update($input);

        return redirect()->route('dashboard')->with('success','data berhasil diupdate');
    }

    public function delete($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect()->route('dashboard')->with('success','data berhasil dihapus');
    }
}
