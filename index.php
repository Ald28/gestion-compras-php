<?php
declare(strict_types=1);

$phpVersion = PHP_VERSION;
$serverTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP Dockerizado</title>
    <style>
        :root {
            color-scheme: dark;
            font-family: Inter, system-ui, sans-serif;
            background: #0f172a;
            color: #e2e8f0;
        }
        * { box-sizing: border-box; }
        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 24px;
            background: radial-gradient(circle at top, #1e3a8a, #0f172a 55%);
        }
        main {
            width: min(680px, 100%);
            padding: 48px;
            border: 1px solid rgba(148, 163, 184, .25);
            border-radius: 24px;
            background: rgba(15, 23, 42, .82);
            box-shadow: 0 24px 70px rgba(0, 0, 0, .35);
            backdrop-filter: blur(12px);
        }
        .badge {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 999px;
            background: #22c55e;
            color: #052e16;
            font-weight: 800;
            font-size: .8rem;
            letter-spacing: .04em;
        }
        h1 { margin: 22px 0 12px; font-size: clamp(2rem, 7vw, 4rem); line-height: 1; }
        p { color: #cbd5e1; font-size: 1.1rem; line-height: 1.7; }
        dl {
            display: grid;
            grid-template-columns: max-content 1fr;
            gap: 12px 20px;
            margin: 32px 0 0;
            padding-top: 24px;
            border-top: 1px solid rgba(148, 163, 184, .2);
        }
        dt { color: #94a3b8; }
        dd { margin: 0; font-family: ui-monospace, monospace; color: #7dd3fc; }
    </style>
</head>
<body>
    <main>
        <span class="badge">CONTENEDOR ACTIVO</span>
        <h1>PHP + Docker</h1>
        <p>Tu proyecto está funcionando correctamente desde un contenedor Docker con Apache.</p>
        <dl>
            <dt>PHP</dt>
            <dd><?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></dd>
            <dt>Hora del servidor</dt>
            <dd><?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?></dd>
        </dl>
    </main>
</body>
</html>
