<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e3c4e8 0%, #b892c9 45%, #6a4c82 100%);
            padding: 20px;
        }
        .card {
            width: 100%;
            max-width: 380px;
            background: rgba(255, 255, 255, 0.45);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 28px;
            padding: 40px 32px;
            box-shadow: 0 20px 40px rgba(92, 45, 114, 0.2);
            text-align: center;
        }
        .top-link {
            margin-bottom: 22px;
        }
        .pill-tag {
            display: inline-block;
            padding: 5px 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.65);
            color: #522763;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease;
        }
        .pill-tag:hover {
            background: rgba(255, 255, 255, 0.95);
        }
        .title {
            color: #3b1d4a;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 28px;
        }
        .input-box {
            margin-bottom: 14px;
        }
        .input-box input {
            width: 100%;
            padding: 13px 20px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            background: rgba(106, 68, 126, 0.15);
            color: #2e153b;
            font-size: 14px;
            outline: none;
            transition: all 0.25s ease;
        }
        .input-box input::placeholder {
            color: #7b588b;
        }
        .input-box input:focus {
            background: rgba(255, 255, 255, 0.85);
            border-color: #8b5a9f;
            box-shadow: 0 0 10px rgba(139, 90, 159, 0.3);
        }
        .btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 30px;
            background: linear-gradient(135deg, #7a468c, #522763);
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1.2px;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0 8px 18px rgba(82, 39, 99, 0.35);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(82, 39, 99, 0.45);
        }
        .links-area {
            margin-top: 22px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .links-area a {
            font-size: 13px;
            color: #4e235e;
            text-decoration: none;
            font-weight: 500;
        }
        .links-area a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="top-link">
            <a href="/register" class="pill-tag">Don't have an account? Sign up</a>
        </div>

        <h1 class="title">WELCOME</h1>

        <form action="/login" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="loginemail" placeholder="Email or Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="loginpassword" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">LOG IN</button>
        </form>

        <div class="links-area">
            <a href="/forgot-password">Forgot your password?</a>
        </div>
    </div>
</body>
</html>