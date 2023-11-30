<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <h1>Gestiona tus inscripciones a los cursos</h1>
    <h3>Alumno ID: 2</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre de la clase</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscripciones as $inscripcion) { ?>
                <tr>
                    <td><?= $inscripcion["nombre"] ?></td>
                    <td><a href="/delete?id=<?= $inscripcion["id"] ?>">Darse de baja</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    if (count($faltantes) === 0) {
        echo "<p>Ya estás inscrito a todas las clases.</p>";
    } else {
    ?>
        <form action="/create" method="post">
            <input type="text" hidden value="2" name="alumno_id">

            <label for="">Inscríbete a estas clases que son las que te faltan:</label>
            <select name="clase_id">
                <?php foreach ($faltantes as $faltante) { ?>
                    <option value="<?= $faltante["clase_id"] ?>"><?= $faltante["nombre"] ?></option>
                <?php } ?>
            </select>
            <button type="submit">Inscribirse</button>
        </form>
    <?php
    }
    ?>
</body>

</html>