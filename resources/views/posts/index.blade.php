<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- headの内容 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Google Fontsの読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>
    <!--bodyの内容-->
    <header>
        <h1>Blog Name</h1>
    </header>

    <main>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class="title">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class="body">{{ $post->body }}</p>
                </div>
            @endforeach        
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>

    </main>
        
</body>
</html>