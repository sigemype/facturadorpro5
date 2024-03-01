<!doctype html>
<html>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mr. SIF empresa dedicada al rubro de la facturacion">
    <title>Mr. Sif</title>
    <link rel="icon" href="{{ asset('web/img/logo_ofi.svg') }}">


    <head>
        <link href="{{ asset('web/css/output.css') }}" rel="stylesheet">
        <!-- Alpine  -->
        <script defer src="{{ asset('web/js/cdn.min.js') }}"></script>
        <!-- Alpine Plugins -->
        <script defer src="{{ asset('web/js/core.min.js') }}"></script>
        <!-- Alpine Core -->
        <script defer src="{{ asset('web/js/plugins.min.js') }}"></script>
        <!-- script alphine -->
        <script src="{{ asset('web/js/alpine.js') }}"></script>
    </head>

    <body>
        <div class="relative mx-auto dark:bg-slate-800 h-svh overflow-auto ring-1 ring-slate-900/5 -my-px">
            <div class="relative">
                <!-- =======================================================NAV NAVIGATOR====================================================== -->
                <div class="bg-white border-gray-900  sticky top-0 z-30" x-data="{ open: false }" @click.outside="open = false">
                    <nav class="bg-sigefact-skyblue px-4 lg:px-overlordcomunicate py-2.5 sticky top-0">
                        <div class="flex flex-wrap justify-between mx-auto max-w-screen-xl">
                            <div class="flex items-end">
                                <span class="text-white text-center px-30 text-sm lg:text-lg"><i>Comunícate con un asesor al: 999 916 791 </i></span>
                            </div>
                            <div class="flex items-center text-sm lg:text-lg">
                                <span class="text-white text-center ml-2 block pr-4 pl-10"><i>facturacion@mrsif.pe </i></span>
                                <a href="https://wa.link/mzycpw" target="_blank" class="flex items-center"><img src="{{ asset('web/img/whatsapp.svg') }}" class="mr-5 lg:h-7 text-white h-5 lg:px-overlordsome" alt="logo_wsp"></a>
                                <a href="https://www.facebook.com/people/Mr-Sif/61555620606572/" target="_blank" class="flex items-center"><img src="{{ asset('web/img/facebook.svg') }}" class="mr-5 lg:h-7 text-white h-5 lg:px-overlordsome" alt="logo_facebook"></a>
                                <a href="https://www.youtube.com/channel/UCs9kAfHBaips8ibik-ufGaw" target="_blank" class="flex items-center"><img src="{{ asset('web/img/youtube.svg') }}" class="mr-5 lg:h-7 text-white h-5 lg:px-overlordsome" alt="logo_youtube"></a>
                                <a href="https://www.instagram.com/mrs.sif/" target="_blank" class="flex items-center"><img src="{{ asset('web/img/instagram.svg') }}" class="mr-5 lg:h-7 text-white h-5 lg:px-overlordsome" alt="logo_instagram"></a>
                                <a href="https://www.youtube.com/channel/UCs9kAfHBaips8ibik-ufGaw" target="_blank" class="flex items-center"><img src="{{ asset('web/img/tiktok2.svg') }}" class="mr-5 lg:h-7 text-white h-5 lg:px-overlordsome" alt="logo_youtube"></a>
                            </div>
                        </div>
                    </nav>

                    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                                <a href="#inicio" class="flex items-center w-1/6"><img src="{{ asset('web/img/mrsig_logo.png') }}" alt="Logo" id="mrsiflogo0" /></a>

                        <div class="flex items-center lg:order-2">
                            <a href="https://wa.link/tw1gff" target="_blank" class="btn-sigefact">PROBAR DEMO</a>
                            <a href="https://ww1.sunat.gob.pe/ol-ti-itconsultaunificadalibre/consultaUnificadaLibre/consulta" target="_blank" class="btn-sigefact xs:hidden md:block">CONSULTA COMPROBANTE</a>
                            <button @click="open = !open" id="menu-button" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http:/www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <div id="menu-items" class="xs:hidden justify-between items-center w-full lg:block lg:w-auto lg:order-1 shadow-b-lg">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 text-lg ">
                                <li class=""><a href="#beneficios" class="block py-2 pr-4 pl-3 text-black lg:bg-transparent lg:p-0 hover:border-b-2 hover:border-sigefact-skyblue" aria-current="page">Beneficios</a></li>
                                <li class=""><a href="#soluciones" class="block py-2 pr-4 pl-3 text-black lg:bg-transparent lg:p-0 hover:border-b-2 hover:border-sigefact-skyblue" aria-current="page">Soluciones</a></li>
                                <li class=""><a href="#planes" class="block py-2 pr-4 pl-3 text-black lg:bg-transparent lg:p-0 hover:border-b-2 hover:border-sigefact-skyblue" aria-current="page">Planes</a></li>
                                <li class=""><a href="#clientes" class="block py-2 pr-4 pl-3 text-black lg:bg-transparent lg:p-0 hover:border-b-2 hover:border-sigefact-skyblue" aria-current="page">Clientes</a></li>
                                <li class=""><a href="#contacto" class="block py-2 pr-4 pl-3 text-black lg:bg-transparent lg:p-0 hover:border-b-2 hover:border-sigefact-skyblue" aria-current="page">Contacto</a></li>
                            </ul>
                        </div>

                        <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.250ms id="menu-items" class="justify-between items-center w-full lg:block lg:w-auto lg:order-1">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li><a @click="open = false" href="#beneficios" class="hover:border-b-2hover:text-white hover:bg-sky-500 block py-2 pr-4 pl-3 text-black rounded lg:bg-transparent lg:p-0" aria-current="page">Beneficios</a></li>
                                <li><a @click="open = false" href="#soluciones" class="hover:border-b-2 hover:text-white hover:bg-sky-500 block py-2 pr-4 pl-3 text-black rounded lg:bg-transparent lg:p-0" aria-current="page">Soluciones</a></li>
                                <li><a @click="open = false" href="#planes" class="hover:border-b-2 hover:text-white hover:bg-sky-500 block py-2 pr-4 pl-3 text-black rounded lg:bg-transparent lg:p-0" aria-current="page">Planes</a></li>
                                <li><a @click="open = false" href="#clientes" class="hover:border-b-2 hover:text-white hover:bg-sky-500 block py-2 pr-4 pl-3 text-black rounded lg:bg-transparent lg:p-0" aria-current="page">Clientes</a></li>
                                <li><a @click="open = false" href="#contacto" class="hover:border-b-2 hover:text-white hover:bg-sky-500 block py-2 pr-4 pl-3 text-black rounded lg:bg-transparent lg:p-0" aria-current="page">Contacto</a></li>
                            </ul>
                            </ul>
                        </div>

                    </div>
                </div>

            
                <!-- =======================================================SLIDER====================================================== -->
                <div class="relative overflow-hidden w-full z-20">
                    <div class="flex transition-transform duration-300 ease-in-out" id="slides">
                        <div class="w-full relative flex-shrink-0 shadow-md">
                            <img src="{{ asset('web/img/carrusel1.png') }}" alt="Slide 1" class="w-full h-auto">
                        </div>
                        <div class="w-full relative flex-shrink-0 shadow-md">
                            <img src="{{ asset('web/img/celular-fondo.png') }}" alt="Slide 2" class="w-full h-auto">
                        </div>
                        <div class="w-full relative flex-shrink-0">
                            <img src="{{ asset('web/img/carrusel3.png') }}" alt="Slide 3" class="w-full h-auto">
                            <div class="absolute inset-x-0 bottom-0  p-4 text-white"></div>
                        </div>
                    </div>

                    <button id="prevBtn" class="absolute bottom-0 left-0 top-0  flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-in-out hover:text-white hover:opacity-90 hover:outline-none focus:text-white focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http:/www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span class="absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                    </button>

                    <button id="nextBtn" class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-in-out hover:text-white hover:opacity-90 hover:outline-none focus:text-white focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http:/www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-10 w-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                    </button>
                </div>

                <div class="inset-x-0 bottom-0 bg p-4">
                    <h2 class="text-sigefact-blue font-semibold text-xl md:text-3xl lg:text-3xl text-center mb-2">
                        ¡Te asesoramos para que tu empresa llegue al siguiente nivel!
                    </h2>
                    <p class="text-center text-sigefact-skyblue font-semibold text-xl md:text-3xl lg:text-3xl">
                        <a class="hover:underline" href="#punto-venta">PUNTO DE VENTA</a> | 
                        <a class="hover:underline" href="#inventario">GESTIONA TU ALMACÉN</a> | 
                        <a class="hover:underline" href="#dashboard">GUÍA DE REMISIÓN</a> | 
                        <a class="hover:underline" href=" #ganancia-diaria">GANANCIA DIARIA</a>
                    </p>
                </div>

                <div class="box-section">
                    <div class="flex flex-col md:flex-row">
                        <div class="px-4">
                            <img src="{{ asset('web/img/logo_mrsif.png') }}" class="mr-5 h-10 md:h-16 my-0" alt="Sigefact Logo" />
                            <h3 class="text-sigefact-blue font-semibold text-3xl">Sistema de Facturas Electrónicas</h3>
                            <p class=" text-2xl mt-5">Para pequeñas y medianas empresas que necesitan integrar facturación electrónica en su sistema</p>
                            <!-- <span class="text-sigefact-blue font-bold text-2xl mt-5">Pruébalo Gratis</span> -->
                        </div>
                
                        <div class="flex items-center">
                            <div class="flex flex-row-reverse">
                                <div class="">
                                    <img src="{{ asset('web/img/mrsif.png') }}" alt="" class="">
                                </div>
                                <div class="flex justify-center">
                                    
                                    
                                    <div class="shadow-sm">
                                        <img src="{{ asset('web/img/a4F.png') }}" alt="" class="w-64 h-auto">
                                    </div>
                                    <div class="shadow-emerald-700">
                                        <img src="{{ asset('web/img/ticketF.png') }}" alt="" class="w-40 h-56">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- =======================================================BENEFICIOS====================================================== -->
                <div id="beneficios" class="box-section bg-sigefact-gray scroll-mt-24 snap-start">
                    <div class="box-title">
                        <h3 class="title-section">Beneficios</h3>
                        <div class="subtitle-section">
                            <h2 >Principales beneficios para <span class=" text-sigefact-skyblue"> Emprendedores como Tú </span>que necesitan integrar <span class="text-sigefact-skyblue">Facturación Electrónica </span></h2>
                        </div>
                    </div>
                    <div class="box-content " >
                        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 mt-5 pb-4 ">
                            <div class="shadow-2xl py-14 px-10 bg-white rounded-lg mx-14 mb-10" >
                                <ul class="list-inside text-sigefact-blue">
                                    <li class="mb-10 text-1xl"><span class="text-sigefact-skyblue">●</span> Cumplir con la normativa vigente de SUNAT.</li>
                                    <li class="text-1xl"><span class="text-sigefact-skyblue">●</span> Evitar multas y problemas legales.</li>
                                </ul>
                            </div>
        
                            <div class="shadow-2xl py-14 px-10 bg-white rounded-lg mx-14 mb-10">
                                <ul class=" list-inside text-sigefact-blue">
                                    <li class=" text-1xl"><span class="text-sigefact-skyblue">●</span> Reducción de tus costos de impresión, almacenaje y conservación de documentos físicos.</li><br>
                                    <li class="text-1xl"><span class="text-sigefact-skyblue">●</span> Mejora tus controles y registro de operaciones.</li>
                                </ul>
                            </div>
                            <div class=" shadow-2xl py-14 px-10 bg-white rounded-lg mx-14 mb-10">
                                <ul class="list-inside text-sigefact-blue">
                                    <li class="mb-10 text-1xl"><span class="text-sigefact-skyblue">●</span> Seguridad y validéz legal, medios seguros y con respaldo legal.</li>
                                    <li class="text-1xl"><span class="text-sigefact-skyblue">●</span> Disponibilidad desde cualquier lugar las 24 hrs del día.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- =======================================================SOLUCIONES====================================================== -->
                <div id="soluciones" class="box-section scroll-mt-24 snap-start">
                    <div class="box-title">
                        <h3 class="title-section">Soluciones</h3>
                        <div class="subtitle-section">
                            <h2>Múltiples soluciones de facturación electrónica </h2>
                            <h2 class="text-sigefact-skyblue">Para desarrolladores de software y empresas</h2>
                        </div>
                    </div>
                    <div class="box-content">
                        <div id="dashboard" class="box-solution" style="background-image:url({{ asset('web/img/fondo-soluciones.png)') }}">
                            <div class="text-center my-12 px-6 md:px-20 md:order-2">
                                <div class="flex justify-center items-center text-sigefact-skyblue mb-14">
                                    <svg class="w-20" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                    <div class="ml-10">
                                        <h2 class="uppercase text-sigefact-blue font-bold text-lg md:text-3xl">DASHBOARD</h2>
                                        <p class="text-sigefact-skyblue">Control y vista facil de tu negocio</p>
                                    </div>
                                </div>

                                <div id="ganancia-diaria" class="list-disc list-inside text-sigefact-skyblue font-bold md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Visualiza información clave de forma intuitiva y clara.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Accede a un panorama completo de tus datos en tiempo real</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2">Personalizable y Adaptable.   </p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Explora estadísticas administrativas y de ventas detalladas.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Genera informes perspicaces con un solo click </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-center p-4 md:order-2 h-full w-full">
                                <img class=" h-full w-full img-modulos" src="{{ asset('web/img/DASHBOAR') }}D-01.png" alt="DASHBOARD">
                            </div>
                        </div>
        
                        <div id="inventario" class="box-solution" style="background-image:url({{ asset('web/img/fondo-soluciones.png') }}">
                            <div class="text-center my-12 px-6 md:px-20 md:order-2">
                                <div class="flex justify-center items-center text-sigefact-skyblue mb-14">
                                    <svg class="w-20" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    <div class="ml-10">
                                        <h2 class="uppercase font-bold text-lg md:text-3xl text-sigefact-blue">INVENTARIO</h2>
                                        <p>Gestión facil y practica de tu inventario</p>
                                    </div>
                                </div>
        
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Gestión Centrada.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Visualiza información clave de forma intuitiva y clara.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Historial de movimientos.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Categorización de Productos.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Administra existencias con seguimiento detallado.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Realiza un seguimiento preciso de las entradas y salidas.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Optimiza la gestión de productos con una interfaz fácil de usar.</p>
                                </div>
                            </div>
                            <div class="flex justify-center items-center p-4 h-full w-full">
                                <img class=" h-full w-full img-modulos" src="{{ asset('web/img/KARDEXVALORIZADO.png') }}" alt="Captura de el inventario">
                            </div>
                        </div>
        
                        <div id="punto-venta" class="box-solution" style="background-image:url({{ asset('web/img/fondo-soluciones.png') }})">
                            <div class="text-center md:order-2 my-12 px-6 md:px-20">
                                <div class="flex justify-center items-center text-sigefact-skyblue mb-14">
                                    <svg class="w-20" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    <div class="ml-10">
                                        <h2 class="uppercase font-bold text-lg md:text-3xl text-sigefact-blue">PUNTO DE VENTA</h2>
                                        <p>Realiza ventas de forma rapida con el punto de venta</p>
                                    </div>
                                </div>
        
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2">Visualiza información clave de forma intuitiva y clara.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Optimiza tus operaciones con nuestro sistema de punto de venta.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold  text-black m-0 px-2">Reportes e informes.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Supervisa ventas, gastos y clientes en tiempo real.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Gestiona entradas y salidas de stock de manera eficiente.</p>
                                </div>
                                <div class="list-disc list-inside text-sigefact-skyblue font-bold  md:text-lg text-1xl flex items-center mb-3">
                                    <img src="{{ asset('web/img/check.png') }}" alt="">
                                    <p class="font-semibold text-black m-0 px-2"> Integración con Inventarios y Facturación.</p>
                                </div>

                            </div>
                            
                            
                            <div class="flex justify-center items-center p-4 md:order-2 h-full w-full">
                                <img class=" h-full w-full img-modulos" src="{{ asset('web/img/DEMOPOS.png') }}" alt="Captura de Punto de venta del Sistema">
                            </div>
                        </div>

                        <div class="bg-white text my-10">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                                <div class="py-14 px-6 md:px-10 bg-white rounded-lg mb-6 md:ml-0 md:mr-0 md:mb-0 shadow-lg">
                                    <ul class="list-disc list-inside">
                                        <li class="text-sigefact-skyblue mb-3 text-xl md:text-2xl">100% en la nube</li>
                                        <p class="text-base md:text-1xl text-grshadow-lgay-500">Cada vez que ingreses estarás usando la versión más actualizada.</p>
                                    </ul>
                                </div>
                                <div class="py-14 px-6 md:px-10 bg-white rounded-lg mb-6 md:ml-0 md:mr-0 md:mb-0 shadow-lg">
                                    <ul class="list-disc list-inside">
                                        <li class="text-sigefact-skyblue mb-3 text-xl md:text-2xl">Seguridad</li>
                                        <p class="text-base md:text-1xl text-gray-500">La información de tu negocio está hospedada en nuestros servidores especializados.</p>
                                    </ul>
                                </div>
                                <div class="py-14 px-6 md:px-10 bg-white rounded-lg mb-6 md:ml-0 md:mr-0 md:mb-0 shadow-lg">
                                    <ul class="list-disc list-inside">
                                        <li class="text-sigefact-skyblue mb-3 text-xl md:text-2xl">Actualizaciones</li>
                                        <p class="text-base md:text-1xl text-gray-500">Toda tu información actualizada en tiempo real y disponible cuando la necesites.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ========================================================VIDEOS====================================================== -->
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="p-4 rounded-lg bg-white place-items-center">
                        <img src="{{ asset('web/img/mrsif_exposing.svg') }}" alt="Demo" class="w-full h-auto md:w-3/4 mx-auto xs:hidden md:hidden lg:block">
                    </div>
                
                    <div class="rounded-lg bg-white grid place-items-center">
                        <iframe class="shadow-2xl shadow-sigefact-blue m-auto rounded-sm xs:h-40 md:w-3/2 h-90 lg:h-60 lg:w-4/5 mb-3 w-72"
                            src="https://www.youtube.com/embed/MLJ9IbS-QKU?si=9LtMdEeh_A9nwGO1" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                
                    <div class="p-4 rounded-lg bg-white grid place-items-center">
                        <img src="{{ asset('web/img/conname.png') }}" alt="Logo Mr Sif" class="my-2 md:h-auto w-1/2">
                        <ul class="list-disc list-inside text-sigefact-blue pl-4 md:pl-10 pb-4 md:pb-16">
                            <li class="text-gray-500 text-base md:text-1xl">Fácil</li>
                            <li class="text-gray-500 text-base md:text-1xl">Rápido</li>
                            <li class="text-gray-500 text-base md:text-1xl">Seguro</li>
                            <li class="text-gray-500 text-base md:text-1xl">Económico</li>
                        </ul>
                    </div>
                </div>
                
            
                <div class="px-5 py-16 min-h-[20rem] flex items-center justify-center">
                    <div x-data="panel" class="flex w-full flex-col bg-sigefact-gray rounded-md">
                        <div x-bind="carrete" class="flex space-x-6">
                            <h2 id="carousel-label" class="sr-only" hidden>Videos</h2>
            
                            <!-- Controls -->
                            <button x-on:click="prev" class="text-6xl">
                                <svg xmlns="http:/www.w3.org/2000/svg" class="h-12 w-12 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                                </span>
                                <span class="sr-only">Anterior</span>
                            </button>
                            <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>
            
                            <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label" class="flex w-full snap-x snap-mandatory overflow-x-scroll">
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/Lo0c_qy0Xtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/_1dvQnCpNFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/xIK3ghDCa5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/mEYAX2oRkYg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/qF6anE1jcVc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                                <li class="flex w-full md:w-1/2 lg:w-1/3 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><iframe src="https://www.youtube.com/embed/18_hQ9qzrzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
                            </ul>
                            <button x-on:click="next" class="text-6xl">
                                <span aria-hidden="true">
                                    <svg xmlns="http:/www.w3.org/2000/svg" class="h-12 w-12 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                                <span class="sr-only">siguiente</span>
                            </button>
            
                        </div>
                    </div>
                </div>

                <!--=========================================================PLANES===================================================== -->
                <div id="planes" class="box-section bg-sigefact-gray  scroll-mt-24 snap-start" >
                    <div class="box-title ">
                        <h3 class="title-section">Planes para tu Crecimiento</h3>
                        <div class="subtitle-section">
                            <h2>Todos nuestros planes incluyen Facturación Electrónica</h2>
                            <!-- <br><br><br><br><br> -->
                            <!-- <img class="absolute top-0 right-0 -mt-20 ml-4 z-10" src="{{ asset('web/img/hormigaArriba.png') }}" alt=""> -->

                        </div>
                    </div>
                    <div class="box-content text-center ">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pb-8 ">
                            <div class="lg:py-2overlord py-14 px-10 bg-white rounded-lg mx-4 shadow-2xl">
                                <h4 class="font-semibold text-2xl text-sigefact-skyblue mb-5 ">Plan <br>TE ACOMPAÑA</h4>
                                <span class="text-sigefact-blue m b-5 font-semibold">1 Usuario</span>
                                <p class="mt-5 text-sigefact-skyblue text-3xl">S/ 60.00 / <span class="text-sigefact-skyblue text-2xl">MES</span></p>
                                <p class="text-sigefact-blue font-semibold mb-10 ">S/ 600 ANUALES</p>
                                <a href="#" class="btn-sigefact">COMPRAR AHORA</a>
                                <p class="mt-8 text-sigefact-blue font-semibold mb-10">80 comprobantes mensuales</p>
                            </div>
                            <div class="lg:py-2overlord py-14 px-10  bg-white rounded-lg mx-4 shadow-2xl">
                                <h4 class="font-semibold text-2xl text-sigefact-skyblue mb-5 ">Plan <br>SIGUE CONTIGO</h4>
                                <span class="text-sigefact-blue m b-5 font-semibold">3 Usuarios</span>
                                <p class="mt-5 text-sigefact-skyblue text-3xl">S/ 80.00 / <span class="text-sigefact-skyblue text-2xl">MES</span></p>
                                <p class="text-sigefact-blue font-semibold mb-10">S/ 800 ANUALES</p>
                                <a href="#" class="btn-sigefact">COMPRAR AHORA</a>
                                <p class="mt-8 text-sigefact-blue font-semibold mb-10">500 comprobantes mensuales</p>
                            </div>
                            <div class="lg:py-2overlord py-14 px-10  bg-white rounded-lg mx-4 shadow-2xl">
                                <h4 class="font-semibold text-2xl text-sigefact-skyblue mb-5">Plan <br>SIGUE CRECIENDO</h4>
                                <span class="text-sigefact-blue m b-5 font-semibold">Usuarios ilimitados</span>
                                <p class="mt-5 text-sigefact-skyblue text-3xl">S/ 100.00 / <span class="text-sigefact-skyblue text-2xl">MES</span></p>
                                <p class="text-sigefact-blue font-semibold mb-10">S/ 1000 ANUALES</p>
                                <a href="#" class="btn-sigefact">COMPRAR AHORA</a>
                                <p class="mt-8 text-sigefact-blue font-semibold mb-10">Comprobantes ilimitados</p>
                            </div>

                            <div class="lg:py-2overlord py-14 px-10  bg-white rounded-lg mx-4 shadow-2xl">

                                <h4 class="font-semibold text-2xl text-sigefact-skyblue mb-5 ">Plan <br>PREMIUM</h4>
                                <span class="text-sigefact-blue  font-semibold">Usuarios ilimitados</span>
                                <p class="mt-5 text-sigefact-skyblue text-3xl pb-6">CONSULTAR</p>
                                <p class="text-sigefact-blue font-semibold mb-10"></p>
                                <a href="#" class="btn-sigefact">COMPRAR AHORA</a>
                                <p class="mt-8 text-sigefact-blue font-semibold mb-10">Comprobantes ilimitados</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!--=========================================================CLIENTES y TEXTO CIERRE===================================================== -->
                <div id="clientes" class="flex flex-col bg-sigefact-gray shadow-2xl scroll-mt-24 snap-start">
                    <div class="text-center bg-sigefact-gray box-title"">
                        <span class="text-center font-semibold text-sigefact-skyblue text-4xl md:text-6xl title-section">Clientes</span>
                        <p class="text-gray-500 font-semibold text-2xl py-4">Empresas líderes en distintos sectores confían
                            plenamente en nuestra experiencia, incorporando con éxito nuestra innovadora solución integral de
                            <span class="text-sigefact-skyblue text-3xl font-semibold ">Facturas Electrónicas</span>
                        </p>
                        <div class="text-center">
        
                            <!-- =================================prueba =====================================-->
                            <div class="min-h-[10rem] flex items-center justify-center bg-sigefact-gray">
                                <div x-data="panelClient" class="flex w-full flex-col bg-sigefact-gray rounded-md">
                                    <div x-bind="carrete" class="flex space-x-6">
                                        <h2 id="carousel-label" class="sr-only" hidden>Videos</h2>
                                        <!-- Controls -->
                                        <button x-on:click="prev" class="text-6xl">
                                            <svg xmlns="http:/www.w3.org/2000/svg" class="h-12 w-12 text-gray-600" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                            </svg>
                                            <span class="sr-only">Anterior</span>
                                        </button>
                                        <span id="carousel-content-label" class="sr-only" hidden>Carousel</span>
        
                                        <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label" class="flex w-full snap-x snap-mandatory overflow-x-scroll">
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/ciencias.png') }}" alt="Grupo_Ciencias"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/1.png') }}" alt="cliente1"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/2.png') }}" alt="cliente2"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/3.jpg') }}" alt="cliente3"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/4.png') }}" alt="cliente4"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/6.jpeg') }}" alt="cliente5"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/7.jpg') }}" alt="cliente6"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/8.jpg') }}" alt="cliente7"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/9.jpg') }}" alt="cliente8"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/10.png') }}" alt="cliente9"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/11.jpeg') }}" alt="cliente10"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/12.jpeg') }}" alt="cliente11"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/13.jpg') }}" alt="cliente12"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/13.jpeg') }}" alt="cliente13"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/14.png') }}" alt="cliente14"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/15.png') }}" alt="cliente15"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/16.jpg') }}" alt="cliente16"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/17.jpeg') }}" alt="cliente17"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/18.png') }}" alt="cliente18"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/19.png') }}" alt="cliente19"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/20.JPG') }}" alt="cliente20"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/21.png') }}" alt="cliente21"></li>
                                            <li class="flex w-1/2 md:w-1/5 lg:w-1/6 shrink-0 snap-start flex-col items-center justify-center p-2" role="option"><img class="h-20" src="{{ asset('web/img/22.jpg') }}" alt="cliente22"></li>
                                        </ul>
        
                                        <button x-on:click="next" class="text-6xl">
                                            <span aria-hidden="true">
                                                <svg xmlns="http:/www.w3.org/2000/svg" class="h-12 w-12 text-gray-600" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </span>
                                            <span class="sr-only">siguiente</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-section leap bg-sigefact-gray w-full px-4 py-6 md:px-10 md:py-8 lg:px-16 lg:py-10">
                            <div class="subtitle-section text-center">
                                <h2 class="text-2xl md:text-3xl lg:text-4xl">Prueba con nuestras múltiples soluciones de <span class="text-sigefact-skyblue">Facturas Electrónicas</span></h2>
                                <div class="flex justify-center mt-4">
                                    <a href="#" class="btn-sigefact text-lg md:text-xl lg:text-2xl">CREAR CUENTA</a>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>

                <!--=========================================================FOOTER===================================================== -->
                <footer id="contacto" class="bg-sigefact-gray border-t-4 border-t-sigefact-gray mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 font-mono text-sm leading-6 bg-stripes-fuchsia rounded-lg md:mb-0">
                        <!-- Bloque 1: Logo y Nosotros -->
                        <div class="p-4 bg-sigefact-gray">
                            <img src="{{ asset('web/img/sigemype.svg') }}" class="h-24 mx-auto md:h-32" alt="logo_sigemype">
                        </div>
                
                        <!-- Bloque 2: Nosotros -->
                        <div class="p-4 bg-sigefact-gray">
                            <h6 class="text-sigefact-skyblue text-xl md:text-2xl font-semibold">Nosotros</h6>
                            <ul class="font-medium text-gray-500">
                                <li><a href="contacto.html" target="_blank">Quiénes somos</a></li>
                                <li>Misión</li>
                                <li>Visión</li>
                                <li>Nuestro equipo</li>
                            </ul>
                        </div>
                
                        <!-- Bloque 3: Soluciones -->
                        <div class="p-4 bg-sigefact-gray">
                            <h6 class="text-sigefact-skyblue text-xl md:text-2xl font-semibold">Soluciones</h6>
                            <ul class="font-medium text-gray-500">
                                <li>Contabilidad</li>
                                <li>Facturación electrónica</li>
                                <li>POS - Punto de venta</li>
                                <li>API desarrolladores</li>
                            </ul>
                        </div>
                
                        <!-- Bloque 4: Contenido -->
                        <div class="p-4 bg-sigefact-gray">
                            <h6 class="text-sigefact-skyblue text-xl md:text-2xl font-semibold">Contenido</h6>
                            <ul class="font-medium text-gray-500">
                                <li>Blog</li>
                                <li>Cursos</li>
                                <li>Centro de ayuda</li>
                                <li>Términos y condiciones</li>
                            </ul>
                        </div>
                
                        <!-- Bloque 5: Logo de Marca -->
                        <div class="p-4 bg-sigefact-gray flex items-center justify-center">
                            <a href="#" class="grid place-items-center">
                                <img class="h-24 md:h-32" src="{{ asset('web/img/logo_mrsif.png') }}" alt="hormiga">
                            </a>
                        </div>
                    </div>
                
                    <!-- Derechos de Autor -->
                    <div class="bg-sigefact-gray px-4 lg:px-overlordcomunicate rounded-lg text-sigefact-blue text-xl text-center py-4">
                        <p class="text-sm text-sigefact-blue">&copy; 2024 <span class="">Designed by STI Gold</span> Todos los derechos reservados.</p>
                    </div>
                </footer>
            

                <!-- =======================================================BOTTON ACCION WSP====================================================== -->
                <div class="transition duration-300 ease-in-out opacity-70 hover:opacity-100 xs:hidden sm:hidden md:block">
                    <a href="https://wa.link/tw1gff" target="_blank">
                        <div class="list-image-[url({{ asset('web/img/hormiga_flotante.svg') }})]">
                            <img class="fixed right-4 bottom-4 p-2 w-40" src="{{ asset('web/img/hormiga_flotante.svg') }}" alt="hormiga_wsp">
                        </div>
                    </a>
                </div>
                <div class="">
                    <a href="https://wa.link/tw1gff" target="_blank" class="transition duration-300 ease-in-out opacity-90 hover:opacity-100 md:hidden">
                        <div class="list-image-[url({{ asset('web/img/hormiga_flotante')}})]">
                            <img class="fixed right-4 bottom-4 p-2 w-20" src="{{ asset('web/img/whatsapp_btn.png') }}" alt="icono_wsp">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <script>
            const slides = document.getElementById('slides');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
        
            let currentIndex = 0;
        
            function showSlide(index) {
                slides.style.transform = `translateX(${-index * 100}%)`;
            }
        
            function prevSlide() {
                currentIndex = (currentIndex - 1 + 3) % 3;
                showSlide(currentIndex);
            }
        
            function nextSlide() {
                currentIndex = (currentIndex + 1) % 3;
                showSlide(currentIndex);
            }
        
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
            intervalId = setInterval(nextSlide, 5000);
          
        </script>
    </body>
</html>
