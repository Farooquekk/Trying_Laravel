<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - My Blog</title>
</head>
<body>
    <header>
        <h1>My Laravel Blog</h1>
        <nav>
            <ul>
                <a href="/">Home</a> |
                <a href="/about">About</a>
            </ul>
        </nav>
    </header>

    <div>
        @yield("content");
    </div>

    <footer>

        <p>&copy; 2025 My Blog. All rights reserved.</p>
        <p>Follow us on:
            <a href="https://twitter.com">Twitter</a>,
            <a href="https://facebook.com">Facebook</a>,
            <a href="https://instagram.com">Instagram</a>
        </p>
    </footer>
    
</body>
</html>