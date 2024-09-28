<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!--Googleフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Blog Name</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class='title'>
            <h2>Title</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
            <p class="title_error" style="color: red;">{{ $errors->first('post.title') }}</p>
        </div> 
        <div class="body">
            <h2>Body</h2>
            <textarea name="post[body]" placeholder="今日も一日お疲れ様でした。">{{ old('post.body') }}</textarea>
            <p class="body_error" style="color: red;">{{ $errors->first('post.body') }}</p>
        </div>
        <input type="submit" value="保存"/>
    </form>

    <footer>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </footer>

</body>
</html>