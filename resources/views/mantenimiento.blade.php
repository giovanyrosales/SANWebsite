<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio en Mantenimiento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            color: #1a1a1a;
        }

        .container {
            text-align: center;
            max-width: 480px;
            width: 100%;
        }

        .icon-wrapper {
            width: 96px;
            height: 96px;
            background: #fef9ec;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 42px;
        }

        h1 {
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 15px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .status-card {
            background: #fff;
            border: 0.5px solid #e0e0e0;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            margin-bottom: 2rem;
            text-align: left;
        }

        .status-label {
            font-size: 12px;
            font-weight: 500;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.75rem;
        }

        .status-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 0;
        }

        .status-row + .status-row {
            border-top: 0.5px solid #f0f0f0;
            margin-top: 5px;
            padding-top: 10px;
        }

        .service-name {
            font-size: 14px;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .service-name i {
            font-size: 16px;
            color: #888;
        }

        .badge {
            font-size: 12px;
            padding: 3px 10px;
            border-radius: 6px;
            font-weight: 500;
        }

        .badge-warning {
            background: #fef9ec;
            color: #b45309;
        }

        .badge-success {
            background: #edfaf3;
            color: #166534;
        }

        .eta {
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
            color: #666;
            font-size: 13px;
            margin-bottom: 1.5rem;
        }

        .eta i { font-size: 16px; }
        .eta strong { color: #1a1a1a; font-weight: 500; }

        .contact {
            font-size: 13px;
            color: #999;
        }

        .contact a {
            color: #2563eb;
            text-decoration: none;
        }

        .contact a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">

    <div class="icon-wrapper" aria-hidden="true">🔧</div>

    <h1>Sitio en mantenimiento</h1>
    <p class="subtitle">
        Estamos realizando mejoras para ofrecerte una mejor experiencia.<br>Volveremos pronto.
    </p>

    <div class="status-card">
        <p class="status-label">Estado del sistema</p>

        <div class="status-row">
                <span class="service-name">
                    <i class="ti ti-server" aria-hidden="true"></i> Servidor principal
                </span>
            <span class="badge badge-warning">En mantenimiento</span>
        </div>

        <div class="status-row">
                <span class="service-name">
                    <i class="ti ti-database" aria-hidden="true"></i> Base de datos
                </span>
            <span class="badge badge-success">Operativa</span>
        </div>

        <div class="status-row">
                <span class="service-name">
                    <i class="ti ti-cloud" aria-hidden="true"></i> Almacenamiento
                </span>
            <span class="badge badge-success">Operativo</span>
        </div>
    </div>

    <div class="eta">
        <i class="ti ti-clock" aria-hidden="true"></i>
        Tiempo estimado: <strong>2 horas</strong>
    </div>

    <p class="contact">
        ¿Necesitas ayuda urgente? Escríbenos a
        <a href="mailto:soporte@ejemplo.com">soporte@ejemplo.com</a>
    </p>

</div>

</body>
</html>
