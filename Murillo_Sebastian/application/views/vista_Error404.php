<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-container {
            text-align: center;
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
        }
        h1 {
            font-size: 5em;
            color: #ff4b5c;
            margin: 0;
        }
        p {
            font-size: 1.2em;
            color: #333;
            margin: 15px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #ff4b5c;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #31c91f;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <p>¡Error inseperado! La página que buscas no existe o ha sido movida.</p>
        <a href="/">Volver al inicio</a>
    </div>
</body>
</html>