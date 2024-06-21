<?php

function doctype()
{
    $reg = "";
    if (isset($_GET['reg'])) {
        $reg = $_GET['reg'];
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Limalocal 2024</title>
        <link rel="icon" type="image/png" href="images/ll_pic.png" />
        <link rel="stylesheet" type="text/css" href="js/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/floating-wpp.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/floating-wpp.js"></script>
        <script src="js/menu.js"></script>
        <?php
        include_once "includes/analyticstracking.php";

        if ($reg == 'exito') {
            ?>
            <!-- Event snippet for Solicitud de información conversion page -->
            <script>
                gtag('event', 'conversion', {
                    'send_to': 'AW-1070647363/a8SbCPWFy5IBEMOQw_4D'
                });
            </script>
            <?php
        }
        ?>
    </head>

    <body>
        <?php
        if ($reg == 'exito') {
            ?>
            <script>
                fbq('track', 'CompleteRegistration', {
                    value: '3.00',
                    currency: 'PEN'
                });
            </script>
            <?php
        }
}

function ll_header()
{
    ?>
        <header>
            <div class="logo">
                <a href="index.php">
                    <img src="images/svg/limalocal.svg" alt="limalocal">
                </a>
            </div>
            <div class="menu_mob mob">
                <img src="images/svg/menu.svg" alt="menu">
            </div>
        <?php
        menu();
        ?>
            <div class="wa">
                <div class="numero">
                    <a href="https://api.whatsapp.com/send?phone=51999220204" target="_blank">
                        Whatsapp 999220204
                    </a>
                </div>
            </div>
        </header>
        <div class="contenedor">
        <?php
}

function menu()
{
    ?>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="submenu"><a href="#">Nosotros <img src="images/svg/iconos/flecha.svg"></a>
                            <ul class="children">
                                <li><a href="index.php?acc=vender">¿Cómo vender por internet?</a></li>
                                <li><a href="index.php?acc=clientes">Nuestros clientes</a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#">Servicios <img src="images/svg/iconos/flecha.svg"></a>
                            <ul class="children">
                                <li><a href="servicios.php?acc=alquila">Alquila una tienda virtual</a></li>
                                <li><a href="servicios.php?acc=compra">Compra una tienda virtual</a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#">Mi Tienda Virtual <img src="images/svg/iconos/flecha.svg"></a>
                            <ul class="children">
                                <li><a href="mitienda.php?acc=perfil">Mi Perfil</a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#">Contacto <img src="images/svg/iconos/flecha.svg"></a>
                            <ul class="children">
                                <li><a href="contacto.php">Solicita una asesoría virtual</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    <?php
}

function ll_footer()
{
    ?>
        </div>
        <footer>
            <div class="datos">
                <p>preguntanos@limalocal.com</p>
                <p>999221129</p>
                <p>Av. La Encalada 738 of. 301 - Monterrico Surco - Lima, Perú</p>
            </div>
        </footer>
        <div id="myButton"></div>
        <script type="text/javascript">
            $(function() {
                $('#myButton').floatingWhatsApp({
                    phone: '+51999220204',
                    popupMessage: 'Hola, Bienvenida a Limalocal',
                    message: "https://www.limalocal.com",
                    showPopup: false,
                    showOnIE: false,
                    headerTitle: 'Welcome!',
                    headerColor: 'white',
                    backgroundColor: 'white',
                    buttonImage: '<img src="images/svg/whatsapp_ico.svg" />'
                });
            });
        </script>
    </body>

    </html>
    <?php
}

function formulario()
{
    date_default_timezone_set('America/Lima');
    $hoy = date("Y-m-d");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        enviar_mensaje_filtrado();
    } else { ?>
        <form action="index.php?reg=exito" enctype="multipart/form-data" method="post">
            <div class="dato">
                <input name="nombre_form" type="text" placeholder="Nombre" required>
            </div>
            <div class="dato">
                <input name="mail_form" type="email" placeholder="Correo Electrónico" required>
            </div>
            <div class="dato">
                <input name="fono_form" type="number" placeholder="Teléfono" required>
            </div>
            <div class="dato">
                <textarea name="mensaje_txt" placeholder="Déjanos tu mensaje" required></textarea>
            </div>
            <div class="checkbox">
                <div class="reclame">¿Qué día prefieres que te contactemos?:</div>
            </div>
            <div class="dato">
                <input 
                    type="date" 
                    id="start" 
                    name="fecha_cont" 
                    value="<?php echo $hoy ?>" 
                    min="<?php echo $hoy ?>" 
                    required
                >
            </div>
            <div class="check">
                <input type="radio" name="negocio_txt" value="fisicayredes" checked>
                Tengo una tienda Física y vendo por redes sociales
            </div>
            <div class="check">
                <input type="radio" name="negocio_txt" value="solofisica">
                Vendo sólo en mi Tienda Física
            </div>
            <div class="check">
                <input type="radio" name="negocio_txt" value="soloredes">
                Vendo sólo por redes sociales
            </div>
            <div class="dato">
                <button type="submit">Solicitar una cita</button>
            </div>
        </form>
    <?php }
}

