
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vecfer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .bgded {
            background-image: url('images/demo/backgrounds/02.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;
        }

        .login-container h1 {
            color: white;
            margin-bottom: 20px;
        }

        .login-container .form-btn {
            background-color: orange;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            margin: 5px 0;
            width: 200px;
        }

        .login-container .form-btn:hover {
            background-color: darkorange;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form input {
            padding: 10px;
            margin: 5px 0;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Hide all other elements */
        .wrapper, header, main, footer, .nospace {
            display: none;
        }
    </style>
</head>
<body>
    <div class="bgded"></div>
    <div class="login-container">
        <h1>Bine Ai Venit!</h1>
        <div class="login-form">
            <form method="post" action="connection.php">
                <input type="text" placeholder="Username" id="username">
                <input type="password" placeholder="Password" id="password">
                <input type="submit" class="form-btn" value="Connect">
             <a href="signup.php" class="form-btn">Sign up</a>
			  
            </form>
        </div>
    </div>
 
</body>
</html>
