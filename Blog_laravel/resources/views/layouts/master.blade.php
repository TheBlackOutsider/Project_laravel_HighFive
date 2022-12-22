<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title')</title>

        
</head>
<body class="antialiased">
    <header>
        <div>
            <h1>The Tombstone's Blog</h1>
            <a href="/about">A propos</a>
            <a href="/articles">Articles</a>
            <a href="/contact-us">Contactez-nous</a>
        </div>
        
    </header>

    <main>
       <div class="container">
           
           @yield('_contact')
           @yield('_about')
           @yield('_articles')
           @yield('show')
           
       </div>
        
    </main>
        
        
     <footer>
        <div class="container"></div>
     </footer>   
        
</body>
</html>
