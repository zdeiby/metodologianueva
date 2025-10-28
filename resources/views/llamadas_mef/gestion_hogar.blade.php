<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Unidad Familia Medellín - Panel Principal</title>
    
    <!-- Tailwind CSS CDN con fallback local -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fallback si no hay internet: copiar archivos de c:\xampp\htdocs\efectividadMef\assets a c:\xampp\htdocs\efectividadMef\public\assets -->
    
    <!-- jQuery CDN con fallback local -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Fallback para jQuery si CDN falla
        if (typeof jQuery == 'undefined') {
            document.write('<script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"><\/script>');
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Scrollbar personalizada */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background-color: #475569;
        }
        /* Toast notification */
        .toast-notification {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 50;
            transition: all 0.3s ease;
            transform: translateY(-20px);
            opacity: 0;
        }
        .toast-notification.show {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#3b82f6',
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            DEFAULT: '#f59e0b',
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-300">
    <div id="app">
        <!-- Toast Notification -->
        <div id="toast-notification" class="toast-notification flex items-center p-4 mb-4 shadow-lg rounded-lg">
            <div id="toast-icon" class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg"></div>
            <div id="toast-message" class="ml-3 text-sm font-normal"></div>
        </div>

        <!-- Layout principal -->
        <div class="flex h-screen overflow-hidden">
            
            <!-- Sidebar - Menú lateral -->
            <aside id="sidebar" class="fixed inset-y-0 left-0 bg-white dark:bg-slate-800 w-72 transform transition-transform duration-300 ease-in-out z-40 -translate-x-full lg:translate-x-0">
                <div class="flex flex-col h-full border-r border-slate-200 dark:border-slate-700">
                    <div class="flex items-center justify-center h-20 border-b border-slate-200 dark:border-slate-700 px-4">
                        <a href="#" class="flex items-center gap-3 text-xl font-bold text-primary">
                            <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-4-4 1.41-1.41L10 13.17l7.59-7.59L19 7l-9 9z"/>
                            </svg>
                            <span class="whitespace-nowrap">Unidad Familia Medellín</span>
                        </a>
                    </div>
                    
                    <div class="overflow-y-auto flex-1 p-4">
                        <nav class="space-y-2">
                            <a href="https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/c_principalhogar/fc_principalhogar" class="flex items-center px-4 py-2.5 rounded-lg bg-primary text-white transition-colors">
                                <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <span>Directorio</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </aside>

            <!-- Contenido principal -->
            <div class="flex-1 flex flex-col transition-all duration-300 ease-in-out ml-0 lg:ml-72">
                
                <!-- Header - Barra superior -->
                <header class="flex-shrink-0 bg-white dark:bg-slate-800 shadow-sm">
                    <div class="flex items-center justify-between h-20 px-4 sm:px-6 lg:px-8">
                        <div class="flex items-center">
                            <button id="sidebar-toggle" class="lg:hidden text-slate-500 hover:text-primary mr-4">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                            </button>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <button id="theme-toggle" class="text-slate-500 hover:text-primary">
                                <svg id="dark-icon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
                                <svg id="light-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                            </button>
                        </div>
                    </div>
                </header>
                
                <!-- Contenido principal -->
                <main class="flex-1 overflow-y-auto p-6">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md mb-6">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <a href="https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/c_principalhogar/fc_principalhogar" class="text-primary hover:underline mb-2 flex items-center gap-1">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                                    Volver
                                </a>
                                <h1 class="text-2xl font-bold">Plan de Vida Familiar: <span class="text-primary">{{ $hogar->integranteTitular->nombre_completo ?? 'N/A' }}</span></h1>
                                <div class="flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400 mt-1">
                                    <span>Folio: <strong class="font-mono text-slate-700 dark:text-slate-300">{{ $hogar->folio }}</strong></span>
                                    <span>ID Integrante: <strong class="font-mono text-slate-700 dark:text-slate-300">{{ $hogar->idintegrantetitular }}</strong></span>
                                </div>
                            </div>
                            <!-- <div class="w-full sm:w-auto">
                                <label class="text-sm font-medium">Porcentaje de Logros: <strong>{{ $porcentaje_total }}%</strong></label>
                                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5 mt-1">
                                    <div class="bg-emerald-500 h-2.5 rounded-full" style="width: {{ $porcentaje_total }}%"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Navegación de pasos -->
                        <div class="w-full md:w-1/4">
                            <nav class="space-y-1" id="steps-navigation">
                                <!-- Los pasos se cargarán dinámicamente con JS -->
                            </nav>
                        </div>
                        
                        <!-- Contenido de los pasos -->
                        <div class="w-full md:w-3/4">
                            <!-- Paso 1: Realización de la visita -->
                            <div id="step-1" class="step-content bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md">
                                <h2 class="text-xl font-bold mb-4">Realización de la Llamada</h2>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                    <!-- Formulario de llamadas -->
                                    <div class="bg-slate-50 dark:bg-slate-700/30 p-6 rounded-xl">
                                        <h3 class="text-lg font-semibold mb-4">Registrar llamada</h3>
                                        <form id="llamada-form" class="space-y-4">
                                            <!-- Campos ocultos -->
                                            <input type="hidden" id="folio" name="folio" value="{{ $hogar->folio }}">
                                            <input type="hidden" id="idintegrante" name="idintegrante" value="{{ $hogar->idintegrantetitular }}">
                                            <input type="hidden" id="documento_profesional" name="documento_profesional" value="{{ $documento_profesional }}">
                                            
                                            <div>
                                                <label for="fecha_hora" class="block text-sm font-medium mb-1">Fecha y hora</label>
                                                <input type="datetime-local" id="fecha_hora" name="fecha_hora" value="{{ now()->format('Y-m-d\TH:i') }}" class="w-full px-3 py-2 bg-white dark:bg-slate-600 border border-slate-300 dark:border-slate-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                            </div>
                                            
                                            <div>
                                                <label for="resultado" class="block text-sm font-medium mb-1">Resultado</label>
                                                <select id="resultado" name="resultado" class="w-full px-3 py-2 bg-white dark:bg-slate-600 border border-slate-300 dark:border-slate-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                                    <option value="">Seleccione un resultado...</option>
                                                    <option value="Contactado">Contactado</option>
                                                    <option value="No contestó">No contestó</option>
                                                    <option value="Buzón de voz">Buzón de voz</option>
                                                    <option value="Número equivocado">Número equivocado</option>
                                                    <option value="Número no existe">Número no existe</option>
                                                </select>
                                            </div>
                                            
                                            <div>
                                                <label for="duracion" class="block text-sm font-medium mb-1">Duración (min)</label>
                                                <input type="number" id="duracion" name="duracion" min="0" value="0" class="w-full px-3 py-2 bg-white dark:bg-slate-600 border border-slate-300 dark:border-slate-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                            </div>
                                            
                                            <div>
                                                <label for="notas" class="block text-sm font-medium mb-1">Notas / Observaciones</label>
                                                <textarea id="notas" name="notas" rows="3" class="w-full px-3 py-2 bg-white dark:bg-slate-600 border border-slate-300 dark:border-slate-500 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                            </div>
                                            
                                            <div class="pt-2">
                                                <button type="button" id="guardar-llamada" class="w-full py-2.5 px-4 bg-primary hover:bg-primary-600 text-white font-medium rounded-lg transition-colors flex items-center justify-center gap-2">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" /></svg>
                                                    Guardar llamada
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Historial de llamadas -->
                                    <div class="bg-slate-50 dark:bg-slate-700/30 p-6 rounded-xl">
                                        <h3 class="text-lg font-semibold mb-4">Historial de llamadas</h3>
                                        <div id="llamadas-container" class="overflow-y-auto max-h-96">
                                            <div id="loading-llamadas" class="text-center py-8">
                                                <svg class="animate-spin w-8 h-8 mx-auto text-primary mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>
                                                <p class="text-sm text-slate-500 dark:text-slate-400">Cargando historial de llamadas...</p>
                                            </div>
                                            <div id="no-llamadas" class="hidden bg-slate-100 dark:bg-slate-700 text-center py-8 rounded-lg">
                                                <svg class="w-12 h-12 mx-auto text-slate-400 dark:text-slate-500 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                </svg>
                                                <p class="text-sm font-medium">No hay llamadas registradas</p>
                                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Registra una nueva llamada para comenzar.</p>
                                            </div>
                                            <div id="llamadas-list" class="hidden space-y-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Paso 2: Actualización de datos -->
                            <div id="step-2" class="step-content bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md hidden">
                                <h2 class="text-xl font-bold mb-4">Indicadores</h2>
                               <p>Al Presionar Clic en el boton para actualizar indicadores.</p>
                                <div class="mt-6">
                                    <a href="https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/perfilproductivo/c_actualizarpp/fc_actualizarpp?folio={{ $hogar->folio }}&idintegrante=0&doccogestor={{ $documento_profesional }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary/80 text-white font-medium rounded-lg transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                        Indicadores
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Paso 3: Logros -->
                            <div id="step-3" class="step-content bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md hidden">
                                <h2 class="text-xl font-bold mb-4">Oportunidades</h2>
                                <p>Aqui encuentra las oportunidades.</p>
                                <div class="mt-6">
                                    <a href="https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/logros/c_dimensiones/fc_dimensiones?folio={{ $hogar->folio }}&idintegrante=0&doccogestor={{ $documento_profesional }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary/80 text-white font-medium rounded-lg transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        Ver oportunidades
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Paso 4: Gestión del Hogar -->
                            <div id="step-4" class="step-content bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md hidden">
                                <h2 class="text-xl font-bold mb-4">Alerta gestor</h2>
                                <p>Al presionar Clic te llevara a las Alertas del gestor.</p>
                                <div class="mt-6">
                                    <a href="https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/c_acercaroportunidad/fc_acercaroportunidad?folio={{ $hogar->folio }}&idintegrante={{ $hogar->idintegrantetitular }}&doccogestor={{ $documento_profesional }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary/80 text-white font-medium rounded-lg transition-colors duration-300">
                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                       Alertas Gestor
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <!-- Modal para ver detalles de llamada -->
    <div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
        <div id="modal-container" class="bg-white dark:bg-slate-800 rounded-xl shadow-xl max-w-lg w-full mx-4 overflow-hidden">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-slate-700">
                <h3 class="text-lg font-bold">Detalles de la llamada</h3>
                <button id="modal-close" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div id="modal-content" class="p-6 space-y-4"></div>
        </div>
    </div>
    
    <script>
        // Configurar CSRF token para todas las peticiones AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Configuración de pasos
        const steps = [
            { id: 1, title: 'Paso 1', subtitle: 'Inicio del seguimiento', element: document.getElementById('step-1') },
            { id: 2, title: 'Paso 2', subtitle: 'Actualización de datos', element: document.getElementById('step-2') },
            { id: 3, title: 'Paso 3', subtitle: 'Movilización de Logros', element: document.getElementById('step-3') },
            { id: 4, title: 'Paso 4', subtitle: 'Gestión de Oportunidades', element: document.getElementById('step-4') },
        ];
        
        // Estado de la aplicación
        const appState = {
            activeStep: 1,
            completedSteps: [],
            darkMode: false,
            sidebarOpen: window.innerWidth >= 1024,
            callHistory: [],
            isModalOpen: false,
            selectedCall: null
        };
        
        // Inicialización
        document.addEventListener('DOMContentLoaded', function() {
            initDarkMode();
            initStepsNavigation();
            initSidebarToggle();
            loadCallHistory();
            initCallForm();
            initModal();
        });
        
        // Inicialización del modo oscuro
        function initDarkMode() {
            const storedTheme = localStorage.getItem('familia_medellin_theme');
            
            if (storedTheme === 'dark' || (!storedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                appState.darkMode = true;
            }
            
            updateThemeIcons();
            document.getElementById('theme-toggle').addEventListener('click', toggleDarkMode);
        }
        
        // Cambiar entre modo claro y oscuro
        function toggleDarkMode() {
            appState.darkMode = !appState.darkMode;
            
            if (appState.darkMode) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('familia_medellin_theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('familia_medellin_theme', 'light');
            }
            
            updateThemeIcons();
        }
        
        // Actualizar los íconos del botón de tema
        function updateThemeIcons() {
            const darkIcon = document.getElementById('dark-icon');
            const lightIcon = document.getElementById('light-icon');
            
            if (appState.darkMode) {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            } else {
                darkIcon.classList.add('hidden');
                lightIcon.classList.remove('hidden');
            }
        }
        
        // Inicialización de la navegación de pasos
        function initStepsNavigation() {
            const stepsNav = document.getElementById('steps-navigation');
            stepsNav.innerHTML = '';
            
            steps.forEach(step => {
                const isActive = appState.activeStep === step.id;
                const isCompleted = appState.completedSteps.includes(step.id);
                
                const stepButton = document.createElement('button');
                stepButton.className = `w-full flex items-center px-4 py-3 rounded-lg transition-colors ${isActive ? 'bg-primary text-white' : 'hover:bg-slate-100 dark:hover:bg-slate-700'}`;
                stepButton.innerHTML = `
                    <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full ${isActive ? 'bg-white text-primary' : isCompleted ? 'bg-emerald-500 text-white' : 'bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-300'} mr-3">
                        ${isCompleted ? '<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>' : step.id}
                    </div>
                    <div class="text-left">
                        <span class="block font-medium ${isActive ? 'text-white' : 'text-slate-900 dark:text-slate-200'}">${step.title}</span>
                        <span class="block text-sm ${isActive ? 'text-white text-opacity-90' : 'text-slate-500 dark:text-slate-400'}">${step.subtitle}</span>
                    </div>
                `;
                
                stepButton.addEventListener('click', () => goToStep(step.id));
                stepsNav.appendChild(stepButton);
            });
            
            showActiveStep();
        }
        
        // Ir a un paso específico
        function goToStep(stepId) {
            appState.activeStep = stepId;
            showActiveStep();
            initStepsNavigation();
        }
        
        // Mostrar el paso activo y ocultar los demás
        function showActiveStep() {
            steps.forEach(step => {
                const element = step.element;
                if (step.id === appState.activeStep) {
                    element.classList.remove('hidden');
                } else {
                    element.classList.add('hidden');
                }
            });
        }
        
        // Inicializar el toggle del sidebar
        function initSidebarToggle() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');
            
            sidebarToggle.addEventListener('click', function() {
                appState.sidebarOpen = !appState.sidebarOpen;
                
                if (appState.sidebarOpen) {
                    sidebar.classList.remove('-translate-x-full');
                } else {
                    sidebar.classList.add('-translate-x-full');
                }
            });
        }
        
        // Cargar el historial de llamadas
        function loadCallHistory() {
            const folio = document.getElementById('folio').value;
            
            if (!folio) {
                showNoCallHistory();
                return;
            }
            
            document.getElementById('loading-llamadas').classList.remove('hidden');
            document.getElementById('no-llamadas').classList.add('hidden');
            document.getElementById('llamadas-list').classList.add('hidden');
            
            $.ajax({
                url: '{{ route("llamadas-mef.historial", $hogar->folio) }}',
                type: 'GET',
                dataType: 'json',
                cache: false,
                success: function(response) {
                    document.getElementById('loading-llamadas').classList.add('hidden');
                    console.log('Respuesta del servidor:', response);
                    
                    let historialData = [];
                    
                    if (response && response.historial && response.historial.length > 0) {
                        historialData = response.historial;
                    } else if (response && response.data && response.data.length > 0) {
                        historialData = response.data;
                    } else if (Array.isArray(response) && response.length > 0) {
                        historialData = response;
                    }
                    
                    if (historialData.length > 0) {
                        appState.callHistory = historialData;
                        renderCallHistory();
                    } else {
                        showNoCallHistory();
                    }
                },
                error: function(xhr, status, error) {
                    document.getElementById('loading-llamadas').classList.add('hidden');
                    showNoCallHistory();
                    console.error('Error al cargar el historial:', xhr, status, error);
                    showToast('Error al cargar el historial de llamadas', 'error');
                }
            });
        }
        
        // Mostrar mensaje de "no hay llamadas"
        function showNoCallHistory() {
            document.getElementById('no-llamadas').classList.remove('hidden');
            document.getElementById('llamadas-list').classList.add('hidden');
        }
        
        // Renderizar el historial de llamadas
        function renderCallHistory() {
            const llamadasList = document.getElementById('llamadas-list');
            llamadasList.innerHTML = '';
            
            if (appState.callHistory.length === 0) {
                showNoCallHistory();
                return;
            }
            
            appState.callHistory.sort((a, b) => new Date(b.fecha_hora) - new Date(a.fecha_hora));
            
            appState.callHistory.forEach((llamada, index) => {
                const llamadaElement = document.createElement('div');
                llamadaElement.className = 'bg-white dark:bg-slate-700 p-4 rounded-lg shadow-sm';
                
                const fecha = new Date(llamada.fecha_hora);
                const fechaFormateada = fecha.toLocaleString('es-CO', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
                
                let iconoClase = 'text-slate-400';
                let iconoSvg = '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />';
                
                if (llamada.resultado === 'Contactado') {
                    iconoClase = 'text-emerald-500';
                    iconoSvg = '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />';
                } else if (llamada.resultado === 'No contestó' || llamada.resultado === 'Buzón de voz') {
                    iconoClase = 'text-amber-500';
                    iconoSvg = '<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />';
                }
                
                llamadaElement.innerHTML = `
                    <div class="flex justify-between items-start">
                        <div class="flex items-start">
                            <div class="${iconoClase} mr-3">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">${iconoSvg}</svg>
                            </div>
                            <div>
                                <span class="block font-medium">${llamada.resultado}</span>
                                <span class="block text-sm text-slate-500 dark:text-slate-400">${fechaFormateada}</span>
                            </div>
                        </div>
                        <button class="text-primary hover:underline text-sm" data-llamada-index="${index}">Ver detalles</button>
                    </div>
                `;
                
                llamadasList.appendChild(llamadaElement);
                
                const detailButton = llamadaElement.querySelector('button');
                detailButton.addEventListener('click', () => showCallDetails(index));
            });
            
            document.getElementById('no-llamadas').classList.add('hidden');
            llamadasList.classList.remove('hidden');
        }
        
        // Mostrar modal con detalles de la llamada
        function showCallDetails(index) {
            appState.selectedCall = appState.callHistory[index];
            
            if (!appState.selectedCall) return;
            
            const fecha = new Date(appState.selectedCall.fecha_hora);
            const fechaFormateada = fecha.toLocaleString('es-CO', {
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                weekday: 'long',
                hour: '2-digit',
                minute: '2-digit'
            });
            
            const modalContent = document.getElementById('modal-content');
            modalContent.innerHTML = `
                <div class="space-y-6">
                    <div>
                        <span class="block text-sm font-medium text-slate-500 dark:text-slate-400">Resultado</span>
                        <span class="block text-lg font-semibold">${appState.selectedCall.resultado}</span>
                    </div>
                    <div>
                        <span class="block text-sm font-medium text-slate-500 dark:text-slate-400">Fecha y hora</span>
                        <span class="block">${fechaFormateada}</span>
                    </div>
                    <div>
                        <span class="block text-sm font-medium text-slate-500 dark:text-slate-400">Duración</span>
                        <span class="block">${appState.selectedCall.duracion_minutos || appState.selectedCall.duracion || 'No especificada'} minutos</span>
                    </div>
                    ${(appState.selectedCall.notas_observaciones || appState.selectedCall.notas) ? `
                        <div>
                            <span class="block text-sm font-medium text-slate-500 dark:text-slate-400">Notas / Observaciones</span>
                            <p class="bg-slate-50 dark:bg-slate-700 p-4 rounded-lg mt-2 whitespace-pre-wrap">${appState.selectedCall.notas_observaciones || appState.selectedCall.notas}</p>
                        </div>
                    ` : ''}
                    <div>
                        <span class="block text-sm font-medium text-slate-500 dark:text-slate-400">Profesional</span>
                        <span class="block">${appState.selectedCall.documento_profesional}</span>
                    </div>
                </div>
            `;
            
            const modalOverlay = document.getElementById('modal-overlay');
            if (modalOverlay) {
                modalOverlay.classList.remove('hidden');
                modalOverlay.classList.add('flex');
            }
        }
        
        // Inicializar el modal
        function initModal() {
            const closeButton = document.getElementById('modal-close');
            const modalOverlay = document.getElementById('modal-overlay');
            
            if (closeButton && modalOverlay) {
                closeButton.addEventListener('click', closeModal);
                
                modalOverlay.addEventListener('click', function(e) {
                    if (e.target === modalOverlay) {
                        closeModal();
                    }
                });
            }
        }
        
        // Cerrar modal
        function closeModal() {
            const modalOverlay = document.getElementById('modal-overlay');
            if (modalOverlay) {
                modalOverlay.classList.add('hidden');
                modalOverlay.classList.remove('flex');
            }
            appState.selectedCall = null;
        }
        
        // Inicializar el formulario de llamadas
        function initCallForm() {
            const guardarLlamada = document.getElementById('guardar-llamada');
            if (guardarLlamada) {
                guardarLlamada.addEventListener('click', submitCallForm);
            }
        }
        
        // Enviar formulario de llamadas
        function submitCallForm() {
            const form = document.getElementById('llamada-form');
            
            const resultado = document.getElementById('resultado').value;
            if (!resultado) {
                showToast('Por favor seleccione un resultado', 'warning');
                return;
            }
            
            const formData = {
                folio: document.getElementById('folio').value,
                idintegrante: document.getElementById('idintegrante').value,
                documento_profesional: document.getElementById('documento_profesional').value,
                fecha_hora: document.getElementById('fecha_hora').value,
                resultado: resultado,
                duracion: document.getElementById('duracion').value,
                notas: document.getElementById('notas').value
            };
            
            $.ajax({
                url: '{{ route("llamadas-mef.llamadas.store", $hogar->folio) }}',
                type: 'POST',
                dataType: 'json',
                data: formData,
                success: function(response) {
                    if (response && response.success) {
                        showToast('Llamada guardada correctamente', 'success');
                        
                        document.getElementById('resultado').value = '';
                        document.getElementById('duracion').value = '0';
                        document.getElementById('notas').value = '';
                        
                        loadCallHistory();
                    } else {
                        showToast('Error al guardar la llamada: ' + (response.message || 'Error desconocido'), 'error');
                    }
                },
                error: function(xhr) {
                    showToast('Error al guardar la llamada', 'error');
                    console.error('Error en la petición AJAX:', xhr);
                }
            });
        }
        
        // Mostrar notificación toast
        function showToast(message, type = 'info') {
            const toast = document.getElementById('toast-notification');
            const toastMessage = document.getElementById('toast-message');
            const toastIcon = document.getElementById('toast-icon');
            
            let bgClass = 'bg-blue-100 dark:bg-blue-800/30';
            let textClass = 'text-blue-800 dark:text-blue-200';
            let iconColor = 'text-blue-500 dark:text-blue-300';
            let iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>';
            
            if (type === 'success') {
                bgClass = 'bg-emerald-100 dark:bg-emerald-800/30';
                textClass = 'text-emerald-800 dark:text-emerald-200';
                iconColor = 'text-emerald-500 dark:text-emerald-300';
                iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>';
            } else if (type === 'warning') {
                bgClass = 'bg-amber-100 dark:bg-amber-800/30';
                textClass = 'text-amber-800 dark:text-amber-200';
                iconColor = 'text-amber-500 dark:text-amber-300';
                iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>';
            } else if (type === 'error') {
                bgClass = 'bg-red-100 dark:bg-red-800/30';
                textClass = 'text-red-800 dark:text-red-200';
                iconColor = 'text-red-500 dark:text-red-300';
                iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>';
            }
            
            toast.className = `toast-notification flex items-center p-4 mb-4 shadow-lg rounded-lg ${bgClass} ${textClass}`;
            toastIcon.className = `inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg ${iconColor}`;
            toastIcon.innerHTML = iconSvg;
            toastMessage.textContent = message;
            
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }
    </script>
</body>
</html>
