<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 36px;
            color: #333;
        }

        .button {
            display: inline-block;
            width: 180px;
            padding: 15px;
            margin: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }

        .button.register {
            background-color: #2ecc71;
        }

        .button.register:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome!</h1>
        <a href="{{ route('login') }}" class="button login">Login</a>
        <a href="{{ route('register') }}" class="button register">Register</a>
    </div>

</body>
</html>
