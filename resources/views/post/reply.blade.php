<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <title>kadai-app | リプライ詳細</title>
</head>
<!-- リプライ詳細画面 -->
body class="">
<x-header></x-header>
<div class="page post-detail-page">
    <div class="post">
        <a href="/user/{{ $user->id }}">
            <div class="user-info">
                <img class="user-icon" src="{{ asset('/img/user_icon.png') }}" alt="" />
                <div class="user-name">{{ $user->name }}</div>
            </div>
        </a>
        <div class="content">{{ $post->content }}</div>
        <div class="time-stamp">{{ $post->created_at }}</div>
        @if ($isOwnPost = $loginUser->id == $user->id)
        <div class="menu">
            <div class="menu-item font-blue">
                <a href="/post/edit/{{ $post->id }}">編集</a>
            </div>
            <form name="delete" action="/post/delete/{{ $post->id }}" method="post">
                @csrf
                <div class="menu-item font-red" onclick="deletePost()">
                    削除
                </div>
            </form>
        </div>
        @endif
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="button" class="btn btn-primary">送信する</button>
            </div>
        </div>
        @foreach ($replys as $reply)
        <div class="user-info">
            <a href="/user/{{ $reply->user()->id }}">
                <img class="reply-icon" src="{{ asset('/img/user_icon.png') }}" alt="" />
                <div class="user">{{ $reply->user()->name }}
            </a>
        </div>
    </div>
    <div class="content">
        <a href="/post/reply/{{ $reply->user()->id }}">
            <div class="reply-content">{{ $reply->content }}</div>
            <div class="reply-time-stamp">{{ $reply->created_at }}</div>
        </a>
    </div>
    @endforeach
</div>
</body>

<x-footer></x-footer>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    function deletePost() {
        if (confirm("削除しますか?")) {
            document.delete.submit();

        }
    }
</script>
<style scoped>
    .post-detail-page .user-icon {
        width: 75px;
        height: 75px;
    }

    .post-detail-page .reply-icon {
        width: 50px;
        height: 50px;
    }

    .post-detail-page .user-info {
        display: flex;
    }

    .post-detail-page .user-name {
        line-height: 75px;
        font-size: 20px;
    }

    .post-detail-page .user {
        line-height: 50px;
        font-size: 18px;
    }

    .post-detail-page .time-stamp {
        text-align: end;
        font-size: 14px;
    }

    .post-detail-page .reply-time-stamp {
        text-align: end;
        padding: 0 10px;
        font-size: 14px;
    }

    .post-detail-page .post {
        padding: 0 10px;
        font-size: 18px;
    }

    .post-detail-page .reply-content {
        padding: 0 10px;
    }

    .post-detail-page .menu {
        display: flex;
        justify-content: end;
    }

    .post-detail-page .menu-item {
        font-size: 16px;
        margin: 0 2px;
    }

    .post-detail-page .menu-item {
        font-size: 16px;
        margin: 0 2px;
    }

    .post-detail-page .menu-item {
        font-size: 16px;
        margin: 0 2px;
    }

    .post-detail-page .content {
        word-wrap: break-word;
    }
</style>

</html>