function vender()
{
    ?>
    <div class="vender">
        <h1>¿Cómo vender por internet?</h1>
        <div class="articulo">
            <div class="foto"><img src="images/articulos/no-pierdas-clientes.jpg"></div>
            <div class="texto">
                <div class="titulo">No pierdas más clientes</div>
                <div class="cont">
                    ¿Cuantas veces al día pierdes una venta por no coordinar con un cliente a tiempo?
                    ¿Te has preguntado cuántas ventas pierdes por que tus clientes no están
                    dispuestos a perder tiempo coordinando vía Facebook o Whatsapp?
                </div>
            </div>
        </div>
        <div class="articulo">
            <div class="foto"><img src="images/articulos/redes.jpg"></div>
            <div class="texto">
                <div class="cont">
                    La publicidad en redes sociales te ha permitido conocer a tus clientes
                    y crear una comunidad que ama tus productos.
                    Pero, seamos realistas. ¡Las redes sociales no son para vender!
                    Es importante que dirijas a tus clientes a un espacio en el que vean
                    tus productos cómodamente y puedan adquirirlos de manera fácil.
                </div>
            </div>
        </div>
        <div class="articulo">
            <div class="foto"><img src="images/articulos/vender.jpg"></div>
            <div class="texto">
                <div class="titulo">¿Cómo vender por internet?</div>
                <div class="subtitulo">Diseño moderno y limpio</div>
                <div class="cont">
                    Prioriza lo importante: ¡tus productos! Muéstralos en su máximo
                    potencial y sácale provecho a sus cualidades.
                </div>
                <div class="subtitulo">Oportunidades de venta</div>
                <div class="cont">
                    Sabías que la mitad de los consumidores consultó su smartphone antes de comprar
                    y el 38% se retiró de la tienda porque “encontró una mejor opción”.
                    ¡Tus productos son esa mejor opción! Tu tienda virtual
                    estará abierta todos los días y a toda hora.
                </div>
            </div>
        </div>
        <div class="articulo">
            <div class="foto"><img src="images/articulos/enlaza.jpg"></div>
            <div class="texto">
                <div class="titulo">Enlaza tus redes sociales</div>
                <div class="cont">
                    Te ayudamos a vincular tus campañas publicitarias y todos tus esfuerzos de comunicación
                    con tu tienda virtual. Lo que te ayudará a simplificar el proceso de venta.
                </div>
            </div>
        </div>
        <div class="articulo">
            <div class="foto"><img src="images/articulos/pasarella.jpg"></div>
            <div class="texto">
                <div class="titulo">Pasarella de pago</div>
                <div class="cont">
                    Implementamos a tu Web todos los sistemas de pago que necesite tu negocio:
                    Paypal, Culqui, Visa, MasterCard, Pago efectivo, etc.
                </div>
            </div>
        </div>
    </div>
    <?php
}

