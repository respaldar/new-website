<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Respaldar - Somos tu Garantía Para Alquilar Rápida y Sin Complicaciones
  </title>
  <meta
    name="description"
    content="Obtén una garantía para alquilar rápida, segura y sin complicaciones. Preaprobación Express gratuita y sin necesidad de garantes propietarios. ¡Rápido y fácil!" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.respaldar.com.ar/" />
  <meta
    property="og:title"
    content="Respaldar - Sistema de Garantía Para Alquilar" />
  <meta
    property="og:description"
    content="Tu garantía para alquilar al mejor precio del mercado. Preaprobación Express sin costo. Requisitos mínimos." />
  <meta
    property="og:image"
    content="https://www.respaldar.com.ar/img/wp-thumb.png" />

  <!-- Twitter / Facebook-->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.respaldar.com.ar/" />
  <meta
    property="twitter:title"
    content="Respaldar - Sistema de Garantía Para Alquilar" />
  <meta
    property="twitter:description"
    content="Tu garantía para alquilar al mejor precio del mercado. Preaprobación Express sin costo. Requisitos mínimos." />
  <meta
    property="twitter:image"
    content="https://www.respaldar.com.ar/img/banner-redes.png" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />

  <!-- Css -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="style.min.css" rel="stylesheet" />
</head>

