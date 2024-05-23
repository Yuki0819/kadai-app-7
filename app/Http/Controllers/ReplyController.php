<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller,
    Session;
    use Illuminate\Support\Facades\Validator;
    
    

class ReplyController extends Controller
{
    /**
     * 投稿画面遷移
     */
    function create()
    {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // 画面表示
        return view('post.index');
    }

    /**
     * 投稿処理
     */
    function store(Request $request)
    {
        // セッションにログイン情報があるか確認
        if (!Session::exists('user')) {
            // ログインしていなければログインページへ
            return redirect('/login');
        }

        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');

$rules = [
    'postContent' => 'min:1|max:140',
];

$messages = ['min' => '入力してください。', 'max' => '140文字以下にしてください。'];

Validator::make($request->all(), $rules, $messages)->validate();


        
        // データ登録
        $post = new Post;
        $post->user = $loginUser->id;
        $post->content = $request->postContent;
        $post->save();

        return redirect('/');
    }

}