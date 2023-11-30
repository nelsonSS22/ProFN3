<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login con Tailwind</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(255, 245, 210);" class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-80">
        <h1>University</h1>
        <h2 class="text-md text-gray-800 font-semibold mb-6 text-center">Bienvenido, Ingresa con tu cuenta</h2>

        <form action="/login" method="post">
            <div class="mb-4">
                <div class="flex bg-gray-100 items-center border border-gray-300 p-2 rounded">
                    <input required type="text" placeholder="Correo" id="email" name="email" class="w-full focus:outline-none">
                    <i class="fas fa-envelope text-gray-500"></i>
                </div>
            </div>
            <div class="mb-4">
                <div class="flex bg-gray-100 items-center border border-gray-300 p-2 rounded">
                    <input required type="password" placeholder="Contraseña" id="password" name="password" class="w-full focus:outline-none">
                    <i id="eyeIcon" class="fa fa-eye-slash text-gray-500 cursor-pointer hover:text-gray-400"></i>
                </div>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 w-full">Ingresar</button>
            </div>
        </form>
    </div>
</body>
</html>
