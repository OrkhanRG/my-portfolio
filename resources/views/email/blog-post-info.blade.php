<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Hey dostum! {{ $blog->title }} adlı yeni bloq paylaşıldı. Bloqu oxumaq üçün aşağıdakı linkə keçid edə bilərsən :)</p>
<a style="color: red" href="{{ route('front.blog-details', $blog->slug) }}">Bloqa bax</a>
</body>
</html>
