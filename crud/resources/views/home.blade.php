<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>VentaGest - Bienvenido</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('{{ asset('images/image-1.png') }}');
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
<body class="bg-gray-100">
    <header class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a class="text-2xl font-bold text-gray-800" href="{{ url('/') }}">VentaGest</a>

        {{-- Menú de navegación --}}
        <div class="flex items-center space-x-4">
            @auth
                {{-- Opciones visibles solo para usuarios autenticados --}}
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-indigo-600 text-sm font-medium">Dashboard</a>
 

                {{-- Nombre del usuario con dropdown para cerrar sesión --}}
                <div class="relative">
                    <button onclick="document.getElementById('logout-menu').classList.toggle('hidden')" class="flex items-center text-sm font-medium text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <span class="material-icons mr-1">account_circle</span>
                        {{ Auth::user()->name }}
                        <span class="material-icons ml-1">expand_more</span>
                    </button>

                    <div id="logout-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden z-50">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <a class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium" href="{{ route('login') }}">Iniciar Sesión</a>
                <a class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium" href="{{ route('register') }}">Registrarse</a>
            @endguest
        </div>
    </nav>
</header>

    <main class="flex-grow flex flex-col items-center justify-center pt-24 pb-8 px-4">
        <div class="w-full max-w-3xl">
            <div class="text-center p-8 md:p-12 bg-white bg-opacity-75 backdrop-blur-custom rounded-xl shadow-2xl mx-auto">
                <!-- <img alt="Ilustración de gestión de ventas" class="w-48 h-auto mx-auto mb-6 rounded-lg shadow-lg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQSRv-dtmeBgQQKPV1ts0KRrWH3mfdpDhzQYmsz7FIaN7UL_lk6OUFO79l3M8cUUYaK11d10fK4UjpeDTt_mpIAFarRCzIfCkJxrGyrXo9DKpNcXRPaqKjKJeR3VHS7BzggLKrqocadcSuN8bLCPG538iwVrT8bkKxx7MpxHbCTvsMp_1Ml_OIes2yGp88PCg5G2aWlkbpkllrBcOBli3-g2sEFVmyFSp2w-Y5R0grqb8ZavJStRiGKCQodSmR-EWkBSSX96abHNCN"/> -->
           <div class="flex justify-center">
                <img src="{{ asset('img/invent1.png') }}" alt="Inventario" height="200" width="300">
            </div>

                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Bienvenido a VentaGest</h1>
                <p class="text-md text-gray-700 mb-6 leading-relaxed">
                    Inicia sesión o regístrate para comenzar a transformar la manera en que manejas tu negocio.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg text-md shadow-md transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center" href="{{ route('login') }}">
                        <span class="material-icons mr-2">login</span>
                        Iniciar Sesión
                    </a>
                    <a class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg text-md shadow-md transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center" href="{{ route('register') }}">
                        <span class="material-icons mr-2">person_add</span>
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 w-full max-w-5xl mx-auto px-4">
            <div class="bg-white bg-opacity-80 backdrop-blur-custom rounded-xl shadow-xl p-8 md:p-12">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-6 text-center">Optimiza tu Negocio con VentaGest</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-8 text-center">
                    Gestiona tus ventas de forma eficiente y sencilla. Nuestra plataforma intuitiva está diseñada para simplificar tus procesos y potenciar tu crecimiento, ayudándote a alcanzar tus metas.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center p-4 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <!-- <img alt="Análisis de ventas" class="w-full h-40 object-cover rounded-md mb-4" src="https://lh3.googleusercontent.com/pw/AP1GczPqR8Kj3Z9h_v5Xf_t3oX6v_pYw5jV6c_B_J_tQ7f9K7dM_l_h_z_eK_yC_Z_g_Q_a_N_l_D_g_S_c_R_v_Y_a_P_k=w500-h300-no?authuser=0"/> -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Análisis Detallado</h3>
                        <p class="text-gray-600 text-sm">Obtén información valiosa sobre tus ventas para tomar decisiones informadas.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-4 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <!-- <img alt="Gestión de inventario" class="w-full h-40 object-cover rounded-md mb-4" src="https://lh3.googleusercontent.com/pw/AP1GczN3B5_y_k_j_s_l_e_z_a_r_g_s_k_i_v_r_z_c_e_v_a_p_k_n_t_h_c_r_e_j_s_q_a_y_n_t_h_e_m_a_t_i_c_c_l_o_u_d_f_l_a_r_e_g_o_l_f_c_l_u_b_g_o_l_f_c_o_u_r_s_e_p_u_b_l_i_c_s_p_a_c_e_a_l_p_s_g_r_e_e_n_m_o_u_n_t_a_i_n_h_i_l_l_s_t_a_t_i_o_n_t_o_u_r_i_s_m_v_a_c_a_t_i_o_n_w_a_t_e_r_r_e_s_o_u_r_c_e_s_l_a_k_e_d_i_s_t_r_i_c_t_f_j_o_r_d_s_k_y_h_i_g_h_l_a_n_d_r_e_s_e_r_v_o_i_r_s_o_u_n_d_c_r_a_t_e_r_l_a_k_e_t_a_r_n_l_o_c_h_b_a_n_k_m_e_a_d_o_w_f_i_e_l_d_p_a_s_t_u_r_e_l_a_n_d_l_o_t_g_r_a_s_s_l_a_n_d_p_r_a_i_r_i_e_p_l_a_i_n_v_a_l_l_e_y_r_i_v_e_r_m_o_u_n_t_a_i_n_r_a_n_g_e_w_i_l_d_e_r_n_e_s_s_p_l_a_t_e_a_u_e_c_o_r_e_g_i_o_n_s_h_r_u_b_l_a_n_d_p_l_a_n_t_c_o_m_m_u_n_i_t_y_s_t_e_p_p_e_b_a_d_l_a_n_d_s_s_a_v_a_n_n_a_t_u_n_d_r_a_c_h_a_p_a_r_r_a_l_e_s_c_a_r_p_m_e_n_t_f_e_l_l_n_a_t_i_o_n_a_l_p_a_r_k_s_t_a_t_e_p_a_r_k_m_o_u_n_t_s_c_e_n_e_r_y_g_e_o_l_o_g_y_r_o_c_k_b_a_t_h_o_l_i_t_h_o_u_t_c_r_o_p_i_n_g_n_e_o_u_s_r_o_c_k_m_a_s_s_i_f_v_o_l_c_a_n_i_c_l_a_n_d_f_o_r_m_v_o_l_c_a_n_o_s_h_i_e_l_d_v_o_l_c_a_n_o_c_i_n_d_e_r_c_o_n_e_l_a_v_a_d_o_m_e_c_a_l_d_e_r_a_s_t_r_a_t_o_v_o_l_c_a_n_o_e_x_t_i_n_c_t_v_o_l_c_a_n_o_v_o_l_c_a_n_i_c_f_i_e_l_d_h_o_t_s_p_r_i_n_g_g_e_y_s_e_r_f_u_m_a_r_o_l_e_s_o_l_f_a_t_a_r_e_s_h_y_d_r_o_t_h_e_r_m_a_l_l_a_k_e_s_h_o_t_s_p_r_i_n_g_r_i_f_t_v_a_l_l_e_y_t_h_e_r_m_o_c_l_i_n_e_c_o_n_v_e_c_t_i_o_n_h_y_d_r_o_t_h_e_r_m_a_l_c_o_n_v_e_c_t_i_o_n_f_i_s_h_i_n_g_c_o_d_l_i_m_e_s_t_o_n_e_r_e_e_f_c_o_r_a_l_r_e_e_f_c_o_a_s_t_a_l_b_a_y_b_e_a_c_h_h_a_r_b_o_r_s_a_i_l_b_o_a_t_b_o_a_t_s_t_o_w_a_r_d_b_o_a_t_i_n_g_c_a_n_o_e_k_a_y_a_k_c_r_u_i_s_e_s_s_u_r_f_i_n_g_s_n_o_r_k_e_l_i_n_g_s_c_u_b_a_d_i_v_i_n_g_m_a_r_i_n_e_l_i_f_e_f_i_s_h_t_o_r_t_o_i_s_e_s_e_a_w_e_e_d_c_o_r_a_l_l_a_r_e_a_c_h_o_r_d_i_v_e_r_s_i_t_y_f_l_o_r_a_f_a_u_n_a_e_c_o_s_y_s_t_e_m_b_i_o_d_i_v_e_r_s_i_t_y_s_u_s_t_a_i_n_a_b_i_l_i_t_y_e_n_v_i_r_o_n_m_e_n_t_a_l_c_o_n_s_e_r_v_a_t_i_o_n_c_l_i_m_a_t_e_c_h_a_n_g_e_g_r_e_e_n_h_o_u_s_e_g_a_s_e_m_i_s_s_i_o_n_s_r_e_n_e_w_a_b_l_e_e_n_e_r_g_y_s_o_l_a_r_w_i_n_d_h_y_d_r_o_g_e_o_t_h_e_r_m_a_l_b_i_o_m_a_s_s_e_l_e_c_t_r_i_c_v_e_h_i_c_l_e_s_e_m_i_s_s_i_o_n_t_r_a_d_i_t_i_o_n_a_l_f_u_e_l_c_o_a_l_o_i_l_n_a_t_u_r_a_l_g_a_s_c_a_r_b_o_n_f_o_o_t_p_r_i_n_t_c_a_r_b_o_n_c_a_p_t_u_r_e_c_a_r_b_o_n_o_f_f_s_e_t_c_a_r_b_o_n_n_e_u_t_r_a_l_c_l_i_m_a_t_e_p_o_l_i_c_y_e_m_i_s_s_i_o_n_t_r_a_d_i_n_g_c_a_r_b_o_n_p_r_i_c_i_n_g_i_n_t_e_r_n_a_t_i_o_n_a_l_a_g_r_e_e_m_e_n_t_s -->
<!-- "/> -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Gestión de Inventario</h3>
                        <p class="text-gray-600 text-sm">Visualiar productos que se han vendido. </p>
                    </div>
                    <div class="flex flex-col items-center text-center p-4 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <!-- <img alt="Soporte y asesoría" class="w-full h-40 object-cover rounded-md mb-4" src="https://lh3.googleusercontent.com/pw/AP1GczN9gHl6h5Tn4x-H3f-EJQcE0wTV7P62tbEKXPvZwSlAeKdu7NR-u_k5-bN5tVVmm1WtPQHV1rIGgErulXtQDjEm9EZDxsDDOj-8FFlAMKK5UE52U8StkORxZCZjeNW_pURb6B_tSA9F3hmOgAMhX17GVs9R_"/> -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Soporte y Asesoría</h3>
                        <p class="text-gray-600 text-sm">Nuestro equipo está disponible para ayudarte en cada paso del camino.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-indigo-600 text-white py-6 mt-auto">
        <div class="container mx-auto text-center text-sm">
            &copy; {{ date('Y') }} VentaGest. Todos los derechos reservados.
        </div>
    </footer>
</body>
</html>
