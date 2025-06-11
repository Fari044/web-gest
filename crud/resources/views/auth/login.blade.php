{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>VentaGest - Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('image-1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .backdrop-blur-custom {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
<header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a class="text-2xl font-bold text-gray-800" href="{{ url('/') }}">VentaGest</a>
    </nav>
</header>

<main class="flex-grow flex items-center justify-center pt-24 pb-8 px-4">
    <div class="w-full max-w-md p-8 bg-white bg-opacity-75 backdrop-blur-custom rounded-xl shadow-xl">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Iniciar Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2" for="email">Correo electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">Contraseña</label>
                <input id="password" type="password" name="password" required
                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-500">
            </div>

            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center text-sm">
                    <input type="checkbox" name="remember" class="mr-2">
                    Recordarme
                </label>
                <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>

            <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                Iniciar Sesión
            </button>
        </form>
    </div>
</main>
</body>
</html>
