<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #fce4ec, #f3e5f5, #e8eaf6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 2rem;
            padding: 3.5rem;
            max-width: 520px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08), 0 0 0 1px rgba(255, 255, 255, 0.5);
        }
        .emoji { font-size: 4rem; margin-bottom: 1rem; }
        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 0.5rem;
        }
        p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
        }
        .btn {
            display: inline-block;
            padding: 0.8rem 2.5rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
        }
        .links {
            margin-top: 2rem;
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            font-size: 0.9rem;
        }
        .links a {
            color: #888;
            text-decoration: none;
            transition: color 0.2s;
        }
        .links a:hover { color: #667eea; }
    </style>
</head>
<body>
    <div class="card">
        <div class="emoji">🌸</div>
        <h1>Hello, World!</h1>
        <p>Welcome to your Laravel app!<br>You're all set to build something amazing.</p>
        <a href="https://laravel.com/docs" class="btn" target="_blank">Get Started</a>
        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</body>
</html>
