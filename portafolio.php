<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezequiel Canelón - Mi Portafolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); /* Changed from purple to blue gradient */
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .skill-badge {
            transition: all 0.3s ease;
        }
        
        .skill-badge:hover {
            transform: scale(1.05);
        }
        
        .nav-link:after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #3b82f6; /* Changed from indigo to blue */
            transition: width .3s;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        #menu-toggle:checked + #menu {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg fixed w-full z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <a href="#" class="flex items-center">
                        <span class="text-2xl font-bold text-blue-600">Ezequiel Canelón</span>
                    </a>
                </div>
                
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-600" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="hidden md:flex items-center space-x-10">
                    <a href="#home" class="nav-link py-2 text-gray-600 hover:text-blue-600">Inicio</a>
                    <a href="#about" class="nav-link py-2 text-gray-600 hover:text-blue-600">Sobre mí</a>
                    <a href="#skills" class="nav-link py-2 text-gray-600 hover:text-blue-600">Habilidades</a>
                    <a href="#projects" class="nav-link py-2 text-gray-600 hover:text-blue-600">Proyectos</a>
                    
                </div>
            </div>
        </div>
        
        <div class="mobile-menu hidden md:hidden">
            <a href="#home" class="block py-2 px-4 text-sm hover:bg-blue-50">Inicio</a>
            <a href="#about" class="block py-2 px-4 text-sm hover:bg-blue-50">Sobre mí</a>
            <a href="#skills" class="block py-2 px-4 text-sm hover:bg-blue-50">Habilidades</a>
            <a href="#projects" class="block py-2 px-4 text-sm hover:bg-blue-50">Proyectos</a>
            
        </div>
    </nav>

    <section id="home" class="hero-gradient text-white pt-32 pb-20 md:pt-40 md:pb-28">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Hola, mi nombre es <span class="text-yellow-300">Ezequiel Canelón</span></h1>
                <h2 class="text-2xl md:text-3xl mb-8 opacity-90">Desarrollador Web</h2>
                <p class="text-lg mb-8 max-w-lg opacity-80">Creo soluciones digitales impactantes con código limpio y diseño intuitivo.</p>
                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="#projects" class="bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Ver Proyectos</a>
                    
                </div>
            </div>
            <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center">
                <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                    <img src="" alt="Foto profesional de [Tu Nombre], desarrollador web con traje formal en un entorno corporativo" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Sobre <span class="text-blue-600">Mí</span></h2>
            
            <div class="flex flex-col md:flex-row items-center gap-12 max-w-6xl mx-auto">
                <div class="md:w-1/3 lg:w-1/4">
                    <img src="" alt="[Tu Nombre] trabajando en su portátil en una cafetería moderna con café al lado" class="rounded-lg shadow-xl w-full" />
                </div>
                
                <div class="md:w-2/3 lg:w-3/4 mt-8 md:mt-0">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Mi trayectoria</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Soy un apasionado desarrollador web con más de 1 año y medio de experiencia creando aplicaciones y sitios web de alto rendimiento.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
            
                    </p>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Diseño Responsivo</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">UX/UI</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">SEO</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Seguridad</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Performance</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700">Testing</span>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Mis <span class="text-blue-600">Habilidades</span></h2>
            
            <div class="max-w-5xl mx-auto">
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Habilidades Técnicas
                    </h3>
                    <div class="flex flex-wrap gap-4">
                        <div class="skill-badge bg-white px-6 py-3 rounded-full shadow-md flex items-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-6 h-6 mr-2" alt="HTML5 logo">
                            <span>HTML5</span>
                        </div>
                        <div class="skill-badge bg-white px-6 py-3 rounded-full shadow-md flex items-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-6 h-6 mr-2" alt="CSS3 logo">
                            <span>CSS3</span>
                        </div>
                        <div class="skill-badge bg-white px-6 py-3 rounded-full shadow-md flex items-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-6 h-6 mr-2" alt="JavaScript logo">
                            <span>JavaScript</span>
                    </div>
                    <div class="skill-badge bg-white px-6 py-3 rounded-full shadow-md flex items-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-6 h-6 mr-2" alt="PHP logo">
                            <span>PHP</span>
                        </div>
                        <div class="skill-badge bg-white px-6 py-3 rounded-full shadow-md flex items-center">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-6 h-6 mr-2" alt="MySQL logo">
                            <span>MySQL</span>
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-16">Mis <span class="text-blue-600">Proyectos</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="project-card bg-white rounded-xl shadow-md overflow-hidden transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ae925e15-e8ee-426d-a87e-4feb9fb5068d.png" alt="Dashboard administrativo moderno con gráficos y métricas en tonos azules" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-blue-700 opacity-0 hover:opacity-80 transition duration-300 flex items-center justify-center">
                            <a href="#" class="text-white border-2 border-white px-4 py-2 rounded-lg font-medium hover:bg-white hover:text-blue-700 transition duration-300">Ver Detalles</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <h3 class="text-xl font-semibold text-gray-800">Sistema de Gestión</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Plataforma administrativa completa para gestión de recursos empresariales.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">Laravel</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">Vue.js</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">MySQL</span>
                        </div>
                    </div>
                </div>
                
                <div class="project-card bg-white rounded-xl shadow-md overflow-hidden transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d47fc25d-84e8-4fd4-a72f-2631464a6fe1.png" alt="Aplicación móvil de comercio electrónico mostrando productos destacados en una interfaz limpia" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-blue-700 opacity-0 hover:opacity-80 transition duration-300 flex items-center justify-center">
                            <a href="#" class="text-white border-2 border-white px-4 py-2 rounded-lg font-medium hover:bg-white hover:text-blue-700 transition duration-300">Ver Detalles</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <h3 class="text-xl font-semibold text-gray-800">E-commerce</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Tienda en línea con sistema de pagos integrado y panel de administración.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">React</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">Node.js</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">MongoDB</span>
                        </div>
                    </div>
                </div>
                
                <div class="project-card bg-white rounded-xl shadow-md overflow-hidden transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/30a4bd42-e415-402b-b6bc-5eb85dd959e9.png" alt="Interfaz de aplicación de salud con seguimiento de actividad física y nutrición en colores vibrantes" class="w-full h-full object-cover" />
                        <div class="absolute inset-0 bg-blue-700 opacity-0 hover:opacity-80 transition duration-300 flex items-center justify-center">
                            <a href="#" class="text-white border-2 border-white px-4 py-2 rounded-lg font-medium hover:bg-white hover:text-blue-700 transition duration-300">Ver Detalles</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <h3 class="text-xl font-semibold text-gray-800">App de Salud</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Aplicación para seguimiento de hábitos saludables y rutinas de ejercicio.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">Flutter</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">Firebase</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-700">API REST</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Ver Todos los Proyectos</a>
            </div>
        </div>
    </section>

    

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-2xl font-bold text-blue-400">Ezequiel Canelón</a>
                    <p class="mt-2 text-gray-400">© 2025 Ezequiel Canelón. Todos los derechos reservados.</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="https://github.com/ezequielcanelon2004" class="text-gray-400 hover:text-blue-400 transition duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <button onclick="topFunction()" id="scrollBtn" class="fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-700 transition duration-300 hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu after click
                document.querySelector('.mobile-menu').classList.add('hidden');
            });
        });

        // Show scroll to top button when scrolling
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var scrollBtn = document.getElementById("scrollBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollBtn.classList.remove("hidden");
            } else {
                scrollBtn.classList.add("hidden");
            }
        }

        // Scroll to top function
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would normally send the form data to a server
            // For demo purposes, we'll just show an alert
            alert('¡Gracias por tu mensaje! Me pondré en contacto contigo pronto.');
            
            // Reset the form
            this.reset();
        });
    </script>
</body>
</html>