function clientes()
{
    ?>
    <div class="banner_sec">
        <h2>Nuestros clientes</h2>
        <div class="secciones">
            <div>
                <a href="https://www.shop-cocojolie.com/" target="_blank" alt="cocojolie">
                    <img src="images/clientes/coco-jolie.jpg">
                </a>
            </div>
            <div>
                <a href="https://hibabeperu.com/" target="_blank" alt="hibabeperu">
                    <img src="images/clientes/hibabeperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.idolatrymoda.com/" target="_blank" alt="idolatrymoda">
                    <img src="images/clientes/idolatry.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.naharanow.com/" target="_blank" alt="naharanow">
                    <img src="images/clientes/naharanow.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.teacherstore.pe/" target="_blank" alt="teacherstore">
                    <img src="images/clientes/teacher.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.trekkinghouseperu.pe/" target="_blank" alt="trekkinghouseperu">
                    <img src="images/clientes/trekking.jpg">
                </a>
            </div>
            <div>
                <a href="https://desireperu.com/" target="_blank" alt="desireperu">
                    <img src="images/clientes/desireperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://ingapijamas.com.pe/" target="_blank" alt="ingapijamas">
                    <img src="images/clientes/ingapijamas.jpg">
                </a>
            </div>
            <div>
                <a href="https://singularityperu.com/" target="_blank" alt="singularityperu">
                    <img src="images/clientes/singularityperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://mienfermeratiendavirtual.com" target="_blank" alt="mienfermeratiendavirtual">
                    <img src="images/clientes/mienfermeratiendavirtual.jpg">
                </a>
            </div>
            <div>
                <a href="https://azucarmodas.com/" target="_blank" alt="azucarmodas">
                    <img src="images/clientes/azucarmodas.jpg">
                </a>
            </div>
            <div>
                <a href="https://ballabiopastas.com/" target="_blank" alt="ballabiopastas">
                    <img src="images/clientes/ballabiopastas.jpg">
                </a>
            </div>
            <div>
                <a href="https://saturnoperu.com/" target="_blank" alt="saturnoperu">
                    <img src="images/clientes/saturnoperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://veradonna.pe/" target="_blank" alt="veradonna">
                    <img src="images/clientes/veradonna.jpg">
                </a>
            </div>
            <div>
                <a href="https://evanicperu.com/" target="_blank" alt="evanicperu">
                    <img src="images/clientes/evanicperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://dummastore.com/" target="_blank" alt="dummastore">
                    <img src="images/clientes/dummastore.jpg">
                </a>
            </div>
            <div>
                <a href="https://lacasitadelsapo.com/" target="_blank" alt="lacasitadelsapo">
                    <img src="images/clientes/lacasitadelsapo.jpg">
                </a>
            </div>
            <div>
                <a href="https://kebeyafashion.com/" target="_blank" alt="kebeyafashion">
                    <img src="images/clientes/kebeyafashion.jpg">
                </a>
            </div>
            <div>
                <a href="https://naturezza.pe/" target="_blank" alt="naturezza">
                    <img src="images/clientes/naturezza.jpg">
                </a>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.secciones').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
                    infinite: true,
                    dots: false,
                    arrows: true,
                    responsive: [{
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                            dots: false,
                        }
                    }]
                });
            });
        </script>
    </div>
    <?php
}

function clientes_solo()
{
    ?>
    <div class="banner_sec">
        <h2>Nuestros clientes</h2>
        <div class="secciones">
            <div>
                <a href="https://www.shop-cocojolie.com/" target="_blank" alt="cocojolie">
                    <img src="images/clientes/coco-jolie.jpg">
                </a>
            </div>
            <div>
                <a href="https://hibabeperu.com/" target="_blank" alt="hibabeperu">
                    <img src="images/clientes/hibabeperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.idolatrymoda.com/" target="_blank" alt="idolatrymoda">
                    <img src="images/clientes/idolatry.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.naharanow.com/" target="_blank" alt="naharanow">
                    <img src="images/clientes/naharanow.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.teacherstore.pe/" target="_blank" alt="teacherstore">
                    <img src="images/clientes/teacher.jpg">
                </a>
            </div>
            <div>
                <a href="https://www.trekkinghouseperu.pe/" target="_blank" alt="trekkinghouseperu">
                    <img src="images/clientes/trekking.jpg">
                </a>
            </div>
            <div>
                <a href="https://desireperu.com/" target="_blank" alt="desireperu">
                    <img src="images/clientes/desireperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://ingapijamas.com.pe/" target="_blank" alt="ingapijamas">
                    <img src="images/clientes/ingapijamas.jpg">
                </a>
            </div>
            <div>
                <a href="https://singularityperu.com/" target="_blank" alt="singularityperu">
                    <img src="images/clientes/singularityperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://mienfermeratiendavirtual.com" target="_blank" alt="mienfermeratiendavirtual">
                    <img src="images/clientes/mienfermeratiendavirtual.jpg">
                </a>
            </div>
            <div>
                <a href="https://azucarmodas.com/" target="_blank" alt="azucarmodas">
                    <img src="images/clientes/azucarmodas.jpg">
                </a>
            </div>
            <div>
                <a href="https://ballabiopastas.com/" target="_blank" alt="ballabiopastas">
                    <img src="images/clientes/ballabiopastas.jpg">
                </a>
            </div>
            <div>
                <a href="https://saturnoperu.com/" target="_blank" alt="saturnoperu">
                    <img src="images/clientes/saturnoperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://veradonna.pe/" target="_blank" alt="veradonna">
                    <img src="images/clientes/veradonna.jpg">
                </a>
            </div>
            <div>
                <a href="https://evanicperu.com/" target="_blank" alt="evanicperu">
                    <img src="images/clientes/evanicperu.jpg">
                </a>
            </div>
            <div>
                <a href="https://dummastore.com/" target="_blank" alt="dummastore">
                    <img src="images/clientes/dummastore.jpg">
                </a>
            </div>
            <div>
                <a href="https://lacasitadelsapo.com/" target="_blank" alt="lacasitadelsapo">
                    <img src="images/clientes/lacasitadelsapo.jpg">
                </a>
            </div>
            <div>
                <a href="https://kebeyafashion.com/" target="_blank" alt="kebeyafashion">
                    <img src="images/clientes/kebeyafashion.jpg">
                </a>
            </div>
            <div>
                <a href="https://naturezza.pe/" target="_blank" alt="naturezza">
                    <img src="images/clientes/naturezza.jpg">
                </a>
            </div>
        </div>
        <script type="text/javascript" src="js/slick/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.secciones').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: false,
                    infinite: true,
                    dots: false,
                    arrows: true,
                    responsive: [{
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                            dots: false,
                        }
                    }]
                });
            });
        </script>
    </div>
    <?php
}