<body>
  <header class="bg-black relative">
    <nav
      class="mx-auto flex items-center justify-between py-3 md:py-6"
      aria-label="Global">
      <div class="flex container justify-between">
        <div class="flex lg:flex-1 items-center">
          <a href="index.html">
            <img
              src="img/logo.svg"
              alt="logo"
              width="220"
              height="40"
              class="w-[140px] md:w-[220px] h-auto" />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-respaldar"
            id="menu-button"
            aria-expanded="false">
            <span class="sr-only">Abrir Menu principal</span><svg
              xmlns="http://www.w3.org/2000/svg"
              alt="menu"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
              data-slot="icon"
              class="h-6 w-6">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 md:items-center">
          <a
            href="index.html"
            class="text-sm font-semibold leading-6 text-white cursor-pointer">INICIO</a>
          <div class="relative group">
            <div
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white cursor-pointer"
              onclick="toggleSubmenu(this)">
              GARANTÍA
              <img
                src="img/icons/chevron-down.svg"
                alt="chevron-down"
                class="h-5 w-5 flex-none text-respaldar" />
            </div>

            <!-- Sub-Garantía -->
            <div
              class="submenu absolute left-0 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 hidden">
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      alt="garantia"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                      data-slot="icon"
                      class="h-6 w-6 text-gray-600 group-hover:text-respaldar">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"></path>
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a
                      href="pre-aprobado-express-sin-cargo"
                      class="block font-semibold text-gray-900">Solicitar Garantía<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Rápida y al mejor precio del mercado
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/calculator-solid.svg"
                      class="w-6 h-6"
                      alt="calculator" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="calcularcosto.html"
                      class="block font-semibold text-gray-900">Calcular Costos<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Aprovechá nuestras promociones semanales
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/user-gear-solid.svg"
                      class="w-6 h-6"
                      alt="mi-garantia" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="/busca-tu-solicitud"
                      class="block font-semibold text-gray-900">Mí Garantía<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Seguí el proceso de tu garantía de cerca
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                <a
                  href="tel:+541145513338"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100"
                  aria-label="Llamar a (011) 4551-3338">
                  <img src="img/icons/phone.svg" class="w-4" alt="phone" />
                  4551-3338
                </a>
                <a
                  href="https://api.whatsapp.com/send/?phone=5491180590005&text=Quiero+obtener+informacion&type=phone_number&app_absent=0"
                  aria-label="Enviar un mensaje por Whatsapp a +54 9 11 8059-0005"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                  <img src="img/icons/whatsapp.svg" class="w-4" alt="phone" />
                  Respy IA
                </a>
              </div>
            </div>
            <!-- Sub-Garantia END-->
          </div>

          <div class="relative group">
            <div
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white cursor-pointer"
              onclick="toggleSubmenu(this)">
              INFORMACIÓN
              <img
                src="img/icons/chevron-down.svg"
                alt="chevron-down"
                class="h-5 w-5 flex-none text-respaldar" />
            </div>
            <!-- Sub-Info -->
            <div
              class="submenu absolute left-0 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 hidden">
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/users-solid.svg"
                      class="w-6 h-6"
                      alt="inquilinos" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="inquilinos.html"
                      class="block font-semibold text-gray-900">Inquilinos<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Rápida y al mejor precio del mercado
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/home-green.svg"
                      class="w-6 h-6"
                      alt="propietarios" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="propietarios.html"
                      class="block font-semibold text-gray-900">Propietarios<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Aprovechá nuestras promociones semanales
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/building-solid.svg"
                      class="w-6 h-6"
                      alt="inmobiliaria" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="inmobiliarias.html"
                      class="block font-semibold text-gray-900">Inmobiliarias<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Aprovechá nuestras promociones semanales
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/circle-info-solid.svg"
                      class="w-6 h-6"
                      alt="faqs" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="faq.html"
                      class="block font-semibold text-gray-900">Preguntas Frecuentes (FAQs)<span
                        class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Aprovechá nuestras promociones semanales
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                <a
                  href="tel:+541145513338"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100"
                  aria-label="Llamar a (011) 4551-3338">
                  <img src="img/icons/phone.svg" class="w-4" alt="phone" />
                  4551-3338
                </a>
                <a
                  href="https://api.whatsapp.com/send/?phone=5491180590005&text=Quiero+obtener+informacion&type=phone_number&app_absent=0"
                  aria-label="Enviar un mensaje por Whatsapp a +54 9 11 8059-0005"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                  <img src="img/icons/whatsapp.svg" class="w-4" alt="phone" />
                  Respy IA
                </a>
              </div>
            </div>
            <!-- Sub-Info END-->
          </div>
          <div class="relative group">
            <div
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white cursor-pointer"
              onclick="toggleSubmenu(this)">
              INMOBILIARIAS
              <img
                src="img/icons/chevron-down.svg"
                alt="chevron-down"
                class="h-5 w-5 flex-none text-respaldar" />
            </div>
            <!-- Sub-Inmo -->
            <div
              class="submenu absolute left-0 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 hidden">
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/handshake-angle-solid.svg"
                      class="w-6 h-6"
                      alt="adheridas" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="listadoinmobiliarias.html"
                      class="block font-semibold text-gray-900">Adheridas<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Rápida y al mejor precio del mercado
                    </p>
                  </div>
                </div>

                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <img
                      src="img/icons/user-tie-solid.svg"
                      class="w-6 h-6"
                      alt="agentes-oficiales" />
                  </div>
                  <div class="flex-auto">
                    <a
                      href="agenteoficial.html"
                      class="block font-semibold text-gray-900">Agentes Oficiales<span class="absolute inset-0"></span></a>
                    <p class="mt-1 text-gray-600">
                      Seguí el proceso de tu garantía de cerca
                    </p>
                  </div>
                </div>
              </div>

              <div
                class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                <a
                  href="tel:+541145513338"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100"
                  aria-label="Llamar a (011) 4551-3338">
                  <img src="img/icons/phone.svg" class="w-4" alt="phone" />
                  4551-3338
                </a>
                <a
                  href="https://api.whatsapp.com/send/?phone=5491180590005&text=Quiero+obtener+informacion&type=phone_number&app_absent=0"
                  aria-label="Enviar un mensaje por Whatsapp a +54 9 11 8059-0005"
                  class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                  <img src="img/icons/whatsapp.svg" class="w-4" alt="phone" />
                  Respy IA
                </a>
              </div>
            </div>
            <!-- Sub-Inmo END-->
          </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end md:items-center">
          <a
            href="https://sistema.respaldar.com.ar/admin/login/agente-oficial"
            target="_blank"
            class="text-sm font-semibold leading-6 text-white border-[1.5px] border-respaldar py-1 px-4 rounded-full">Solicitá tu Garantía
            <span aria-hidden="true" class="text-respaldar pl-2 font-black">→</span></a>
        </div>
      </div>
    </nav>

    <nav id="mobile-nav">
      <ul style="touch-action: pan-y">
        <li class="menu-active"><a href="index.html">Inicio</a></li>
        <li class="menu-has-children">
          <a href="#" class="submenu-toggle">
            Garantía
            <img
              src="img/icons/chevron-down.svg"
              alt="Chevron Down"
              class="chevron" />
          </a>
          <ul class="submenu">
            <li>
              <a href="pre-aprobado-express-sin-cargo">Solicitar Garantía</a>
            </li>
            <li><a href="calcularcosto.html">Calcular Costos</a></li>
            <li><a href="busca-tu-solicitud">Mi Garantía</a></li>
          </ul>
        </li>
        <li class="menu-has-children">
          <a href="#" class="submenu-toggle">
            Información
            <img
              src="img/icons/chevron-down.svg"
              alt="Chevron Down"
              class="chevron" />
          </a>
          <ul class="submenu">
            <li><a href="inquilinos.html">Inquilinos</a></li>
            <li><a href="propietarios.html">Propietarios</a></li>
            <li><a href="inmobiliarias.html">Inmobiliarias</a></li>
            <li><a href="faq.html">Preguntas Frecuentes</a></li>
          </ul>
        </li>
        <li class="menu-has-children">
          <a href="#" class="submenu-toggle">
            Inmobiliarias
            <img
              src="img/icons/chevron-down.svg"
              alt="Chevron Down"
              class="chevron w-4 h-4" />
          </a>
          <ul class="submenu">
            <li><a href="listadoinmobiliarias.html">Adheridas</a></li>
            <li><a href="agenteoficial.html">Agentes Oficiales</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
      <div class="log-in">
        <a
          href="https://sistema.respaldar.com.ar/admin/login/agente-oficial"
          target="_blank">
          <i class="fas fa-user-tie"></i> Acceder
        </a>
      </div>
    </nav>

    <div
      style="
          position: fixed;
          top: 1px;
          left: 1px;
          width: 1px;
          height: 0;
          padding: 0;
          margin: -1px;
          overflow: hidden;
          clip: rect(0, 0, 0, 0);
          white-space: nowrap;
          border-width: 0;
          display: none;
        "></div>
  </header>

  <?php

  if (isset($_POST['presupuestar'])) {

    function roundToNearest100($number)
    {
      return ceil($number / 100) * 100;
    }

    function roundToNearest10($number)
    {
      return ceil($number / 10) * 10;
    }

    $alquiler = $_POST['alquiler'];
    $expensas = $_POST['expensas'];
    $plazo = $_POST['plazo'];

    $montoAlquiler = str_replace(".", "", $alquiler);
    $montoExpensas = str_replace(".", "", $expensas);
    $cantidadMeses = str_replace(".", "", $plazo);

    if ($cantidadMeses <= 6) {
      $garantia = ($montoAlquiler + $montoExpensas) * 6 * 0.08;
      $garantiaContado = $garantia * 0.8;
      $ahorroContado = $garantia - $garantiaContado;
      $garantiaTresCuotas = $garantia / 3;
      $ahorroTresCuotas = $garantia - ($garantiaTresCuotas * 3);
    }
    if ($cantidadMeses > 6 && $cantidadMeses <= 12) {
      $garantia = ($montoAlquiler + $montoExpensas) * $cantidadMeses * 0.08;
      $garantiaContado = $garantia * 0.8;
      $ahorroContado = $garantia - $garantiaContado;
      $garantiaTresCuotas = $garantia / 3;
      $ahorroTresCuotas = $garantia - ($garantiaTresCuotas * 3);
    }
    if ($cantidadMeses > 12) {
      $garantia = ($montoAlquiler + $montoExpensas) * $cantidadMeses * 0.08;
      $garantiaContado = $garantia * 0.7;
      $ahorroContado = $garantia - $garantiaContado;
      $garantiaTresCuotas = $garantia * 0.85 / 3;
      $ahorroTresCuotas = $garantia - ($garantiaTresCuotas * 3);
      $garantiaTarjeta = $garantia;
      $garantiaSeisCuotasAnticipo = $garantia * 0.3;
      $garantiaSeisCuotasCuotas = $garantia * 0.7 / 5;
    }
  } else {
    header('Location: index.html');
    exit();
  }
  ?>

  <section id="calculador" class="bg-respaldarlight md:py-16 py-8 bg-cover bg-center relative md:flex md:items-center">
    <!--     <div class=" absolute top-0 left-0 right-0 bottom-0 z-10" style="background-color: rgba(0, 0, 0, 0.5);"></div>
 -->
    <div class="container">

      <h2 class="text-black md:text-4xl text-2xl font-bold text-center md:pb-16 pb-8">
        Calculador de Costos
      </h2>

      <!--       <div class="md:flex md:justify-center">
        <div class="border-2 border-respaldar rounded px-3 py-2 relative">
          <span class="absolute top-[-15px] left-[-15px] ">
            <img src="img/icons/info.svg" alt="alquiler-icon" class="w-8 text-white">
          </span>

          <div class="grid md:grid-cols-2 grid-cols-3 items-center">

            <div class="col-span-2 md:col-span-1">
              <div class="flex items-center">
                <span class="font-bold text-respaldar"> Alquiler: </span>
                <span class="text-sm pl-2">$ <?php echo $alquiler; ?>.-</span>
              </div>
              <div class="flex items-center">
                <span class="font-bold text-respaldar"> Expensas: </span>
                <span class="text-sm pl-2">$ <?php echo $expensas; ?>.-</span>
              </div>
              <div class="flex items-center">
                <span class="font-bold text-respaldar"> Duración: </span>
                <span class="text-sm pl-2"><?php echo $plazo; ?> meses</span>
              </div>
            </div>

            <div class="flex justify-center col-span-1">
              <a href="calcularcosto.html" class="flex items-center border border-respaldar bg-green-100 px-2 py-2 rounded text-sm text-respaldar">
                <img src="img/icons/pencil.svg" alt="pencil" class="w-4 mr-2"> Editar
              </a>
            </div>

          </div>
        </div>
      </div> -->


      <!--       <div class="flex flex-col">
        <div class="flex justify-center items-center gap-2 py-3">
          <span
            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">$ <?php echo $alquiler; ?></span>
          <span
            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">$ <?php echo $expensas; ?></span>
          <span
            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"><?php echo $plazo; ?> meses</span>
          <span
            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10 cursor-pointer"><img src="img/icons/clock.png" class="h-4" alt="icon" /></span>
        </div>
      </div> -->
      <div class="flex flex-col md:flex-row gap-2 justify-center pt-3">
        <div
          class="border-2 border-respaldar rounded px-4 py-4 flex flex-col align-middle justify-center items-center md:w-1/5 relative">
          <span class="absolute top-[-15px] left-[-15px] ">
            <img src="img/icons/info.svg" alt="alquiler-icon" class="w-8 text-white">
          </span>
          <p class="font-bold text-sm pb-1">Alquiler: $ <?php echo $alquiler; ?>.-</p>
          <p class="font-bold text-sm pb-1">Expensas: $ <?php echo $expensas; ?>.-</p>
          <p class="font-bold text-sm">Duración: <?php echo $plazo; ?> meses</p>
          <footer class="pt-2">
            <a href="calcularcosto.html" class="flex items-center border border-respaldar bg-green-100 px-2 py-2 rounded text-xs text-respaldar">
              <img src="img/icons/pencil.svg" alt="pencil" class="w-3 mr-2"> Modificar Valores
            </a>
          </footer>
        </div>



        <div class="bg-respaldar rounded px-4 py-4 flex flex-col justify-between md:w-1/3">
          <header id="badges">
            <span
              class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">🔥30% OFF</span>
            <span
              class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Ahorrá $ <?php echo number_format(roundToNearest100($ahorroContado), 0, ',', '.'); ?> .-</span>

          </header>
          <footer>
            <div class="pt-4 font-bold text-white">
              <span class="text-sm">$</span>
              <span class="text-2xl"><?php echo number_format(roundToNearest100($garantiaContado), 0, ',', '.'); ?>.-</span>
            </div>
            <p class="text-sm text-white">pagando de contado</p>
            <!-- <div class="flex justify-center pt-4">
              <a
                href="#"
                class="bg-black text-white px-4 py-2 rounded-lg w-full text-center font-semibold text-sm shadow-md hover:bg-respaldar hover:text-white transition duration-300">Solicitar Descuento</a>
            </div> -->
          </footer>
        </div>

        <div
          class="bg-white rounded px-4 py-4 flex flex-col justify-between md:w-1/3">
          <header id="badges">
            <span
              class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">15% OFF</span>
            <span
              class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Ahorrá $ <?php echo number_format(roundToNearest100($ahorroTresCuotas), 0, ',', '.'); ?> .-</span>
          </header>
          <footer>
            <div class="pt-4 font-bold text-black">
              <span class="text-sm">$</span>
              <span class="text-2xl"><?php echo number_format(roundToNearest100($garantiaTresCuotas), 0, ',', '.'); ?>.-</span>
            </div>
            <p class="text-sm text-black">3 Cuotas sin Interés</p>
            <!--   <div class="flex justify-center pt-4">
              <a
                href="#"
                class="bg-black text-white px-4 py-2 rounded-lg w-full text-center font-semibold text-sm shadow-md hover:bg-green-700 transition duration-300">Solicitar Descuento</a>
            </div> -->
          </footer>
        </div>

        <div
          class="bg-white rounded px-4 py-4 flex flex-col justify-between md:w-1/3">
          <header id="badges">
            <span
              class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">6 Cuotas</span>
          </header>
          <footer>
            <div class="pt-4 font-bold text-black">
              <span class="text-sm">$</span>
              <span class="text-2xl"><?php echo number_format(roundToNearest100($garantiaSeisCuotasAnticipo), 0, ',', '.'); ?>.-</span>
            </div>
            <p class="text-sm text-black">& 5 Cuotas de <?php echo number_format(roundToNearest100($garantiaSeisCuotasCuotas), 0, ',', '.'); ?>.-
            </p>
            <!--  <div class="flex justify-center pt-4">
              <a
                href="#"
                class="bg-black text-white px-4 py-2 rounded-lg w-full text-center font-semibold text-sm shadow-md hover:bg-green-700 transition duration-300">Solicitar Promoción</a>
            </div> -->
          </footer>
        </div>
      </div>

      <div class="flex justify-center">
        <div class="bg-white text-black px-6 py-2 mt-5 rounded md:rounded-full font-bold md:w-full flex items-center justify-between">
          <p>Financiá tu garantía en hasta 24 cuotas</p>
          <a href="" class="float-right bg-black px-3 py-2 text-xs md:px-6 md:text-sm md:font-bold font-bold text-white rounded-full">Solicitar</a>
        </div>
      </div>

    </div>
  </section>

  <section class="bg-black">
    <div class="bg-gray-200 rounded-b-[30px] md:rounded-b-[60px] py-10">
      <div class="container">
        <h2
          class="text-center text-2xl font-bold text-respaldar md:text-3xl lg:text-4xl">
          Contactanos
        </h2>
        <div class="relative grid md:grid-cols-3 gap-6 pt-6 pb-10">
          <div class="flex flex-col gap-1 text-center text-black">
            <div class="w-10 text-respaldar mx-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                data-astro-cid-xmivup5a="true">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"></path>
              </svg>
            </div>
            <h3 class="font-bold">Dirección</h3>
            <p>Jorge Newbery 3835, CABA</p>
          </div>
          <div class="flex flex-col gap-1 text-center text-black">
            <div class="w-10 text-respaldar mx-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                data-astro-cid-xmivup5a="true">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
              </svg>
            </div>
            <h3 class="font-bold">Teléfono</h3>
            <p>(011) 4551-3338</p>
          </div>
          <div class="flex flex-col gap-1 text-center text-black">
            <div class="w-10 text-respaldar mx-auto">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                data-astro-cid-xmivup5a="true">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
              </svg>
            </div>
            <h3 class="font-bold">Email</h3>
            <p>info@respaldar.com.ar</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-black pt-10 pb-4 text-sm">
    <div class="container flex justify-center">
      <div class="grid md:grid-cols-5 gap-8 md:gap-12">
        <address class="text-white not-italic">
          <img
            src="img/logo.svg"
            alt="logo"
            width="110"
            height="40"
            class="w-[140px] md:w-[110px] h-auto" />
          <hr class="w-10 mb-4 mt-2 md:my-4" />
          <div class="flex flex-col gap-4 font-bold">
            <div class="flex flex-row">
              <a
                href="https://api.whatsapp.com/send/?phone=5491180590005&text=Quiero+obtener+informacion&type=phone_number&app_absent=0"
                aria-label="Enviar un mensaje por Whatsapp a +54 9 11 8059-0005"
                class="flex items-center">
                <svg
                  class="w-6 text-respaldar mr-4"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 3v2.25m-4.5 13.5h9m-9 0a2.25 2.25 0 0 1-2.25-2.25V15M16.5 18.75a2.25 2.25 0 0 0 2.25-2.25V15M4.5 15h15M12 5.25a6.75 6.75 0 0 1 6.75 6.75v.75A2.25 2.25 0 0 1 16.5 15h-9a2.25 2.25 0 0 1-2.25-2.25V12A6.75 6.75 0 0 1 12 5.25ZM9 12h.008m5.992 0H15M8.25 21h7.5"></path>
                </svg>

                +54 9 11 8059-0005</a>
            </div>
            <div class="flex flex-row">
              <a
                href="tel:+541145513338"
                class="flex items-center"
                aria-label="Llamar a (011) 4551-3338">
                <svg
                  class="w-6 text-respaldar mr-4"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                </svg>

                4551-3338</a>
            </div>
            <div class="flex flex-row">
              <a
                href="mailto:info@respaldar.com.ar"
                aria-label="Enviar un correo a info@respaldar.com.ar"
                class="flex items-center">
                <svg
                  class="w-6 text-respaldar mr-4"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
                </svg>

                info@respaldar.com.ar</a>
            </div>
          </div>
        </address>
        <address class="text-white not-italic">
          <h3 class="font-bold text-respaldar uppercase">
            Nuestras Sucursales
            <hr class="w-10 mb-4 mt-2 md:my-4" />
          </h3>
          <div class="flex flex-col gap-2 md:gap-5">
            <p>
              <strong>Colegiales</strong>
              <span class="block">Jorge Newbery 3835, CABA</span>
            </p>

            <p>
              <strong>Edificio Respaldar Caballito</strong>
              <span class="block">Franklin 787, CABA</span>
            </p>

            <p>
              <strong>Edificio Respaldar Palermo</strong>
              <span class="block">Soler 3850, CABA</span>
            </p>
          </div>
        </address>
        <address class="text-white not-italic">
          <div class="flex flex-col">
            <h3 class="font-bold text-respaldar uppercase">
              Oficinas Virtuales
              <hr class="w-10 mb-4 mt-2 md:my-4" />
            </h3>
            <div class="flex flex-col gap-2 md:gap-5">
              <p>
                <strong>Nordelta</strong>
                <span class="block">Pto. Diamante 365, Nordelta</span>
              </p>
              <p>
                <strong>Villa Ortuzar</strong>
                <span class="block">Donado 808, CABA</span>
              </p>
            </div>
          </div>
        </address>
        <article class="text-white flex flex-col">
          <h3 class="font-bold text-respaldar uppercase">
            Categorías Destacadas
            <hr class="w-10 mb-4 mt-2 md:my-4" />
          </h3>
          <div class="flex flex-col gap-2">
            <a href="pre-aprobado-express-sin-cargo" target="_blank">Solicitar Garantía</a>
            <a href="calcularcosto.html">Calculador de Costos</a>
            <a href="https://portal.respaldar.com.ar/" target="_blank">Portal Respaldar</a>
            <a href="inquilinos.html">Inquilinos</a>
            <a href="propietarios.html">Propietarios</a>
            <a href="inmobiliarias.html">Inmobiliarias</a>
          </div>
        </article>
        <article class="text-white flex flex-col">
          <h3 class="font-bold text-respaldar uppercase">
            Redes Sociales
            <hr class="w-10 mb-4 mt-2 md:mt-5" />
          </h3>

          <div class="flex gap-3">
            <a
              href="https://www.instagram.com/respaldargarantia/"
              target="_blank"
              aria-label="Instagram de Respaldar"><img
                src="img/icons/instagram-brands-solid.svg"
                alt="Instagram de Respaldar"
                class="w-6 h-6"
                loading="lazy" /></a>
            <a
              href="https://www.facebook.com/RespaldarGarantia"
              target="_blank"
              aria-label="Facebook de Respaldar"><img
                src="img/icons/facebook-brands-solid.svg"
                alt="Facebook de Respaldar"
                class="w-6 h-6"
                loading="lazy" /></a>
            <a
              href="https://www.linkedin.com/company/respaldargarantia"
              target="_blank"
              aria-label="Linkedin de Respaldar"><img
                src="img/icons/linkedin-brands-solid.svg"
                alt="Linkedin de Respaldar"
                class="w-6 h-6"
                loading="lazy" /></a>
          </div>
        </article>
      </div>
    </div>
    <div class="flex text-white justify-center pt-12 pb-8 px-8">
      © Copyright RESPALDAR de COMBRE S.A. All Rights Reserved
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="js/main.js"></script>

  <!-- START Botmaker Webchat-->
  <script>
    (function() {
      let js = document.createElement("script");
      js.type = "text/javascript";
      js.async = true;
      js.src = "https://go.botmaker.com/rest/webchat/p/PP5615QC7C/init.js";
      document.body.appendChild(js);
    })();
  </script>
  <!-- END Botmaker Webchat-->
</body>

</html>