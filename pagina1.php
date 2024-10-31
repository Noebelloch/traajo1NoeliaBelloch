<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Uñas Acrílicas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Tipos de Uñas Acrílicas</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="pagina1.php">Tipos de Uñas Acrílicas</a>
            <a href="pagina2.php">Cuidado y Mantenimiento</a>
        </nav>
    </header>

    <section>
        <h2>Variedad de Estilos y Formas</h2>
        <table>
            <tr>
                <th>Tipo</th>
                <th>Descripción</th>
            </tr>
            <?php
                $tipos = [
                    "Stiletto" => "Forma puntiaguda ideal para un look audaz y estilizado.",
                    "Coffin" => "También conocidas como ballerina, son uñas cuadradas con puntas finas.",
                    "Almendra" => "Una forma redondeada que recuerda la forma de una almendra."
                ];

                foreach ($tipos as $tipo => $descripcion) {
                    echo "<tr><td>$tipo</td><td>$descripcion</td></tr>";
                }
            ?>
        </table>
    </section>
</body>
</html>
