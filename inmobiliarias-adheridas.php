<?php

include 'APIController.php';

$limit = (isset($_REQUEST['limit']) && $_REQUEST['limit'] ? $_REQUEST['limit'] : 12);
$offset = (isset($_REQUEST['offset']) && $_REQUEST['offset'] ? $_REQUEST['offset'] : 0);
$term = (isset($_REQUEST['term']) && $_REQUEST['term'] ? $_REQUEST['term'] : null);
$city = (isset($_REQUEST['city']) && $_REQUEST['city'] ? $_REQUEST['city'] : null);

$inmobiliarias = getInmobiliariasAdheridas($limit, $offset, $term, null, $city);
$localidades = getLocalidades();

$total_count = $inmobiliarias->total_count;
$page = ($offset + $limit) / $limit;

$pages = ceil($total_count / $limit);
?>
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
  <style>
    .adherir_inmobiliaria .inmobiliarias_contenido .inmobiliarias_resultados .resultado_box .titulo {
      text-align: center;
    }

    .adherir_inmobiliaria .inmobiliarias_contenido .inmobiliarias_resultados {
      max-width: 1300px;
      margin: auto;
    }

    .adherir_inmobiliaria .adherir_botones_top div a {
      background-color: #009045;
      color: #fff;
      border-radius: 5px;
      padding: 9px 12px;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      font-weight: 600;
      text-align: center;
    }

    .adherir_inmobiliaria .inmobiliarias_contenido .inmobiliarias_resultados .resultado_box img.default {
      -webkit-filter: invert(100%);
      filter: invert(100%);
    }
  </style>
  <style>
    button,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    input,
    a,
    span,
    label,
    div,
    input,
    td,
    th {
      font-family: "Montserrat", sans-serif !important;
    }

    input {
      font-size: 15px !important;
    }
  </style>
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

  <section
    id="hero"
    class="flex flex-col items-center bg-respaldar bg-center pb-5 md:pb-0 md:pt-[30px]">
    <div class="container">
      <div class="mt-8 md:mt-0 lg:mt-0">
        <h1
          class="mt-2 mb-2 md:mb-8 text-3xl font-bold tracking-tight text-black uppercase text-center">
          Inmobiliarias <br /><span
            class="text-white xl:text-6xl capitalize">Adheridas</span>
        </h1>
      </div>
    </div>
  </section>

  <!--MODELO 2-->
  <section class="adherir_inmobiliaria" style="padding-top: 92px">
    <div class="adherir_botones_top">
      <div style="margin-left: 66px; margin-top:20px;">
        <a href="adherir-inmobiliaria" target="_blank"><i class="far fa-building"></i>Adherir Inmobiliaria</a>
        <a href="https://www.respaldar.com.ar/catalogo.html"><i class="fas fa-gifts"></i>Catálogo de Puntos</a>
        <a class="inmobiliaria_selected" href="agentes-oficiales"><i class="fas fa-user-tie"></i>Agente Oficial</a>
      </div>

      <a href="https://sistema.respaldar.com.ar/admin/login/inmobiliaria-adherida" target="_blank"><button style="margin-top: 20px; margin-right: 66px;">ACCEDER <i class="fas fa-sign-in-alt"></i></button></a>
    </div>
    <form name="form">
      <input type="hidden" name="offset" id="offset" />
      <input type="hidden" name="city" id="city" value="<?php echo $city ?>" />
      <div class="inmobiliarias_contenido">
        <div class="inmobiliarias_filtro">

          <span>Mostrar
            <select name="limit" onchange="document.form.submit()">
              <option <?php echo ($limit == 12 ? 'selected' : '') ?> value="12">12</option>
              <option <?php echo ($limit == 48 ? 'selected' : '') ?> value="48">48</option>
              <option <?php echo ($limit == 96 ? 'selected' : '') ?> value="96">96</option>
            </select>
            datos por hoja
          </span>
          <div class="busqueda_filtro">
            <div class="input_container">
              <i onclick="$('#offset').val(0);document.form.submit()" style="cursor: pointer;" class="fas fa-search"></i><input type="text" name="term" value="<?php echo $term ?>" placeholder="buscar inmobiliaria" />
            </div>
            <a href="javascript:$('.modal_localidad').show()"><i class="fas fa-map-marked-alt"></i>Localidad</a>
          </div>
        </div>
        <div class="inmobiliarias_resultados">
          <?php foreach ($inmobiliarias->result as $inmobiliaria) { ?>
            <div class="resultado_box">
              <div style="<?php echo $inmobiliaria->logo ? 'overflow: hidden; display: flex' : 'text-align: center; width: 100%;' ?>; align-self: center;min-height: 77px;max-height: 77px">
                <img class="<?php echo $inmobiliaria->logo ? '' : '' ?>" src="<?php echo $inmobiliaria->logo ? $inmobiliaria->logo : 'logo-black.png' ?>" />
              </div>
              <span class="titulo"><?php echo $inmobiliaria->name ?></span>

              <?php if ($inmobiliaria->phone) { ?>
                <span class="info"><i class="fas fa-phone-alt"></i><?php echo $inmobiliaria->phone ?: '&nbsp;' ?></span>
              <?php } ?>
              <?php if ($inmobiliaria->web) { ?>
                <span class="info"><i class="fas fa-globe-americas"></i><a style="color: inherit; text-decoration: none" href="<?php echo strpos($inmobiliaria->web, 'http') !== FALSE ? $inmobiliaria->web : ('http://' . $inmobiliaria->web); ?>" target="_blank"><?php echo $inmobiliaria->web ?: '&nbsp;' ?></a></span>
              <?php } ?>
              <?php if ($inmobiliaria->address) { ?>
                <span class="info"><i class="fas fa-map-marker-alt"></i><?php echo $inmobiliaria->address ?: '&nbsp;' ?></span>
              <?php } ?>
              <?php if ($inmobiliaria->city) { ?>
                <span class="info"><i class="fas fa-map-marker-alt"></i><?php echo $inmobiliaria->city ?: '&nbsp;' ?></span>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
        <div style="display: table; width: 100%; padding-bottom: 25px;">
          <?php if ($page > 1 && $pages > 1) { ?>
            <div class="siguiente" style="float:left">
              <a href="javascript:void(0)" onclick="$('#offset').val(<?php echo ($page - 2) * $limit ?>); document.form.submit()"><i class="fas fa-caret-left"></i> Anterior</a>
            </div>
          <?php } ?>

          <?php if ($page < $pages && $pages > 1) { ?>
            <div class="siguiente" style="float:right">
              <a href="javascript:void(0)" onclick="$('#offset').val(<?php echo $page * $limit ?>); document.form.submit()">Siguiente <i class="fas fa-caret-right"></i></a>
            </div>
          <?php } ?>
        </div>
      </div>
    </form>
  </section>
  <section class="modal_localidad">
    <div class="modal_body">
      <i class="close_modal fas fa-times" onclick="$('.modal_localidad').hide()"></i>
      <h1>Seleccione su localidad</h1>
      <ul class="localidad_listado">
        <?php foreach ($localidades as $localidad) { ?>
          <?php if ($localidad->city) { ?>
            <li class="localidad_zona <?php echo ($city == $localidad->city ? 'zona_selected' : '') ?>"><?php echo $localidad->city ?></li>
          <?php } ?>
        <?php } ?>
      </ul>
      <button type="button" class="confirmar_localidad" onclick="document.form.submit()">Confirmar</button>
    </div>
  </section>
  <style>
    .modal_localidad .modal_body {
      max-height: 70vh;
    }

    .modal_localidad .modal_body .localidad_listado .localidad_zona {
      color: #111;
      background: transparent;
      border-bottom: solid 1px #101010;
    }

    .modal_localidad .modal_body .localidad_listado .localidad_zona:hover,
    .modal_localidad .modal_body .localidad_listado .localidad_zona.zona_selected {
      color: #fff;
      background-color: #009045;
    }
  </style>

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

  <script>
    $(function() {
      $('.localidad_zona').click(function(event) {
        if ($(event.target).hasClass('zona_selected')) {
          $('.localidad_zona').removeClass('zona_selected');

          $('#city').val('')
        } else {
          $('.localidad_zona').removeClass('zona_selected');
          $(event.target).addClass('zona_selected');

          $('#city').val($(event.target).html());
        }
      })
    })
  </script>

</body>

</html>