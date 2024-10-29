<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reply;
use DateTime;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reply::create([
            'user' => '1',
            'postid' => '1',
            'content' => '完璧だ',
            'created_at' => new DateTime('2020-11-01 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '2',
            'content' => 'それは、すべてのバグ、というものです',
            'created_at' => new DateTime('2020-11-02 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '3',
            'content' => '謝るほうが簡単だから',
            'created_at' => new DateTime('2020-11-03 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '4',
            'content' => 'とても高速にとても正確な',
            'created_at' => new DateTime('2020-11-04 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '5',
            'content' => 'バグが無い。',
            'created_at' => new DateTime('2020-11-05 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '6',
            'content' => '悪いプログラマーは、主張します。',
            'created_at' => new DateTime('2020-11-06 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '7',
            'content' => 'プログラムを書くことです。',
            'created_at' => new DateTime('2020-11-07 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '8',
            'content' => '動くと思うぜ',
            'created_at' => new DateTime('2020-11-08 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '9',
            'content' => 'シンプルで保て。',
            'created_at' => new DateTime('2020-11-09 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '10',
            'content' => '美徳をよく知っている。もちろんこの三つ、怠惰、短気、傲慢。',
            'created_at' => new DateTime('2020-11-10 00:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '11',
            'content' => 'やるべきである',
            'created_at' => new DateTime('2020-11-01 01:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '12',
            'content' => 'ない',
            'created_at' => new DateTime('2020-11-03 02:00:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '13',
            'content' => 'より難しい',
            'created_at' => new DateTime('2020-11-03 02:30:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '14',
            'content' => '恐れるな',
            'created_at' => new DateTime('2020-11-04 00:10:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '15',
            'content' => 'ケーキを焼くようなもの。',
            'created_at' => new DateTime('2020-11-05 03:10:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '16',
            'content' => '好きだ',
            'created_at' => new DateTime('2020-11-06 10:10:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '17',
            'content' => '耳の痛いとを言ったら、耳を傾けるべき',
            'created_at' => new DateTime('2020-11-07 05:20:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '18',
            'content' => '解雇されました',
            'created_at' => new DateTime('2020-11-08 00:10:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '19',
            'content' => 'これまで働くだけだ',
            'created_at' => new DateTime('2020-11-08 00:11:00'),
        ]);
        Reply::create([
            'user' => '1',
            'postid' => '20',
            'content' => '最後には破壊する',
            'created_at' => new DateTime('2020-11-10 20:14:00'),
        ]);
    }
}
