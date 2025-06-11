<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config('app.name', 'VentaGest') }}</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
main {
  flex: 1;
  padding: 2rem;
  max-width: 1000px;
  margin: 0 auto;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
  margin-top: 2rem;
  margin-bottom: 2rem;
}

    body {
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* Navbar horizontal arriba */
    nav {
      background-color: #7c3aed;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: white;
    }

    nav .brand {
      font-weight: bold;
      font-size: 1.5rem;
      user-select: none;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      padding: 0.4rem 0.6rem;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    nav ul li a:hover,
    nav ul li a.active {
      background-color:rgb(236, 235, 237);
    }

    /* Contenedor principal */
    main {
      flex: 1;
      padding: 2rem;
      max-width: 1000px;
      margin: 0 auto;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
      margin-top: 2rem;
      margin-bottom: 2rem;
    }

    /* Footer opcional */
    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #666;
    }
  </style>
</head>
<body>

  <nav>
    <div class="brand">{{ config('app.name', 'VentaGest') }}</div>
    <ul>
      @auth
      <li><a href="{{ route('categorias.index') }}" class="{{ request()->routeIs('categorias.index') ? 'active' : '' }}">Categorías</a></li>
      <li><a href="{{ route('productos.index') }}" class="{{ request()->routeIs('productos.index') ? 'active' : '' }}">Productos</a></li>
      <li><a href="{{ route('clientes.index') }}" class="{{ request()->routeIs('clientes.index') ? 'active' : '' }}">Clientes</a></li>
      <li><a href="{{ route('ventas.index') }}" class="{{ request()->routeIs('ventas.index') ? 'active' : '' }}">Ventas</a></li>
      <li>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
          @csrf
          <button type="submit" style="background:none;border:none;color:white;cursor:pointer;font-weight:600;">Cerrar sesión</button>
        </form>
      </li>
      @endauth

      @guest
      <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
      <li><a href="{{ route('register') }}">Registrarse</a></li>
      @endguest
    </ul>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer>
    &copy; {{ date('Y') }} VentaGest. Todos los derechos reservados.
  </footer>

</body>
</html>
