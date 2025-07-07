<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warehouse App Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 48px;
            color: #333;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .btn-signin {
            background-color: #007BFF;
            color: white;
        }

        .btn-signin:hover {
            background-color: #0056b3;
        }

        .btn-signup {
            background-color: #28a745;
            color: white;
        }

        .btn-signup:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Warehouse App</h1>
        <a href="{{ route('login') }}" class="btn btn-signin">Sign In</a>
        <a href="{{ route('register') }}" class="btn btn-signup">Sign Up</a>
    </div>
</body>
</html>