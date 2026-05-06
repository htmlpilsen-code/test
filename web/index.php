<?php
echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pět veršů o volejbalu</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5e6a3 0%, #f0c27b 100%);
            color: #2c3e50;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }
        .card {
            background: rgba(255, 255, 255, 0.85);
            padding: 2rem 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            max-width: 600px;
        }
        h1 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            color: #d35400;
            text-shadow: 1px 1px 2px white;
        }
        .verses {
            font-size: 1.6rem;
            line-height: 2.2;
            font-style: italic;
        }
        .verses p {
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Pět veršů o volejbalu</h1>
        <div class="verses">
            <p>Míč letí nebem, lehký jako pírko,</p>
            <p>rána jej sráží v soupeřovo břicho.</p>
            <p>Smeč jako hrom a obrana tvrdá,</p>
            <p>týmový duch, co nikdy neuvadá.</p>
            <p>Volejbal – hra, kde srdce tluče v rytmu letu.</p>
        </div>
    </div>
</body>
</html>';
```