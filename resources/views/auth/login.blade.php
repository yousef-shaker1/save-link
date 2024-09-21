<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #2980b9;
        }

        .login-container a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf 
            <!-- Email Address -->
            <input type="email" name="email" placeholder="Email" required>

            <!-- Password -->
            <input type="password" name="password" placeholder="Password" required>

            <!-- Submit Button -->
            <button type="submit">Log In</button>
        </form>

        <div class="forgot-password">
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        </div>
        <a href="{{ route('register') }}">regiester?</a>
    </div>

</body>
</html>
