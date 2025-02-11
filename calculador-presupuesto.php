<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Presupuesto Respaldar</title>
    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../lib/font-awesome/css/all.css">
    <link rel="stylesheet" href="css/presupuesto.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <span class="main-title"><img src="https://www.respaldar.com.ar/img/logo.png" vspace="2" alt="logo"> <a href="index.html" class="scrollto">RESPALDAR</a></span>
            </div>
            <!-- #nav-menu-container -->
        </div>
    </header>

    <section id="presupuesto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <div class="sticky-top">
                        <h1>Presupuesto</h1>
                        <form action="" method="get">
                            <div class="fixWidth" style="max-width: 400px;">
                                <form action="#" method="get">
                                    <div class="row">
                                        <div class="buttons-options mb-2">
                                            <input type="radio" id="currency-pesos" name="currency" value="pesos" class="radio-hidden" <?php if (!isset($_GET['currency']) || $_GET['currency'] == 'pesos') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                            <label for="currency-pesos" class="btn btn-calculador">Pesos</label>

                                            <input type="radio" id="currency-dolar" name="currency" value="dolar" class="radio-hidden" <?php if (isset($_GET['currency']) && $_GET['currency'] == 'dolar') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                            <label for="currency-dolar" class="btn btn-calculador">Dolar</label>
                                        </div>
                                        <label>Monto de Alquiler:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                                            </div>
                                            <input type="number" name="montoAlquiler" class="form-control" value="<?php if (isset($_GET['montoAlquiler'])) {
                                                                                                                        echo $_GET['montoAlquiler'];
                                                                                                                    } ?>" autofocus required <?php if (isset($_GET['get_text'])) {
                                                                                                                                                    echo 'disabled';
                                                                                                                                                } ?>>
                                        </div>
                                        <label>Monto de Expensas:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-invoice-dollar"></i></span>
                                            </div>
                                            <input type="number" name="montoExpensas" class="form-control" value="<?php if (isset($_GET['montoExpensas'])) {
                                                                                                                        echo $_GET['montoExpensas'];
                                                                                                                    } ?>" autofocus required <?php if (isset($_GET['get_text'])) {
                                                                                                                                                    echo 'disabled';
                                                                                                                                                } ?>>
                                        </div>


                                        <div class="form-group" id="plazoExtensionCom">
                                            <label>Plazo del Contrato Comercial:</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt nav-icon"></i></span>
                                                </div>
                                                <input type="number" name="cantidadMeses" class="form-control" value="<?php if (isset($_GET['cantidadMeses'])) {
                                                                                                                            echo $_GET['cantidadMeses'];
                                                                                                                        } ?>" autofocus required <?php if (isset($_GET['get_text'])) {
                                                                                                                                                        echo 'disabled';
                                                                                                                                                    } ?>>
                                            </div>
                                        </div>

                                        <?php if (!isset($_GET['get_text'])) { ?>
                                            <input type="submit" name="get_text" class="btn btn-success btn-block" value="Obtener Texto">
                                        <?php } else { ?>
                                            <a href="calculador-presupuesto.php" class="btn btn-warning">Realizar Nueva Búsqueda</a>
                                        <?php } ?>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php if (isset($_GET['get_text'])) {

                        function roundToNearest100($number)
                        {
                            return ceil($number / 100) * 100;
                        }

                        function roundToNearest10($number)
                        {
                            return ceil($number / 10) * 10;
                        }

                        $tipoMoneda = $_GET['currency'];
                        $montoAlquilerUsd = $_GET['montoAlquiler'];
                        $montoAlquiler = $_GET['montoAlquiler'];

                        if ($tipoMoneda == 'dolar') {
                            // Definir la URL de la API
                            $apiUrl = 'https://api.bluelytics.com.ar/v2/latest';

                            // Inicializar la variable blue
                            $blue = null;

                            // Hacer la solicitud a la API
                            $response = file_get_contents($apiUrl);
                            if ($response !== FALSE) {
                                $data = json_decode($response, true);
                                if (isset($data['blue']['value_sell'])) {
                                    $valueBuy = $data['blue']['value_sell'];
                                    $blue = $valueBuy;
                                }
                            }

                            $montoAlquiler = $montoAlquiler * $blue;
                        }

                        $montoExpensas = $_GET['montoExpensas'];
                        $cantidadMeses = $_GET['cantidadMeses'];

                        if ($cantidadMeses <= 6) {
                            $garantia = ($montoAlquiler + $montoExpensas) * 6 * 0.08;
                            if ($tipoMoneda == 'dolar') {
                                $garantia = ($montoAlquilerUsd * $blue + $montoExpensas) * 6 * 0.08;
                            }
                            $garantiaContado = $garantia * 0.8;
                            $garantiaTresCuotas = $garantia / 3;
                            $pagoContadoExtSinReserva = $garantia * 0.8;
                            $pagoTresCuotasSinReserva = $garantia * 0.9 / 3;
                        }
                        if ($cantidadMeses > 6 && $cantidadMeses <= 12) {
                            $garantia = ($montoAlquiler + $montoExpensas) * $cantidadMeses * 0.08;
                            if ($tipoMoneda == 'dolar') {
                                $garantia = ($montoAlquilerUsd * $blue + $montoExpensas) * $cantidadMeses * 0.08;
                            }
                            $garantiaContado = $garantia * 0.8;
                            $garantiaTresCuotas = $garantia / 3;
                            $pagoContadoExtSinReserva = $garantia * 0.8;
                            $pagoTresCuotasSinReserva = $garantia * 0.9 / 3;
                        }
                        if ($cantidadMeses > 12) {
                            $garantia = ($montoAlquiler + $montoExpensas) * $cantidadMeses * 0.08;
                            if ($tipoMoneda == 'dolar') {
                                $garantia = ($montoAlquilerUsd * $blue + $montoExpensas) * $cantidadMeses * 0.08;
                            }
                            $garantiaContado = $garantia * 0.7;
                            $garantiaTresCuotas = $garantia * 0.85 / 3;
                            $garantiaTarjeta = $garantia;
                            $garantiaSeisCuotasAnticipo = $garantia * 0.3;
                            $garantiaSeisCuotasCuotas = $garantia * 0.7 / 5;
                            $pagoContadoExtSinReserva = $garantia * 0.8;
                            $pagoTresCuotasSinReserva = $garantia * 0.9 / 3;
                        }

                        $pagoReserva = $garantia * 0.1;
                        $fechaValidez = date('d/m/Y', strtotime('+5 days'));

                        if ($tipoMoneda != 'dolar') {
                            $mensajeDetalle = "*Para un alquiler de $ " . number_format($montoAlquiler + $montoExpensas, 0, ',', '.') . "  (Expensas Incluidas)";
                            $mensajeMejorPrecio = "Valor total de la garantía: $ " . number_format(roundToNearest100($garantia), 0, ',', '.') . " <br>
                            🔥 *Mejor precio encontrado: $ " . number_format(roundToNearest100($garantiaContado), 0, ',', '.') . "* <br><br>";
                        } else {
                            $garantiaUsd = $garantia / $blue;
                            $garantiaContadoUsd = $garantiaContado / $blue;


                            $mensajeDetalle = "*Para un alquiler de USD " . number_format($montoAlquilerUsd, 0, ',', '.') . " y " . number_format($montoExpensas, 0, ',', '.') . " de expensas";
                            $mensajeMejorPrecio = "Valor total de la garantía: USD " . number_format((ceil($garantiaUsd)), 0, ',', '.') . " Cotización de $ $blue al " . date('d/m/Y') . "<br>
                            🔥 *Mejor precio encontrado: USD " . number_format((ceil($garantiaContadoUsd)), 0, ',', '.') . "* <br><br>
                            Las formas de pago que te paso a continuación, son al tipo de cambio de hoy, para que tengas una referencia. El valor final en pesos, al ser la cotización en dólares puede verse modificado al momento de la confección del contrato dependiendo de la cotización del dólar en dicho momento.
                            <br><br>
                            ";
                        }

                        echo "
                        <br><div class='buttons'><button class='btn btn-success' onclick='copyDivContent()'>Copiar</button> <a href='calculador-presupuesto.php' class='btn btn-danger'>Eliminar</div></a>
        
                        <div id='contentToCopy' style='background-color:lightgrey; padding: 20px; border-radius: 15px; margin: 10px'>
                        ¡Hola! te comento que tu garantía fue *PRE-APROBADA,* te paso la información de los beneficios de pago que te fueron asignados:<br>
                            " . $mensajeDetalle . ", contrato de " . $cantidadMeses . " meses:
                        <br><br>

                            $mensajeMejorPrecio
                            
                            Reservá tu garantía dentro de las próximas 48hs y accede a los siguientes beneficios:<br><br>
                            
                            *OFERTAS LIMITADAS DE LA SEMANA:*<br>
                            - $ " . number_format(roundToNearest100($garantiaContado), 0, ',', '.');
                        if ($cantidadMeses > 12) {
                            echo " (30% OFF. En un solo pago EFECTIVO)<br>";
                        } else {
                            echo "  (20% OFF. En un solo pago EFECTIVO)<br>";
                        }

                        echo "- 3 cuotas sin interés de $ " . number_format(roundToNearest100($garantiaTresCuotas), 0, ',', '.') . " cada cuota";
                        if ($cantidadMeses > 12) {
                            echo "  (15% OFF)<br>";
                        } else {
                            echo ".<br>";
                        }

                        if ($cantidadMeses > 12) {
                            echo "
                                - 6 Cuotas, Anticipo del 30% $ " . number_format(roundToNearest100($garantiaSeisCuotasAnticipo), 0, ',', '.') . " y 5 Cuotas sin Intereses de $ " . number_format(roundToNearest100($garantiaSeisCuotasCuotas), 0, ',', '.') . ".<br>";
                        }

                        echo "
                            <br>
                            *FINANCIÁ TU GARANTÍA HASTA EN " . $cantidadMeses . " CUOTAS:*
                            <br>
                            - Te permitimos financiar tu garantía durante todo el plazo del contrato. Sujeto a condiciones de aprobación. ¡No dudes en consultar!

                            <br><br> *En caso de querer congelar los beneficios podrá hacerlo abonando el 10% del costo del trámite, en este caso serían $ " . number_format(roundToNearest100($pagoReserva), 0, ',', '.') . ".*<br><br>
                            
                            _Esta reserva se descuenta del total a pagar una vez cerrado su trámite._<br><br>
                            
                            Si no reservás tu garantía, pasadas las 48hs igual contas con los siguientes beneficios:<br>";

                        if ($cantidadMeses <= 12) {
                            echo "
                                - $ " . number_format(roundToNearest100($garantia), 0, ',', '.') . " (En un solo pago en efectivo, depósito o transferencia).<br><br> ";
                        } else {
                            echo "
                                - $ " . number_format(roundToNearest100($pagoContadoExtSinReserva), 0, ',', '.') . " (20% OFF. En un solo pago en efectivo, depósito o transferencia).<br>
                                - 3 cuotas sin interés: $ " . number_format(roundToNearest100($pagoTresCuotasSinReserva), 0, ',', '.') . " cada cuota. (10% OFF)<br><br>";
                        }

                        echo "
                        Este presupuesto tiene una validez hasta el día " . $fechaValidez . ". Pasada esta fecha la cotización puede variar. <br><br>
                        
                        *INFORMACIÓN IMPORTANTE*
                        <br><br>
                            _En caso de que por alguna circunstancia no llegue a cerrar con esta inmobiliaria/Propietario, la reserva tiene una validez de 90 días, para que puedas ubicar un nuevo alquiler y usar el trámite. En caso de desistir, alquilar sin garantía o alquilar con otra empresa de garantías, la reserva se pierde y queda para gastos administrativos._<br><br>
                            -Abonos en efectivo en Jorge Newbery 3835, Chacarita, CABA. Lunes a Viernes de 10:30 horas a 18:30 horas. 
                            Sábados de 10:30 horas a 12:30 horas. Sin turno Previo para abonar (sí para firmar la garantía).<br>                         
                            -Los pagos en tres o seis cuotas sin interés (con o sin reserva previa), pueden realizarse en efectivo, depósito o transferencia. 
                            <br><br>
                           
                            MEJOR PRESUPUESTO GARANTIZADO ⭐<br>
                            RECORDÁ QUE CON RESPALDAR PARTICIPAS DE UN SORTEO MENSUAL POR EL PAGO DE TU ALQUILER 🍀<br>
                            *Beneficios sujetos a confirmación por el Dpto. de análisis<br>
                            -El pago de la reserva congela los beneficios en cuanto a las formas de pago. No congela el precio de la garantía.<br>
                            -Valores de alquiler y expensas sujetos a confirmación por el Dpto. Administrativo en conjunto con la Inmobiliaria/Propietario.<br>
                            -La garantía debe encontrarse firmada por todos los participantes de la misma y abonada con al menos 24 horas de antelación a la firma del contrato de locación. La acreditación del pago puede verse demorada por razones ajenas a Respaldar, en caso de realizarse por transferencia o depósito bancario.
                            <br><br>
                           
        </div>
        ";
                    }

                    ?>
                </div>
                <script>
                    function copyDivContent() {
                        const contentToCopy = document.querySelector("#contentToCopy").innerText;
                        navigator.clipboard.writeText(contentToCopy).then(() => {
                            alert("Texto Copiado Correctamente");
                        });
                    }
                </script>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>