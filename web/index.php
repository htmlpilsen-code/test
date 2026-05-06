<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pozvánka na 50. narozeniny – Mariachi &amp; Květiny</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(circle at 20% 30%, #ffd580, #ff6b6b, #cc3f4b);
            font-family: 'Georgia', 'Times New Roman', serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: auto;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 80px,
                                          rgba(255,255,255,0.08) 80px, rgba(255,255,255,0.08) 160px),
                repeating-linear-gradient(90deg, transparent, transparent 80px,
                                          rgba(255,255,255,0.08) 80px, rgba(255,255,255,0.08) 160px);
            pointer-events: none;
        }

        .invitation-wrapper {
            position: relative;
            width: 100%;
            max-width: 650px;
            z-index: 1;
            border: 10px solid transparent;
            border-image: repeating-linear-gradient(45deg,
                #c41e3a, #c41e3a 20px,
                #ffffff 20px, #ffffff 40px,
                #006847 40px, #006847 60px,
                #ffffff 60px, #ffffff 80px) 10;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            background: #fffef7;
        }

        .invitation {
            background: #fffef7;
            padding: 40px 30px 30px;
            text-align: center;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        .corner-flowers {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 2.2rem;
            opacity: 0.6;
            display: flex;
            gap: 5px;
        }
        .corner-flowers2 {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 2.2rem;
            opacity: 0.6;
            transform: rotate(180deg);
            display: flex;
            gap: 5px;
        }

        .mariachi-band {
            font-size: 3rem;
            margin-bottom: 15px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }

        h1 {
            font-size: 2.8rem;
            color: #c41e3a;
            text-shadow: 2px 2px 0 #ffd580;
            margin-bottom: 10px;
            letter-spacing: 2px;
            line-height: 1.2;
        }

        .age-badge {
            display: inline-block;
            background: #006847;
            color: #fff;
            font-size: 2.5rem;
            font-weight: bold;
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
            margin: 15px 0 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            border: 3px dashed #ffd580;
            font-family: 'Arial', sans-serif;
        }

        .greeting {
            font-size: 1.6rem;
            color: #444;
            margin-bottom: 25px;
        }

        .greeting strong {
            color: #c41e3a;
            font-style: italic;
        }

        .invite-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #333;
            margin-bottom: 25px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .details {
            background: #ffefd9;
            border: 2px dashed #006847;
            border-radius: 15px;
            padding: 20px;
            margin: 0 auto 25px;
            max-width: 400px;
            font-size: 1.1rem;
            color: #333;
        }

        .details p {
            margin: 8px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .details strong {
            color: #c41e3a;
            font-weight: bold;
        }

        .flower-footer {
            font-size: 1.2rem;
            margin: 15px 0 5px;
            color: #555;
            font-style: italic;
        }

        .music-notes {
            font-size: 2rem;
            margin-top: 10px;
            opacity: 0.7;
            animation: float 3s ease-in-out infinite alternate;
        }

        @keyframes float {
            from { transform: translateY(0px); }
            to { transform: translateY(-5px); }
        }

        .rsvp {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>

<div class="invitation-wrapper">
    <div class="invitation">

        <div class="corner-flowers">🌺🌼🌸🌻</div>
        <div class="corner-flowers2">🌺🌼🌸🌻</div>

        <div class="mariachi-band">
            🎺🎸🤠🪇🎻
        </div>

        <h1>¡Fiesta de Mariachi y Flores!</h1>

        <div class="age-badge">50</div>

        <div class="greeting">
            <strong>Tak ahoj!</strong>
        </div>

        <p class="invite-text">
            S radostí vás zveme na oslavu mých <strong>50. narozenin</strong>, 
            která se ponese v rytmu mexické hudby mariachi a bude obklopena 
            barevnými květinami. Čeká vás živá hudba, tanec, 
            výborné jídlo a spousta překvapení. 
            Přijďte si užít večer plný radosti a barev! 
        </p>

        <div class="details">
            <p>📅 <strong>Datum:</strong> 12. srpna 2025</p>
            <p>⏰ <strong>Čas:</strong> od 17:00 hodin</p>
            <p>📍 <strong>Místo:</strong> Květinová zahrada, Modrá ulice 50</p>
            <p>👒 <strong>Oblečení:</strong> barevné, slavnostní, klobouky vítány!</p>
        </div>

        <p class="flower-footer">
            Těšíme se na vaši účast! 🌹🌻🌸
        </p>

        <div class="music-notes">
            🎵🎶🎵🎶🎵
        </div>

        <p class="rsvp">
            Prosím potvrďte účast do 1. srpna na tel. 777 123 456
        </p>

    </div>
</div>

</body>
</html>