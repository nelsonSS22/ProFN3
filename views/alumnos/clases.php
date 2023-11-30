<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex h-screen">

    <!-- Sidebar -->
    <div class="bg-gray-800 text-white w-1/5 p-4">
        <h2>University</h2>

        <h3>Menu Alumnos</h3>
        <div class="mb-4">
            <button class="w-full py-2 px-4 bg-blue-500 text-white rounded">Ver Calificaciones</button>
        </div>
        <div>
            <button class="w-full py-2 px-4 bg-blue-500 text-white rounded">Administrar Tus Clases</button>
        </div>
    </div>

    <!-- Content Area -->
    <div class="flex-grow p-4 bg-gray-200">
        
        <h1 class="text-2xl font-semibold mb-4">Clases Inscritas</h1>
        <table class="w-full border">
        </table>
    </div>

</body>
</html>
