<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Reply extends Model
{
    use HasFactory;

    /**
     * この投稿にリプライしたユーザーを取得する
     */
    public function reply() {}

    /**
     * この投稿を投稿したユーザーを取得する
     */
    public function user()
    {
        return User::find($this->user);
    }
}
