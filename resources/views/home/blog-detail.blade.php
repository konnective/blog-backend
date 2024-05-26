<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/blog-detail.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <title>Testing</title>
</head>

<body>
    <div class="nav"></div>
    <div class="blog-detail">
        <div class="blog-detail-wrapper">
            <div class="blog-category">
                <h4>Technology and analytics </h4>
            </div>
            <div class="blog-title">
                <h1>
                    How People Are Really Using GenAI
                </h1>
            </div>
            <div class="blog-author">
                <h3> by

                    Marc Zao-Sanders

                </h3>
            </div>
            <div class="blog-publish-date">
                <h5>March 19, 2024 </h5>
            </div>
            <div class="blog-subtitle">
                <p>

                    There are many use cases for generative AI, spanning a vast number of areas of domestic and work
                    life. Looking through thousands of comments on sites such as Reddit and Quora, the author’s team
                    found that the use of this technology is as wide-ranging as the problems we encounter in our lives.
                    The 100 categories they identified can be divided into six top-level themes, which give an immediate
                    sense of what generative AI is being used for: Technical Assistance & Troubleshooting (23%), Content
                    Creation & Editing (22%), Personal & Professional Support (17%), Learning & Education (15%),
                    Creativity & Recreation (13%), Research, Analysis & Decision Making (10%).</p>
            </div>
            <div class="blog-img">
                <img src="{{ asset('storage/blog_img1.jpeg') }}" alt="">
            </div>
            <div class="blog-description">{{ $description }}</div>
        </div>
        <div class="recent-posts"></div>

    </div>
</body>

</html>
