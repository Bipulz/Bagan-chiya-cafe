<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagan Chiya Cafe Admin - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e0f0e0 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #2c3e50;
        }

        .login-container {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 1.5rem;
        }

        .login-header i {
            font-size: 1.5em;
            color: #2f7b3e;
        }

        .login-header h1 {
            font-size: 1.8em;
            font-weight: 700;
            color: #2f7b3e;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            text-align: left;
        }

        .form-group label {
            font-size: 1rem;
            font-weight: 500;
            color: #2c3e50;
        }

        .form-group input {
            padding: 12px 15px;
            font-size: 1rem;
            border: 1px solid #d1e8d4;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus {
            border-color: #2f7b3e;
            box-shadow: 0 0 8px rgba(47, 123, 62, 0.2);
        }

        .form-group input::placeholder {
            color: #94a3b8;
        }

        .login-button {
            padding: 12px;
            background: linear-gradient(180deg, #4a9c5c 0%, #2f7b3e 100%);
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-button:hover {
            background: linear-gradient(180deg, #2f7b3e 0%, #1e3a2e 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(47, 123, 62, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(47, 123, 62, 0.2);
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 1.5rem;
                max-width: 90%;
            }

            .login-header h1 {
                font-size: 1.5em;
            }

            .form-group input {
                padding: 10px 12px;
                font-size: 0.95rem;
            }

            .login-button {
                padding: 10px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-leaf"></i>
            <h1>Bagan Chiya Cafe Admin</h1>
        </div>
        <form class="login-form" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>

</html>
