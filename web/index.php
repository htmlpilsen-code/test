<?php
header('Content-Type: text/html; charset=utf-8');

$jmeno = "Markét";
$prani = "Všechno nejlepší k svátku, milá Markéto! Ať tě kočičky vždycky potěší. 🐱";

echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přání k svátku</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #fce4ec;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        h1 {
            color: #e91e63;
            margin-bottom: 10px;
        }
        .message {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 30px;
        }
        pre {
            font-size: 18px;
            color: #ff6f00;
            line-height: 1.2;
            background: #fff3e0;
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
        }
        .heart {
            color: #e91e63;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🎀 ' . htmlspecialchars($prani) . ' 🎀</h1>
        <pre>
  /\_/\  
 ( ^.^ ) 
  > ❤ <  
 (__|__)
        </pre>
        <p class="heart">🐾 Máme tě rádi! 🐾</p>
    </div>
</body>
</html>';