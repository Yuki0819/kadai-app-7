<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Http\Controllers\Controller,
    Session;
use Illuminate\Support\Facades\Validator;



class ReplyController extends Controller {};
/**
 * 投稿詳細画面遷移
 */
function show($id)
{
    // 指定したIDの投稿情報を取得する
    $reply = Reply::find($id);

    // 投稿が存在するか判定
    if ($reply == null) {
        return dd('存在しない投稿です');
    }

    // 投稿者を取得
    $user = $reply->user();

    $isOwnReply = false;

    // セッションにログイン情報があるか確認
    if (Session::exists('user')) {
        // ログイン中のユーザーの情報を取得する
        $loginUser = Session::get('user');
        // 自分自身の投稿ページか判定
        $isOwnReply = $loginUser->id == $user->id;
    }

    // 画面表示
    return view('post.reply', compact('reply', 'user', 'isOwnReply', 'loginUser'));
}
