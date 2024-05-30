<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // 新規のCommentモデルを作成する
        $comment = new Comment();

        // Commentモデルに値を設定する
        $comment->post_id = $request->get('post_id');
        $comment->comment = $request->get('comment');
        $comment->user_id = 2;

        // DBにデータを登録する
        $comment->save();
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
    public function update(UpdateRequest $request, string $id)
    {
        // IDに紐づくCommentモデルを取得する
        $comment = Comment::find($id);

        // タイトルをCommentモデルに設定する
        $comment->comment = $request->get('comment');

        // Commentテーブルを更新する
        $comment->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // IDに紐づくCommentモデルを取得する
        $comment = Comment::find($id);

        // Commentモデルから対象のレコードを削除する
        $comment->delete();
    }
}
