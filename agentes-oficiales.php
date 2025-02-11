<?php

include 'APIController.php';

$limit = (isset($_REQUEST['limit']) && $_REQUEST['limit'] ? $_REQUEST['limit'] : 12);
$offset = (isset($_REQUEST['offset']) && $_REQUEST['offset'] ? $_REQUEST['offset'] : 0);
$term = (isset($_REQUEST['term']) && $_REQUEST['term'] ? $_REQUEST['term'] : null);
$city = (isset($_REQUEST['city']) && $_REQUEST['city'] ? $_REQUEST['city'] : null);

$inmobiliarias = getAgentesOficiales($limit, $offset, $term, $city);
$localidades = getLocalidades(true);

$total_count = $inmobiliarias->total_count;
$page = ($offset + $limit) / $limit;

$pages = ceil($total_count / $limit);
?>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T37WXNC');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <title>Respaldar - Sistema de Garantía Para Alquilar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Sistema de garantía para Alquilar. Resolución en menos de 24 horas, requisitos mínimos." />
  <meta name="Keywords" content="Garantias, Garantías, Fianzas, Sistema de garantia para alquiar, Alquiler, Garantes, Respaldar, Respaldar Garantías, garantias, garantia, garantía para alquilar, garantia para alquilar, garantia alquiler, garantia propietaria">
  <meta name="geo.region" content="AR" />
  <meta name="geo.placename" content="Buenos Aires" />

  <link rel="shortcut icon" href="https://www.respaldar.com.ar/img/logo.png">

  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css?v1.3" />

  <link rel="stylesheet" href="css/styles-respaldar.css" />

  <!-- Favicons -->
  <link href="https:///www.respaldar.com.ar/img/favicon.png" rel="icon">
  <link href="https:///www.respaldar.com.ar/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https:///www.respaldar.com.ar/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https:///www.respaldar.com.ar/lib/font-awesome/css/all.css" rel="stylesheet">
  <link href="https:///www.respaldar.com.ar/lib/animate/animate.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/b6b1756c76.js" crossorigin="anonymous"></script>

  <style>
    .adherir_inmobiliaria .inmobiliarias_contenido .inmobiliarias_resultados {
      max-width: 1300px;
      margin: auto;
    }

    .adherir_inmobiliaria .inmobiliarias_contenido .inmobiliarias_resultados .resultado_box .titulo {
      text-align: center;
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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJ0644Q7SX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ZJ0644Q7SX');
  </script>


</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T37WXNC"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php require_once 'header.php' ?>

  <!--MODELO 2-->
  <section class="adherir_inmobiliaria adherir_agentes">
    <div class="adherir_botones_top">
      <!--<div>
                <a href="#"><i class="far fa-building"></i>Adherir Inmobiliaria</a>
                <a href="#"><i class="fas fa-gifts"></i>Catálogo de Puntos</a>
                <a href="#"><i class="fas fa-search"></i>Buscar Propiedad</a>
                <a class="inmobiliaria_selected" href="#"><i class="fas fa-user-tie"></i>Agente Oficial</a>
            </div>-->

      <a href="https://sistema.respaldar.com.ar/admin/login/agente-oficial" target="_blank"><button style="margin-top: 20px; margin-right: 66px;">ACCEDER <i class="fas fa-sign-in-alt"></i></button></a>
    </div>

    <h1>AGENTES OFICIALES</h1>
    <hr>
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
              <i onclick="document.form.submit()" style="cursor: pointer;" class="fas fa-search"></i><input type="text" name="term" value="<?php echo $term ?>" placeholder="buscar inmobiliaria" />
            </div>
            <a href="javascript:$('.modal_localidad').show()"><i class="fas fa-map-marked-alt"></i>Localidad</a>
          </div>
        </div>
        <div class="inmobiliarias_resultados">
          <?php foreach ($inmobiliarias->result as $inmobiliaria) { ?>
            <div class="resultado_box">
              <div style="align-self: center;min-height: 77px;max-height: 77px;display: flex;overflow: hidden;">
                <img style="<?php echo $inmobiliaria->logo ? '' : 'width: 90px' ?>" src="<?php echo $inmobiliaria->logo ? $inmobiliaria->logo : 'inmobiliaria-icon_b.svg' ?>" />
              </div>
              <span class="titulo"><?php echo $inmobiliaria->name ?></span>

              <?php if ($inmobiliaria->web) { ?>
                <span class="info"><i class="fas fa-globe-americas"></i><a style="color: inherit; text-decoration: none" href="<?php echo strpos($inmobiliaria->web, 'http') !== FALSE ? $inmobiliaria->web : ('http://' . $inmobiliaria->web); ?>" target="_blank"><?php echo $inmobiliaria->web ?: '&nbsp;' ?></a></span>
              <?php } ?>
              <?php if ($inmobiliaria->phone) { ?>
                <span class="info"><i class="fas fa-phone-alt"></i><?php echo $inmobiliaria->phone ?: '&nbsp;' ?></span>
              <?php } ?>
              <?php if ($inmobiliaria->email) { ?>
                <span class="info"><i class="fas fa-envelope"></i><?php echo $inmobiliaria->email ?: '&nbsp;' ?></span>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <?php require_once 'footer.php' ?>
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