<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    /**
     * この投稿を投稿したユーザーを取得する
     */
    public function user()
    {
        return User::find($this->user);
    }

    /**
     * ユーザーのリプライ取得する
     */
    public function replies()
    {
        return Reply::where('postid', $this->id)
            ->where('is_deleted', false)
            ->get();
    }
}
