<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidado y Mantenimiento</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Cuidado y Mantenimiento de Uñas Acrílicas</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="pagina1.php">Tipos de Uñas Acrílicas</a>
            <a href="pagina2.php">Cuidado y Mantenimiento</a>
        </nav>
    </header>

    <section>
        <h2>Consejos para el Cuidado de Uñas Acrílicas</h2>
        <ul>
            <?php
                $consejos = [
                    "Evita morder o dañar las uñas.",
                    "Usa guantes al hacer tareas domésticas para protegerlas.",
                    "Hidrata tus manos y cutículas regularmente.",
                    "Realiza retoques cada dos o tres semanas para mantener su forma y adherencia."
                ];

                foreach ($consejos as $consejo) {
                    echo "<li>$consejo</li>";
                }
            ?>
        </ul>
    </section>
</body>
</html>
