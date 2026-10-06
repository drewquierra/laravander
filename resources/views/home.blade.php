<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
        .subtitle {
            color: #5d3a6d;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }
        .title {
            color: #3b1d4a;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 1px;
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
        .footer-text {
            margin-top: 24px;
            font-size: 13px;
            color: #5d3a6d;
        }
        .footer-text a {
            color: #431d52;
            text-decoration: none;
            font-weight: 600;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <p class="subtitle">START YOUR JOURNEY</p>
        <h1 class="title">CREATE ACCOUNT</h1>

        <form action="/register" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="name" placeholder="Full name" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email address" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">SIGN UP</button>
        </form>

        <p class="footer-text">
            Already have an account? <a href="/login">Log in</a>
        </p>
    </div>
</body>
</html>