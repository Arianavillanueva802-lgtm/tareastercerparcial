<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Tareas</title>

    <link rel="stylesheet" href="assets/css/src/output.css">
</head>

<body class="bg-pink-50 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-pink-500 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-8 py-5">

            <div>
                <h1 class="text-3xl font-bold text-white">
                    Control de Tareas
                </h1>

                <p class="text-pink-100 text-sm mt-1">
                    Organiza tus actividades de forma sencilla
                </p>
            </div>

            <nav>
                <ul class="flex space-x-8 text-white font-medium">
                    <li><a href="#" class="hover:text-pink-200 transition">Inicio</a></li>
                    <li><a href="#" class="hover:text-pink-200 transition">Tareas</a></li>
                    <li><a href="#" class="hover:text-pink-200 transition">Acerca</a></li>
                    <li><a href="#" class="hover:text-pink-200 transition">Contacto</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Contenido -->
    <main class="flex-1">

        <div class="max-w-5xl mx-auto py-12 px-6">

            <div class="bg-white rounded-2xl shadow-lg p-8">

                <h2 class="text-3xl font-bold text-pink-600 text-center">
                    Bienvenido
                </h2>

                <p class="text-gray-500 text-center mt-3">
                    Administra tus tareas desde un solo lugar.
                </p>

                <div class="mt-8">

                    <?php require_once 'config/conexion.php'; ?>

                </div>

                <div class="mt-10">

                    <h3 class="text-xl font-semibold text-gray-700 mb-5">
                        Lista de tareas
                    </h3>

                    <div class="space-y-4">

                        <div class="flex justify-between items-center bg-pink-100 rounded-xl p-4">
                            <span class="text-gray-700">Estudiar PHP</span>

                            <div class="space-x-2">
                                <button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg">
                                    Editar
                                </button>

                                <button class="bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded-lg">
                                    Eliminar
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between items-center bg-pink-100 rounded-xl p-4">
                            <span class="text-gray-700">Comprar materiales</span>

                            <div class="space-x-2">
                                <button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg">
                                    Editar
                                </button>

                                <button class="bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded-lg">
                                    Eliminar
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-between items-center bg-pink-100 rounded-xl p-4">
                            <span class="text-gray-700">Finalizar proyecto</span>

                            <div class="space-x-2">
                                <button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg">
                                    Editar
                                </button>

                                <button class="bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded-lg">
                                    Eliminar
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-pink-500 text-white">

        <div class="max-w-6xl mx-auto flex justify-between items-center px-8 py-6">

            <div>
                <h3 class="font-semibold text-lg">
                    CRUD de Tareas
                </h3>

                <p class="text-pink-100 text-sm">
                    Sistema desarrollado con PHP, MySQL y Tailwind CSS.
                </p>
            </div>

            <div class="text-sm">
                © <?php echo date('Y'); ?> Todos los derechos reservados.
            </div>

        </div>

    </footer>

</body>
</html>