function enviar_mensaje_filtrado()
{
    $nombre = $_POST['nombre_form'];
    $mail = $_POST['mail_form'];
    $fono = $_POST['fono_form'];
    $fecha_cont = $_POST['fecha_cont'];
    $comentario = $_POST['mensaje_txt'];
    $negocio = $_POST['negocio_txt'];

    $origenNombre = 'limalocal.com';
    $origenEmail = 'preguntanos@limalocal.com';
    $destinatarioEmail = 'rbreva@gmail.com';

    $asuntoEmail = 'Solicitud de reunión - Limalocal.com';

    //cuerpo del email:
    $cuerpoMensaje = "";
    $cuerpoMensaje = '
    <html>
    <head>
    <title>Solicitud de reunión - Limalocal.com</title>
    </head>
    <body>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
    <td colspan="2"><strong>Solicitud de reunión - Limalocal.com</strong></td>
    </tr>
    <tr>
    <td>Nombre:</td>
    <td>' . $nombre . '</td>
    </tr>
    <tr>
    <td>Email:</td>
    <td>' . $mail . '</td>
    </tr>
    <tr>
    <td>Fono:</td>
    <td>' . $fono . '</td>
    </tr>
    <tr>
    <td>Mensaje:</td>
    <td>' . $comentario . '</td>
    </tr>
    <tr>
    <td>Fecha:</td>
    <td>' . $fecha_cont . '</td>
    </tr>
    <tr>
    <td>Su negocio:</td>
    <td>' . $negocio . '</td>
    </tr>
    </table>
    </body>
    </html>   
    ';
    //fin cuerpo del email.

    //cabecera del email (forma correcta de codificarla)
    $header = "From: " . $origenNombre . " <" . $origenEmail . ">\r\n";
    $header .= "Reply-To: " . $origenEmail . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";

    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //armado del mensaje y attachment

    $mensaje = $cuerpoMensaje . "\r\n\r\n";

    //envio el email y verifico la respuesta de la función "email" (true o false)

    if (mail($destinatarioEmail, $asuntoEmail, $mensaje, $header)) {
        $msj = "Mensaje enviado correctamente";
        mensaje_error($msj);
    } else {
        $msj = "Error al enviar mensaje, intente nuevamente por favor";
        mensaje_error($msj);
    }
    //echo $cuerpoMensaje;
}

function mensaje_error($msj)
{
    ?>
    <h1>¡Gracias Por Contactarte!</h1>
    <h2>Estaremos comunicándonos lo antes posible.</h2>
    <div id="msj">
    <?php echo $msj; ?><br><br>
        <a href="https://www.limalocal.com/">Regresar</a>
    </div>
    <?php
}
