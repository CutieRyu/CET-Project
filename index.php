<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayBytes</title>
    <link rel="stylesheet" href="css/style.css">

    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('../images/baybg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #000;
            color: #ffbd59;
            padding: 18px;
            text-align: center;
        }

        nav {
            background-color: #000;
            color: #ffbd59;
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        li {
            margin-right: 25px;
        }

        a {
            text-decoration: none;
            color: #ffbd59;
            font-weight: bold;
            transition: color 0.3s ease;
            font-size: 12px;
        }

        a:hover {
            color: #fff;
        }

        .login-register-btn {
            background-color: #ffbd59;
            color: #000;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .login-register-btn:hover {
            background-color: #fff;
            color: #000;
        }

        main {
            padding: 20px;
        }

        .welcome {
            text-align: center;
            margin-bottom: 40px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .feature-box {
            background-color: rgba(26, 26, 26, 0.8);
            color: #ffbd59;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 189, 89, 0.2);
        }

        footer {
            background-color: #000;
            color: #ffbd59;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-text {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>BayBytes</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php" class="login-register-btn">Login/Register</a></li>
        </ul>
    </nav>

    <main>
        <section class="welcome">
            <h2>Welcome to BayBytes!</h2>
            <p>Start your journey to learn the ancient script of Baybayin.</p>
        </section>

        <section class="features-grid">
            <div class="feature-box">
                <h3>Explore Baybayin Characters</h3>
                <p>Discover the beauty and history of Baybayin script characters through engaging lessons.</p>
            </div>

            <div class="feature-box">
                <h3>Practice Your Skills</h3>
                <p>Enhance your understanding by practicing with interactive exercises and quizzes.</p>
            </div>

            <div class="feature-box">
                <h3>Track Your Progress</h3>
                <p>Monitor your learning journey and see your improvements over time.</p>
            </div>

            <div class="feature-box">
                <h3>Connect with the Community</h3>
                <p>Join discussions, share your experiences, and learn from other Baybayin enthusiasts.</p>
            </div>
        </section>
    </main>

    <footer>
        <p class="footer-text">&copy; 2024 Baybayin Learning. All rights reserved.</p>
    </footer>
</body>

</html>