<?php
// Iniciar sesión
session_start();

if (!isset($_SESSION['session_user_id'])) {
    header('refresh:0;url= error_403.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/icons/carrito-de-compras.png" type="image/png">
    <title>Marketapp - Home</title>
    <style>
        /* Reset global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 30px;
            color: #333;
            text-align: center;
            flex-direction: column;
        }

        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            width: 100%;
            max-width: 800px;
            margin-bottom: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.8rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .user-info {
            background: #fff;
            width: 100%;
            max-width: 600px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .user-info:hover {
            transform: translateY(-5px);
        }

        .user-info p {
            font-size: 1.1rem;
            color: #7f8c8d;
            margin-bottom: 10px;
        }

        .user-info .user-name {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .links a {
            text-decoration: none;
            font-size: 1.2rem;
            margin: 0 15px;
            padding: 12px 24px;
            background-color: #3498db;
            color: #fff;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .links a:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
        }

        .links a:active {
            transform: translateY(1px);
        }

        footer {
            padding: 20px;
            background-color: #2c3e50;
            color: #fff;
            font-size: 0.9rem;
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            margin-top: 10px;
            color: #ecf0f1;
        }

        /* Media query for responsive design */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            header h1 {
                font-size: 2.2rem;
            }

            .user-info {
                padding: 20px;
            }

            .links a {
                padding: 10px 20px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Marketapp</h1>
    </header>

    <div class="user-info">
        <p><strong>User:</strong></p>
        <p class="user-name"><?php echo $_SESSION['session_user_fullname']; ?></p>

        <div class="links">
            <a href="list_users.php">List all users</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

</body>

</html>
