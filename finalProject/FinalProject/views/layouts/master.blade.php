<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delicious Plates - Home</title>
    <link rel="stylesheet" href="{{asset('/style.css')}}">
</head>
<body>
<div class="main">
    <header class="main-header">
        <h1>Delicious Plates</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/index" class="active">Home</a></li>
            <li><a href="/recipe">Featured Recipe</a></li>
            <li><a href="/gallery">Photo Gallery</a></li>
            <li style="border: none;"><a href="/link">Links</a></li>
        </ul>
    </nav>
    <div class="main-content">
        <div class="sub-content">
    @yield('content')
        </div>
    </div>
</div>
@yield('js')
</body>
</html>