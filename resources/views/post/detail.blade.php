<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />
    <title>kadai-app | 投稿詳細</title>
</head>
<!-- 投稿詳細画面 -->

<body class="">
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
        </div>
        <div class="user">{{ $reply->user()->name }}</div>
        <div class="content">{{ $reply->content }}</div>
        <div class="time-stamp">{{ $reply->created_at }}</div>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="button" class="btn btn-primary">送信する</button>
            </div>
        </div>
    </div>
    </div>
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
        width: 50px;
        height: 50px;
    }

    .post-detail-page .user-info {
        display: flex;
    }

    .post-detail-page .user-name {
        line-height: 50px;
        font-size: 18px;
    }

    .post-detail-page .time-stamp {
        text-align: end;
        font-size: 14px;
    }

    .post-detail-page .post {
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