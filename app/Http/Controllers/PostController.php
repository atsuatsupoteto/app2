<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\updateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 投稿を取得する
        $posts = Post::get();

        // 取得した投稿を返却する
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // 新規のPostモデルを作成する
        $post = new Post();

        // タイトルをPostモデルに設定する
        $post->title = $request->get('title');
        $post->delete_flg = false;
        $post->user_id = 2;

        // DBにデータを登録する
        $post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRequest $request, string $id)
    {
        // IDに紐づくPostモデルを取得する
        $post = Post::find($id);

        // タイトルをPostモデルに設定する
        $post->title = $request->get('title');

        // Postデータベースを更新する
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
