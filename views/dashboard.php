<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Bienvenido al dashboard</h1>
    <?php
    session_start();
    $rol = $_SESSION["user"]["rol_id"];

    if ($rol == 1) {
        echo "<h2>Bienvenido, admin</h2>";
    }

    if ($rol == 2) {
        echo "<h2>Bienvenido, maestro</h2>";
    }

    if ($rol == 3) {
        echo "<h2>Bienvenido, alumno</h2>";
    }
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab possimus veniam modi ullam atque, quis consequuntur aut tempora sint totam ut nam fugit itaque. Quaerat, doloremque, consequuntur at illo nulla cupiditate ex a minima unde, dolores eligendi tempora labore! Dolor nostrum animi quisquam earum magni. Dicta, maxime soluta mollitia fuga totam quam, reprehenderit sunt modi dolor ea ipsam delectus? Quo veritatis, minus itaque blanditiis tempora possimus illo dolorum aliquam, debitis reiciendis veniam neque cumque animi qui deserunt magnam rerum nobis expedita earum molestiae obcaecati saepe? Veritatis vero repellat maiores nihil similique, nostrum debitis eos deleniti autem optio dolores magni nesciunt!</p>
</body>

</html>