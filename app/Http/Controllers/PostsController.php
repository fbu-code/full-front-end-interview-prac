<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function getList(Request $request)
    {
        return Post::orderBy('created_at', 'DESC')->get();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:64',
            'body' => 'required',
            'published' => 'boolean'
        ]);

        return Post::create($validated);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function edit(Request $request, $id)
    {
        return Post::find($id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric',
            'title' => 'required|string|max:64',
            'body' => 'required',
            'published' => 'boolean'
        ]);

        return Post::find($validated['id'])->update($validated);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function destroy(Request $request)
    {
        return Post::find($request->input('id'))->delete();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request, $searchTerm)
    {
        if (!$searchTerm) {
            return Post::orderBy('created_at', 'DESC')->get();
        }

        return Post::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orderBy('created_at', 'DESC')
            ->get();
    }
}
