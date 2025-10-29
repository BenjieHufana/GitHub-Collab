<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #fafafa; }
        h2 { margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        a, button { padding: 6px 12px; text-decoration: none; border: 1px solid #ccc; background: #f8f8f8; cursor: pointer; }
        a:hover, button:hover { background: #e0e0e0; }
        form { max-width: 400px; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 6px; margin-top: 3px; border: 1px solid #ccc; }
        .actions { display: flex; gap: 5px; }
    </style>
</head>
<body>
    <h2>@yield('title')</h2>
    <div>
        @yield('content')
    </div>
</body>
</html>
