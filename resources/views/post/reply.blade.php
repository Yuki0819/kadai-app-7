<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 返信</title>
</head>
<!-- 投稿画面 -->

<body class="">
    <x-header></x-header>
    <div class="page reply-page">
        <form class="form" action="/reply" method="post">
            @csrf
            <textarea name="replyContent" id="" cols="30" rows="5" placeholder="いまどうしてる?"></textarea>
            <div class="reply-button">
            @error('replyContent')
  <div class="mt-3">
      <p class="text-red-500">
          {{ $message }}
      </p>
  </div>
@enderror
            <button class="button-reply" type="submit">返信する</button>
        </form>
            </div>
        </form>
    </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .reply-page .form {
        display: flex;
        flex-direction: column;
    }
    
    .reply-page .reply-button {
        text-align: end;
        margin: 20px 20px 0 0;
    }
    
    .reply-page button {
        height: 35px;
        width: 90px;
    }
</style>

</html>

このファイルはpostのinede.blade.phpをコピーしています
/actionを変えています