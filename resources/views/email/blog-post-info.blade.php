</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Blog Yayını!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: #333;
        }
        .blog-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .blog-card img {
            width: 100%;
            height: auto;
        }
        .blog-card .content {
            padding: 15px;
        }
        .blog-card h2 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #333;
        }
        .blog-card p {
            font-size: 16px;
            color: #666;
            line-height: 1.5;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Yeni Bloq Elanı!</h1>
    </div>
    <div class="blog-card">
        <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}">
        <div class="content">
            <h2>{{ $blog->title }}</h2>
            <p>{{ \Illuminate\Support\Str::limit($blog->detail, 150) }}</p>
            <a href="{{ route('front.blog-details', $blog->slug) }}" class="btn">Davamını Oxu</a>
        </div>
    </div>
    <div class="footer">
        <p>Bu e-mail avtomatik olaraq göndərilmişdir. <br> portfolioma abunə olduğunuz üçün təşəkkür edirəm!</p>
    </div>
</div>
</body>
</html>

