<?php

actualizando();

//banner();

$acc = "";

if (isset($_GET['acc'])) {
    $acc = $_GET['acc'];
}

if (!$acc) {
    //perfil();
} else {
    if ($acc == "perfil") {
        //perfil();
    } elseif ($acc == "tiendas") {
        //tiendas();
    } elseif ($acc == "recibos") {
        //recibos();
    } elseif ($acc == "asesoria") {
        //asesoria();
    }
}

//*funciones

function actualizando()
{
    ?>
    <div>
        <div class="espera verde">...Actualizando</div>
        <div class="remodelacion desk"><img src="images/banners/remodelacion.jpg"></div>
        <div class="remodelacion mob"><img src="images/banners/mob/remodelacion_mob.jpg"></div>
    </div>
    <?php
}

function banner()
{
    ?>
    <div id="bloque_banner">
        <div id="banners_sesion">
            <div id="galeria">
                <div><img src="images/banners/banner-limalocal-2020_registro.jpg"></div>
            </div>
        </div>
        <script type="text/javascript" src="js/slick/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#galeria').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: true,
                    infinite: true,
                    speed: 500,
                    responsive: true
                });
            });
        </script>
    </div>
    <?php
}

function perfil()
{
    if (isset($_SESSION['mail_limalocal'])) {
        miperfil();
    } else {
        form_registro_login();
        ?>
        <div class="bloque gris">
            <div id="mitienda">
                <div id="titulo_mitienda">Mi tienda virtual</div>
                <div id="opciones">
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/perfil.svg" alt="perfil"></div>
                                <div class="titulo_link">Editar mi perfil</div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/dominio.svg" alt="perfil"></div>
                                <div class="titulo_link">Elegir mi dominio</div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/facturacion.svg" alt="perfil"></div>
                                <div class="titulo_link">Mis datos de facturación</div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/asesoria.svg" alt="perfil"></div>
                                <div class="titulo_link">Solicitar asesoría</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloque blanco">
            <div id="mitienda">
                <div id="titulo_mitienda">Otros servicios</div>
                <div id="opciones">
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/tienda.svg" alt="perfil"></div>
                                <div class="titulo_link">Diseño de publicaciones</div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/logos.svg" alt="perfil"></div>
                                <div class="titulo_link">Diseño de logotipo</div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/redes.svg" alt="perfil"></div>
                                <div class="titulo_link">Campaña en redes </div>
                            </a>
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="bloque_op">
                            <a href="#">
                                <div class="imagen"><img src="images/svg/iconos/campg.svg" alt="perfil"></div>
                                <div class="titulo_link">Campaña en Google</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

function form_registro_login()
{

    if (isset($_POST['registrar'])) {
        $registro = $_POST['registrar'];
        if ($registro == 'registro') {
            registrarse();
        }
    } elseif (isset($_POST['ingresar'])) {
        $ingresar = $_POST['ingresar'];
        if ($ingresar == "ingresa") {
            ingresar();
        }
    } else {
        $registro = "";
        if (isset($_GET['reg'])) {
            ?>
            <div class="bloque blanco">
                <div class="form_cliente">
                    <div id="titulo_form_cliente">Regístrate</div>
                    <form action="mitienda.php" enctype="multipart/form-data" method="post" autocomplete="off">
                        <div class="linea_form">
                            <input type="text" name="nombre_txt" placeholder="Nombre" required>
                        </div>
                        <div class="linea_form">
                            <input type="text" name="apellido_txt" placeholder="Apellidos" required>
                        </div>
                        <div class="linea_form">
                            <input type="email" name="correo_txt_reg" placeholder="Correo Electrónico">
                        </div>
                        <div class="linea_form">
                            <input type="password" name="pass_txt_reg" placeholder="Contraseña">
                        </div>
                        <div class="linea_form">
                            <input type="password" name="rep_pass_txt" placeholder="Repita su contraseña" required>
                        </div>
                        <div class="linea_form">
                            <input type="hidden" name="registrar" value="registro">
                            <button type="submit" class="ingresar_form">Registrarme</button>
                        </div>
                    </form>
                    <div class="logreg"><a href="mitienda.php?acc=perfil">Ya tengo cuenta</a></div>
            <?php
            if (isset($_GET['err'])) {
                $error = $_GET['err'];
                ?>
                        <div class="error">Error</div>
                <?php
            }
            ?>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="bloque blanco">
                <div class="form_cliente">
                    <div id="titulo_form_cliente">Ingresa a tu cuenta</div>
                    <form action="mitienda.php" enctype="multipart/form-data" method="post" autocomplete="off">
                        <div class="linea_form">
                            <input type="email" name="correo_txt" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="linea_form">
                            <input type="password" name="pass_txt" placeholder="Contraseña" required>
                        </div>
                        <div class="linea_form">
                            <input type="hidden" name="ingresar" value="ingresa">
                            <button type="submit" class="ingresar_form">Ingresar</button>
                        </div>
                    </form>
                    <div class="logreg"><a href="mitienda.php?acc=perfil&reg=reg">No tengo cuenta, quiero registrarme</a></div>
            <?php
            if (isset($_GET['err'])) {
                $error = $_GET['err'];
                ?>
                        <div class="error">Error, por favor veifica tu Usuario y Contraseña</div>
                <?php
            }
            ?>
                </div>
            </div>
            <?php
        }
    }
}

function ingresar()
{
    date_default_timezone_set('America/Lima');
    $hoy = date("Y-m-d");
    if (isset($_POST['correo_txt'])) {
        $email = $_POST['correo_txt'];
    };
    if (isset($_POST['pass_txt'])) {
        $pass = $_POST['pass_txt'];
    };
    echo $email . "<br>";
    echo $pass . "<br>";
    if ($email) {
        if ($pass) {
            $verificar = get_pass_cliente($email);
            if (tep_validate_password($pass, $verificar)) {
                $_SESSION['mail_limalocal'] = $email;
                $query_ultima_sesion = "UPDATE clientes SET ult_fecha_ingreso = '$hoy' WHERE email_cliente = '$email'";
                actualizar_registro($query_ultima_sesion);
                echo "<script>location.href = 'mitienda.php';</script>";
            } else {
                echo "<script>location.href = 'mitienda.php?err=3';</script>";
            }
        } else {
            echo "<script>location.href = 'mitienda.php?err=2';</script>";
        }
    } else {
        echo "<script>location.href = 'mitienda.php?err=1';</script>";
    }
}

function miperfil()
{
    date_default_timezone_set('America/Lima');
    $cliente_ses = $_SESSION['mail_limalocal'];

    if (isset($_POST['nombreplan'])) {
        //plan();
        pago_directo();
    } else {
        if (isset($_POST['actualizar'])) {
            $actualizar = $_POST['actualizar'];
            if ($actualizar == "actualiza") {
                actualizar_datos_personales();
            }
            if ($actualizar == "facturacion") {
                actualizar_datos_facturacion();
            }
        }
        $query_cliente = "SELECT * FROM clientes WHERE email_cliente = '$cliente_ses'";
        $cliente = obtener_linea($query_cliente);
        ?>
        <div class="bloque blanco">
            <div class="form_cliente">
                <div id="titulo_form_cliente">¡Bienvenido a Lima Local!</div>
                <div class="parr">Estamos felices de desarrollar su tienda virtual y muy agradecidos por su confianza. </div>
                <div class="parr">Para suscribirse correctamente completa todos tus datos personales. </div>
                <div id="subtitulo_form_cliente">Empecemos</div>
                <div class="icono">
                    <div class="ico"><img src="images/svg/iconos/perfil.svg" alt="perfil"></div>
                    <div class="titulo_ico">Mi perfil</div>
                </div>
                <form action="mitienda.php" method="post" enctype="multipart/form-data">
                    <div class="linea">
                        <div class="tit">Nombres:</div>
                        <div class="campo"> <input type="text" name="nombres_cliente" value="<?php echo $cliente['nombres_cliente'] ?>" placeholder="Nombres" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Apellidos:</div>
                        <div class="campo"> <input type="text" name="apellidos_cliente" value="<?php echo $cliente['apellidos_cliente'] ?>" placeholder="Apellidos" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Email:</div>
                        <div class="campo"> <input type="text" name="email_cliente" value="<?php echo $cliente['email_cliente'] ?>" disabled></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Celular:</div>
                        <div class="campo"> <input type="text" name="celular_cliente" value="<?php echo $cliente['celular_cliente'] ?>" placeholder="Celular" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Dirección:</div>
                        <div class="campo"> <input type="text" name="direccion_cliente" value="<?php echo $cliente['direccion_cliente'] ?>" placeholder="Dirección" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Ciudad:</div>
                        <div class="campo"> <input type="text" name="ciudad_cliente" value="<?php echo $cliente['ciudad_cliente'] ?>" placeholder="Ciudad" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Fijo:</div>
                        <div class="campo"> <input type="text" name="fijo_cliente" value="<?php echo $cliente['fijo_cliente'] ?>" placeholder="Fijo" required></div>
                    </div>
                    <div class="linea">
                        <input type="hidden" name="actualizar" value="actualiza">
                        <button type="submit" class="actualizar_form">Actualizar mi perfil</button>
                    </div>
                </form>
            </div>
        <?php
        $id_cliente = $cliente['id_cliente'];
        $query_facturacion = "SELECT * FROM facturacion WHERE id_cliente = $id_cliente";
        $facturacion = obtener_linea($query_facturacion);
        ?>
            <div class="form_cliente">
                <div class="icono">
                    <div class="ico"><img src="images/svg/iconos/facturacion.svg" alt="perfil"></div>
                    <div class="titulo_ico">Datos de facturación</div>
                </div>
                <form action="mitienda.php" method="post" enctype="multipart/form-data">
                    <div class="linea">
                        <div class="tit">Razón Social:</div>
                        <div class="campo"> <input type="text" name="razon_social" value="<?php echo $facturacion['razon_social_facturacion'] ?>" placeholder="Razón Social" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">RUC:</div>
                        <div class="campo"> <input type="text" name="ruc" value="<?php echo $facturacion['ruc_facturacion'] ?>" placeholder="RUC" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Dirección fiscal:</div>
                        <div class="campo"> <input type="text" name="direccion_fiscal" value="<?php echo $facturacion['direccion_fiscal_facturacion'] ?>" placeholder="Dirección fiscal" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">Representante legal:</div>
                        <div class="campo"> <input type="text" name="representante_legal" value="<?php echo $facturacion['representante_facturacion'] ?>" placeholder="Representante legal" required></div>
                    </div>
                    <div class="linea">
                        <div class="tit">DNI del representante legal:</div>
                        <div class="campo"> <input type="text" name="dni_representante" value="<?php echo $facturacion['dni_representante_facturacion'] ?>" placeholder="DNI del representante legal" required></div>
                    </div>
                    <div class="linea">
                        <input type="hidden" name="cliente" value="<?php echo $cliente['id_cliente'] ?>">
                        <input type="hidden" name="actualizar" value="facturacion">
                        <button type="submit" class="actualizar_form">Guardar datos</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        $query_ver = "SELECT * from clientes where email_cliente = '$cliente_ses'";
        $query_obtener = obtener_linea($query_ver);
        $fechasuscripcion = $query_obtener['fecha_suscripcion'];
        $idsus = $query_obtener['id_suscripcion'];
        if ($query_obtener['suscrito'] == "si") {
            ?>
            <div class="bloque blanco">
                <div id="planes">
                    <div id="titulo_planes">Comencemos a Desarrollar tu web...</div>
                </div>

            <?php
            $fechahoy = date('Y-m-d');
            $nuevafecha = strtotime('+3 month', strtotime($fechasuscripcion));
            $nuevafecha = date('Y-m-d', $nuevafecha);
            // echo $nuevafecha;
            if ($fechahoy <= $nuevafecha) {
                ?>
                    <!--
    <div id="planes">
        <button class="btn btn-default">Todavia Desuscribirse </button>
        
    </div>
-->
                <?php
            } else {
                ?>
                    <!--
    <div id="planes">
        <button class="btn btn-default desuscr">Desuscribirse</button>
        <input type="hidden" value="<?php echo $idsus ?>" id="ids">
        <label id="rspterr" style="display:none">Error al eliminar, intentelo de nuevo. Si intento varias veces comuniquese al administrador de la pagina</label>
    </div>
    <script>
        $(".desuscr").on("click",function(){
            var idsus = $("#ids").val();
            $.ajax({
                url: 'culqi/cancelar_suscripcion.php',
                type: 'post',
                data: {'id_susc':idsus,'correo':$cliente_ses},
                success: function(res){
                    var types = JSON.parse(res);
                    var suscrip = types["deleted"];
                    if(suscrip == true){
                        location.reload();
                    }else{
                        $("#rspterr").show();
                        setTimeout(() => {
                            $("#rspterr").hide();
                        }, 5000);
                    }
                },
                error: function(){

                }
            })
        })
    </script>
-->
                <?php
            }
            ?>

            </div>
            <?php
        } elseif ($query_obtener['suscrito'] == "ep") {
            ?>
            <div class="bloque blanco">
                <div id="planes">
                    <div id="titulo_planes">Esperando voucher de confirmacion</div>
                </div>

            </div>
            <?php
        } else {
            if ($query_obtener['celular_cliente'] != "" && $query_obtener['direccion_cliente'] != "" && $query_obtener['ciudad_cliente'] != "") {
                ?>
                <div class="bloque blanco">
                    <div id="planes">
                        <div id="titulo_planes">Quiero alquilar una tienda virtual</div>
                        <div class="plan">
                            <div class="bloque_plan naranja">
                                <div class="titulo_plan naranja_tit">Promoción 87*3</div>
                                <div class="precio_plan lt_naranja">
                                    <div class="preciop"><span class="arreglo">S/.</span>261</div>
                                    <div class="mensp">*3 meses</div>
                                </div>
                            </div>
                            <form action="mitienda.php?acc=perfil" method="post">
                                <input type="hidden" name="codplanes" value="">
                                <input type="hidden" name="nombreplan" value="Promoción 87*3">
                                <input type="hidden" name="montoplan" value="26100">
                                <div class="btn_sus"><input type="submit" class="vermas" value="Ir a Pagar" disabled></div>
                            </form>
                        </div>

                        <div class="plan">
                            <div class="bloque_plan rojo">
                                <div class="titulo_plan rojo_tit">Promoción 80*12</div>
                                <div class="precio_plan lt_roja">
                                    <div class="preciop"><span class="arreglo">S/.</span>960</div>
                                    <div class="mensp">1 año</div>
                                </div>
                            </div>
                            <form action="mitienda.php?acc=perfil" method="post">
                                <input type="hidden" name="codplanes" value="">
                                <input type="hidden" name="nombreplan" value="Promoción 80*12">
                                <input type="hidden" name="montoplan" value="96000">
                                <div class="btn_sus"><input type="submit" class="vermas" value="Ir a Pagar" disabled></div>
                            </form>
                        </div>



                <?php

                if ($cliente_ses == "mmendoza@limalocal.com") {
                    ?>
                            <div class="plan">
                                <div class="bloque_plan rojo">
                                    <div class="titulo_plan rojo_tit">Pago Mensual 99</div>
                                    <div class="precio_plan lt_roja">
                                        <div class="preciop"><span class="arreglo">S/.</span>99</div>
                                        <div class="mensp">1 mes</div>
                                    </div>
                                </div>
                                <form action="mitienda.php?acc=perfil" method="post">
                                    <input type="hidden" name="codplanes" value="">
                                    <input type="hidden" name="nombreplan" value="Pago Mensual 99">
                                    <input type="hidden" name="montoplan" value="9900">
                                    <div class="btn_sus"><input type="submit" class="vermas" value="Ir a Pagar" disabled></div>
                                </form>
                            </div>

                            <div class="plan">
                                <div class="bloque_plan rojo">
                                    <div class="titulo_plan rojo_tit">Pago Prueba 5</div>
                                    <div class="precio_plan lt_roja">
                                        <div class="preciop"><span class="arreglo">S/.</span>5</div>
                                        <div class="mensp">Pago Prueba</div>
                                    </div>
                                </div>
                                <form action="mitienda.php?acc=perfil" method="post">
                                    <input type="hidden" name="codplanes" value="">
                                    <input type="hidden" name="nombreplan" value="Pago Prueba 5">
                                    <input type="hidden" name="montoplan" value="500">
                                    <div class="btn_sus"><input type="submit" class="vermas" value="Ir a Pagar" disabled></div>
                                </form>
                            </div>
                    <?php
                }

                ?>

                    </div>
                </div>
                <?php
            }
        }
    }
}

function pago_directo()
{
    $nombreplan = $_POST['nombreplan'];
    $codigoplan = $_POST['codplanes'];
    $montoplan = $_POST['montoplan'];
    $email = $_SESSION['mail_limalocal'];

    if ($nombreplan == "Promoción 87*3") {
        $descipcion = "
	<p>Paga 87 por tres meses.</p>
	<p>Recuerda que te acompañaremos durante todo el proceso de implementación de tu tienda virtual.</p>
	";
        //echo $descipcion;
    }

    if ($nombreplan == "Promoción 80*12") {
        $descipcion = "
	<p>Paga 80 por 1 año.</p>
	<p>Recuerda que te acompañaremos durante todo el proceso de implementación de tu tienda virtual.</p>
	";
        //echo $descipcion;
    }

    if ($nombreplan == "Pago Mensual 99") {
        $descipcion = "
	<p>Paga 99 por 1 mes.</p>
	<p>Recuerda que te acompañaremos durante todo el proceso de implementación de tu tienda virtual.</p>
	";
        //echo $descipcion;
    }

    if ($nombreplan == "Pago Prueba 5") {
        $descipcion = "
	<p>Pago Prueba.</p>
	<p>Pago de Prueba</p>
	";
        //echo $descipcion;
    }
    ?>
    <div class="bloque">
        <div id="planes">
            <h1 class="card-title"><?php echo $nombreplan; ?></h1>
            <div class='descp_plan'><?php echo $descipcion; ?></div>
            <br><br>
            <div class="pagculqi"><button type="button" class="buyButton">Pagar Ahora</button></div>
            <br><br>
            <div class="cuadro"><a href="mitienda.php?acc=perfil" class="retorno_otro">Elegir otra opción</a></div>
        </div>
    </div>
    <script src="https://checkout.culqi.com/js/v3"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <?php
    date_default_timezone_set('America/Lima');
    $codigo = "LML" . date("ymdHis");
    $moneda = 'PEN';

    ?>

    <script>
        //Culqi.publicKey = 'pk_test_T4IjnXkydaLt9uoD';
        Culqi.publicKey = 'pk_live_uWmWJQnoyQLd17T5';
        Culqi.settings({
            title: '<?php echo $nombreplan ?>',
            currency: 'PEN',
            description: 'Pedido N: <?php echo $codigo ?>',
            amount: '<?php echo $montoplan ?>'
        });
        Culqi.options({
            modal: true,
            style: {
                logo: 'https://www.limalocal.com/images/rep/logo_limalocal_culqi.jpg',
                maincolor: '#32bba5',
                buttontext: '#ffffff',
                maintext: '#000000',
                desctext: '#000000'
            }
        });
    </script>
    <script>
        $('.buyButton').on('click', function(e) {
            // Abre el formulario con las opciones de Culqi.settings
            Culqi.open();
            e.preventDefault();
        });
    </script>

    <script>
        function culqi() {
            Culqi.close();
        };
    </script>
    <script>
        function culqi() {

            if (Culqi.token) { // ¡Token creado exitosamente!
                // Get the token ID:
                var token = Culqi.token.id;
                var email = Culqi.token.email;

                var codigo = "<?php echo $nombreplan ?>";
                var total = "<?php echo $montoplan ?>";
                var moneda = "<?php echo $moneda ?>";
                var datitos = {
                    codigo: codigo,
                    total: total,
                    token: token,
                    email: email,
                    moneda: moneda
                };
                var data = datitos;
                var url = "proceso.php";
                $.post(url, data, function(res) {
                    //console.log(datitos);
                    //if (res){
                    //alert(res);

                    var contiene = res.indexOf("charge_id");
                    if (contiene >= 0) { // Es un error
                        var datos = JSON.parse(eval(res));
                        //alert(datos["user_message"]);
                        //alert(datos["merchant_message"]);
                        //response.redirect("paginaerror.php");
                        var parametros = {
                            "mensaje_culqi": datos["user_message"],
                        };

                        $.ajax({
                            data: parametros,
                            url: 'paginaerror.php',
                            type: 'post',
                            beforeSend: function() {
                                $("#planes").html("Procesando, espere por favor")
                            },
                            success: function(msg) {
                                $("#planes").html(msg)

                            }
                        });
                    } else {
                        var datos = JSON.parse(res);
                        //alert(datos["outcome"]["user_message"]);

                        var parametros = {
                            "nombreplan": "<?php echo $nombreplan ?>",
                            "montoplan": "<?php echo $montoplan ?>",
                            "mail_limalocal": "<?php echo $mail_limalocal ?>",
                            "moneda": "<?php echo $moneda ?>",
                            "mensaje_culqi": datos["outcome"]["user_message"],
                        };
                        //console.log(parametros);
                        $.ajax({
                            data: parametros,
                            url: 'paginaexito.php',
                            type: 'post',
                            beforeSend: function() {
                                $("#planes").html("Procesando, espere por favor")
                            },
                            success: function(msg) {
                                $("#planes").html(msg)

                            }
                        });
                    }

                });

            } else { // ¡Hubo algún problema!
                // Mostramos JSON de objeto error en consola
                console.log(Culqi.error);
                alert(Culqi.error.mensaje);
            }
        };
    </script>

    <?php
}

function plan()
{
    $nombreplan = $_POST['nombreplan'];
    $codigoplan = $_POST['codplanes'];
    $montoplan = $_POST['montoplan'];
    $email = $_SESSION['mail_limalocal'];

    if ($nombreplan == "Emprende") {
        $descipcion = "<p>Enlaza tus esfuerzos publicitarios con un sistema de ventas automatizado. Muestra de tus productos de manera ordenada y permite que tus clientes compren desde tu página web.</p><p>Recuerda que te acompañaremos durante todo el proceso de implementación de tu tienda virtual.</p>";
    }

    ?>

    <div class="bloque">
        <div id="planes">
            <h1 class="card-title">Plan <?php echo $nombreplan; ?></h1>
            <div class='descp_plan'><?php echo $descipcion ?></div>
    <?php
    $ses = $_SESSION['mail_limalocal'];
    $query_ver = "SELECT * from clientes where email_cliente = '$ses '";
    $query_obtener = obtener_linea($query_ver);
    if ($query_obtener['celular_cliente'] != "" && $query_obtener['direccion_cliente'] != "" && $query_obtener['ciudad_cliente'] != "") {
        ?>
                <div class="cuadro">
                    <button class="contrata_plan" id="alquiler" disabled="disabled">Suscribirse al Plan <?php echo $nombreplan; ?><br>Tarjeta de Crédito</button>
                    <!--                <button class="contrata_plan" data-toggle="modal" data-target="#exampleModalCenter">Suscribirse al Plan <?php echo $nombreplan; ?><br>Transferencia bancaria</button>-->
                </div>
                <div class="cuadro">
                    <label><input type="checkbox" name="tcp"> Acepta <a href="https://www.limalocal.com/tyc.php">Términos y Condiciones</a></label>
                </div>
                <div class="cuadro">
                    <label style="display:none" id="rsptt">Tiene que aceptar términos y condiciones.</label>
                </div>
                <script>
                    $("input[name=tcp]").on("change", function() {
                        if ($(this).is(":checked")) {
                            $("#alquiler").removeAttr("disabled");
                            $("#rsptt").hide("slow");
                        } else {
                            $("#alquiler").attr("disabled", "disabled");
                            $("#rsptt").show("slow");
                        }
                    })
                    //                $("#alquiler").on("click",function(){
                    //                    if($(this).is('disabled')){
                    //                        alert("no");
                    //                    }else{
                    //                        alert("si");
                    //                    }
                    //                })
                </script>
                <!--
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Plan <?php echo $nombreplan; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Se está suscribiendo al Plan <?php echo $nombreplan; ?>,<br> 
                    al confirmar se le estará enviando un correo con los datos para el depósito.
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success col-12"  id="transferencia">Confirmar</button>
                </div>
                <div class="modal-footer text-center" id="rspmodal" style="display:none">
                <label class="col-12">Gracias por Suscribirse</label>
                </div>
                <div class="modal-footer text-center" id="rspmodalerr" style="display:none">
                <label class="col-12">Error al suscribirse, inténtelo de nuevo</label>
                </div>
                
                </div>
            </div>
            </div>
-->
                <script>
                    $("#transferencia").on("click", function() {
                        $.ajax({
                            url: 'envio_correo.php',
                            type: 'post',
                            data: {
                                'correo': '<?php echo $email; ?>',
                                'dato': 'suscripciontr',
                                'plan': '<?php echo $nombreplan; ?>'
                            },
                            success: function(res) {
                                // location.href ="mitienda.php";
                                console.log(res)
                                if (res == "bien") {
                                    $("#rspmodal").show();
                                    setTimeout(() => {
                                        location.href = "mitienda.php";
                                    }, 3000);
                                } else {
                                    $("#rspmodalerr").show();
                                }
                            },
                            error: function(res) {
                                console.log(res);
                            }
                        });
                    })
                </script>
        <?php
    } else {
        ?>
                <div><a href="mitienda.php?acc=perfil">Debe Ingresar Datos Personales para Registrarse</a></div>
        <?php
    }
    ?>
            <input type="hidden" value="<?php echo $codigoplan; ?>" id="coplan">
            <input type="hidden" value="<?php echo $email; ?>" id="correo">
            <div class="cuadro"><a href="mitienda.php?acc=perfil" class="retorno_otro">Elegir otro plan</a></div>
        </div>
        <div id="caracteristicas_plan">
            <div id="tit_car">¿Qué incluye este plan?</div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/dominio.svg"></div>
                    <div class="nombre">Dominio, Hosting y Sello de seguridad</div>
                    <div class="car">Este paquete incluye dominios .com, .shop .store. No incluye dominios .com ni .com.pe. El hosting y sello de seguridad están incluidos. </div>
                </div>
            </div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/administrador.svg"></div>
                    <div class="nombre">Administrador de contenidos</div>
                    <div class="car">Podrás agregar, suspender o eliminar: contenido, banners, productos, fotografías; ver las estadísticas de visitas y organizar tus ventas. </div>
                </div>
            </div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/pasarel.svg"></div>
                    <div class="nombre">Pasarella de pago</div>
                    <div class="car">Recibe pagos con tarjetas de crédito, débito y otros sistemas de pago. Pasarella de pago Culqi. </div>
                </div>
            </div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/redes.svg"></div>
                    <div class="nombre">Vincula tus redes sociales</div>
                    <div class="car">Un asesor te ayudará a vincular tu plataforma de ventas con Instagram, Facebook o Google. Podrás realizar campañas publicitarias por ventas y no por vistas. </div>
                </div>
            </div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/tienda.svg"></div>
                    <div class="nombre">Plantillas de diseño</div>
                    <div class="car">Elige una plantilla con funciones específicas para tu negocio. No podrás cambiar o alterar las funciones de la tienda. </div>
                </div>
            </div>
            <div class="caja">
                <div class="marco">
                    <div class="imagen"><img src="images/svg/iconos/facturacion.svg"></div>
                    <div class="nombre">Suscripción</div>
                    <div class="car">El pago mensual se debitará automáticamente de la tarjeta registrada en la plataforma web de Lima local.No cobramos comisiones por ventas. </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://checkout.culqi.com/js/v3"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        var plan = $("#coplan").val();
        var correo = $("#correo").val();
        var nombreplan = "<?php echo $_POST['nombreplan'] ?>";
        //Culqi.publicKey = 'pk_live_uWmWJQnoyQLd17T5';
        Culqi.publicKey = 'pk_test_T4IjnXkydaLt9uoD';
        $("#alquiler").on('click', function(e) {

            $("#rsptt").hide("slow");
            Culqi.settings({
                title: 'Limalocal',
                currency: 'PEN',
                description: 'Plan <?php echo $nombreplan; ?>',
                amount: "<?php echo $montoplan; ?>"
            });
            Culqi.open();
            e.preventDefault();

            Culqi.options({
                modal: true,
                style: {
                    logo: 'https://www.limalocal.com/images/rep/logo_limalocal_culqi.jpg',
                    maincolor: '#31af95',
                    buttontext: '#ffffff',
                    maintext: '#4A4A4A',
                    desctext: '#4A4A4A'
                }
            });



        });


        function culqi() {
            var cor = Culqi.token.email;
            if (cor == correo) {
                if (Culqi.token) {
                    var token = Culqi.token.id;
                    $.ajax({
                        url: 'culqi/cliente.php',
                        type: 'post',
                        data: {
                            'correo': cor
                        },
                        success: function(re) {
                            console.log("entro al cliente");
                            console.log(re);
                            var types = JSON.parse(re);
                            var dato = typeof types;
                            if (dato === "object") {
                                console.log("entro al if1");
                                var cliente = types["id"];
                                $.ajax({
                                    url: 'culqi/tarjeta.php',
                                    type: 'post',
                                    data: {
                                        'cliente': cliente,
                                        'token': token,
                                        'codigo_cliente': cliente,
                                        'correo_val': cor
                                    },
                                    success: function(re) {
                                        console.log("entro a tarjeta");
                                        console.log(re);
                                        var types = JSON.parse(re);
                                        var tarjeta = types["id"];
                                        $.ajax({
                                            url: 'culqi/suscripcion.php',
                                            type: 'post',
                                            data: {
                                                'tarjeta': tarjeta,
                                                'plan': plan,
                                                'nombreplan': nombreplan,
                                                'correo_val': cor
                                            },
                                            success: function(res) {
                                                console.log("entro a la suscripcion");
                                                console.log(res);
                                                var types = JSON.parse(res);
                                                var suscrip = types["id"];
                                                $.ajax({
                                                    url: 'culqi/guardar_suscr.php',
                                                    type: 'POST',
                                                    data: {
                                                        'id_susc': suscrip,
                                                        'correo_val': cor
                                                    },
                                                    success: function(resp) {
                                                        console.log("entro al guardar suscripcion");
                                                        console.log(resp);
                                                        $.ajax({
                                                            url: 'envio_correo.php',
                                                            type: 'post',
                                                            data: {
                                                                'correo': cor,
                                                                'dato': 'suscripciont',
                                                                'plan': '<?php echo $nombreplan; ?>'
                                                            },
                                                            success: function(res) {
                                                                console.log("entro al envio de correo");
                                                                console.log(res);
                                                                //                                                        if(res == "bien"){
                                                                //                                                            location.href ="mitienda.php";
                                                                //                                                        }else{
                                                                //                                                            alert("error al actualizar cliente");
                                                                //                                                        }
                                                            },
                                                            error: function(res) {
                                                                console.log(res);
                                                            }
                                                        });

                                                    },
                                                    error: function(resp) {
                                                        console.log(resp);
                                                    }
                                                })
                                            },
                                            error: function(respt) {
                                                console.log(respt);
                                            }
                                        })
                                    },
                                    error: function(resp) {
                                        console.log(resp);
                                    }
                                })
                            }
                            if (dato === "string") {
                                console.log("entro al if2");
                                console.log(types);
                                var cliente = types;
                                $.ajax({
                                    url: 'culqi/tarjeta.php',
                                    type: 'post',
                                    data: {
                                        'cliente': cliente,
                                        'token': token
                                    },
                                    success: function(re) {
                                        console.log("entro a la tarjeta2");
                                        console.log(re)
                                        var types = JSON.parse(re);
                                        var tarjeta = types["id"];
                                        $.ajax({
                                            url: 'culqi/suscripcion.php',
                                            type: 'post',
                                            data: {
                                                'tarjeta': tarjeta,
                                                'plan': plan,
                                                'nombreplan': nombreplan,
                                                'correo_val': cor
                                            },
                                            success: function(res) {
                                                console.log("entro a la suscripcion");
                                                console.log(res);
                                                var types = JSON.parse(res);
                                                var suscrip = types["id"];
                                                $.ajax({
                                                    url: 'culqi/guardar_suscr.php',
                                                    type: 'POST',
                                                    data: {
                                                        'id_susc': suscrip,
                                                        'correo_val': cor
                                                    },
                                                    success: function(resp) {
                                                        console.log("entro a guardar suscripcion");
                                                        console.log(resp);
                                                        $.ajax({
                                                            url: 'envio_correo.php',
                                                            type: 'post',
                                                            data: {
                                                                'correo': cor,
                                                                'dato': 'suscripciont',
                                                                'plan': '<?php echo $nombreplan; ?>'
                                                            },
                                                            success: function(res) {
                                                                console.log("entro al correo");
                                                                console.log(res);
                                                                //                                                        if(res == "bien"){
                                                                //                                                            location.href ="mitienda.php";
                                                                //                                                        }else{
                                                                //                                                            alert("error al actualizar cliente");
                                                                //                                                        }

                                                            },
                                                            error: function(res) {
                                                                console.log(res);
                                                            }
                                                        });
                                                    },
                                                    error: function() {}
                                                })
                                            },
                                            error: function(respt) {
                                                console.log(respt);
                                            }
                                        })
                                    },
                                    error: function(resp) {
                                        console.log(resp);
                                    }
                                })
                            }
                        },
                        error: function(res) {
                            console.log(res);
                        }
                    });
                } else {
                    console.log(Culqi.error);
                    alert(Culqi.error.mensaje);
                }
            } else {
                Culqi.close();
                alert("Los Correos no coinciden, Ponga su correo de Sesion");
            }
        }
    </script>
    <?php
}

function actualizar_datos_personales()
{

    $nombres = $_POST['nombres_cliente'];
    $apellidos = $_POST['apellidos_cliente'];
    $celular = $_POST['celular_cliente'];
    $direccion = $_POST['direccion_cliente'];
    $ciudad = $_POST['ciudad_cliente'];
    $fijo = $_POST['fijo_cliente'];
    $mail = $_SESSION['mail_limalocal'];

    if ($nombres && $apellidos && $celular && $direccion && $ciudad && $fijo) {
        $query_update = "UPDATE clientes SET nombres_cliente = '$nombres', apellidos_cliente = '$apellidos', celular_cliente = '$celular', direccion_cliente = '$direccion', ciudad_cliente = '$ciudad', fijo_cliente = '$fijo' WHERE email_cliente = '$mail' ";

        $query_hecho = actualizar_registro($query_update);
        if ($query_hecho) {
            ?>
            <div class="msj">Datos actualizados correctamente</div>
            <?php
        } else {
            ?>
            <div class="msj">Todos los campos son requeridos.</div>
            <?php
        }
    }
}

function actualizar_datos_facturacion()
{
    $id_cliente = $_POST['cliente'];
    $razon_social = $_POST['razon_social'];
    $ruc = $_POST['ruc'];
    $direccion_fiscal = $_POST['direccion_fiscal'];
    $representante_legal = $_POST['representante_legal'];
    $dni_representante = $_POST['dni_representante'];

    $query_facturacion = "SELECT * FROM facturacion WHERE id_cliente = $id_cliente";
    $facturacion = obtener_linea($query_facturacion);

    if ($facturacion['id_cliente']) {
        $query_facturacion = "UPDATE facturacion SET razon_social_facturacion = '$razon_social', ruc_facturacion = '$ruc', direccion_fiscal_facturacion = '$direccion_fiscal', representante_facturacion = '$representante_legal', dni_representante_facturacion = '$dni_representante' WHERE id_cliente = '$id_cliente' ";
    } else {
        $query_facturacion = "INSERT INTO facturacion (id_cliente, razon_social_facturacion, ruc_facturacion, direccion_fiscal_facturacion, representante_facturacion, dni_representante_facturacion) VALUE ('$id_cliente', '$razon_social', '$ruc', '$direccion_fiscal', '$representante_legal', '$dni_representante')";
    }

    $guarda_facturacion = actualizar_registro($query_facturacion);
    if ($guarda_facturacion) {
        ?>
        <div class="msj">Datos actualizados correctamente</div>
        <?php
    } else {
        ?>
        <div class="msj">No se pudo actualizar los datos. Intente nuevamente.</div>
        <?php
    }
}

function registrarse()
{
    if (isset($_POST['nombre_txt'])) {
        $nombre = $_POST['nombre_txt'];
    };
    if (isset($_POST['apellido_txt'])) {
        $apellidos = $_POST['apellido_txt'];
    };
    if (isset($_POST['correo_txt_reg'])) {
        $email = $_POST['correo_txt_reg'];
    };
    if (isset($_POST['pass_txt_reg'])) {
        $pass = $_POST['pass_txt_reg'];
    };
    if (isset($_POST['rep_pass_txt'])) {
        $pass_rep = $_POST['rep_pass_txt'];
    };

    if ($pass == $pass_rep) {
        $query_cliente_repetido = "SELECT * FROM clientes WHERE email_cliente = '$email'";
        $cliente_repetido = obtener_linea($query_cliente_repetido);
        if (!$cliente_repetido) {
            $password = tep_encrypt_password($pass);
            $query_cliente = "INSERT INTO clientes (nombres_cliente, apellidos_cliente, email_cliente, password_cliente) VALUE ('$nombre', '$apellidos', '$email', '$password')";
            if (actualizar_registro($query_cliente)) {
                enviar_correo_confirmacion($nombre, $apellidos, $email);
                ?>
                <div class="bloque blanco">
                    <div class="form_cliente">
                        <div id="titulo_form_cliente">Muchas gracias por registrarte.</div>
                        <p>Te llegará un correo de confirmación, en caso que no lo encuentres, busca en el spam.</p>
                        <p>Para continuar <a href="mitienda.php?acc=perfil">inicia sesión</a>.</p>
                    </div>
                </div>
                <?php
            } else {
                echo "<script>location.href = 'mitienda.php?acc=perfil&reg=reg&err=6';</script>";
            }
        } else {
            echo "<script>location.href = 'mitienda.php?acc=perfil&reg=reg&err=5';</script>";
        }
    } else {
        echo "<script>location.href = 'mitienda.php?acc=perfil&reg=reg&err=4';</script>";
    }
}

function enviar_correo_confirmacion($nombre, $apellidos, $email)
{

    $destinatario = "rbreva@gmail.com ";
    $asunto = "Bienvenido a Limalocal";
    $asunto_tienda = "Nuevo Registro en Limalocal";
    $cuerpo = ' 
<html>
<head>
<title>Registro Limalocal</title>
</head>
<body>
<br>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
<tr>
<td><img alt="Limalocal" src="https://www.limalocal.com/images/rep/logo_limalocal_mail.jpg" style="display:block; border:0px;" width="600" /></td>
</tr>
<tr>
<td>
<p style="font-size: 26px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-transform: uppercase; text-align: center; margin-top: 10px;">Hola ' . $nombre . ' ' . $apellidos . ',</p>
<p style="font-size:16px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-transform: uppercase; text-align: center; margin: 10px;">Gracias por crear tu cuenta en Limalocal.</p>
</td>
</tr>
<tr>
<td style="background-color: #f3f3f3;">
<p style="font-size: 16px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-transform: uppercase; text-align: left; margin: 10px;">Detalles de su cuenta en Limalocal.</p>
<p style="font-size: 13px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Datos de acceso:</p>
<p style="font-size: 13px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Usuario: ' . $email . '</p>
<p style="font-size: 13px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Contraseña: ******* </p>
</td>
</tr>
<tr>
<td style="font-size:8px; color:#FFF; font-family: Open-sans, sans-serif; text-decoration:none; line-height:5px; text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #ffffff;">
<ul>
<li style="font-size: 12px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">CONSEJOS DE SEGURIDAD:</li>
<li style="font-size: 12px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Mantenga los datos de su cuenta en un lugar seguro.</li>
<li style="font-size: 12px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">No comparta los detalles de su cuenta con otras personas.</li>
<li style="font-size: 12px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Cambie su clave regularmente.</li>
<li style="font-size: 12px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px;">Si sospecha que alguien está usando ilegalmente su cuenta, avísenos inmediatamente.</li>
</ul>	
</td>
</tr>
<tr bgcolor="#132d77">
<td style="font-size:8px; color:#68214f; font-family: Open-sans, sans-serif; text-decoration:none; line-height:5px; text-align: center; ">-</td>
</tr>
<tr>
<td>
<p style="font-size: 14px; color: #555454; font-family: Open-sans, sans-serif; text-decoration: none; text-align: left; margin: 10px; text-align: center;">Ingresa ahora a tu cuenta: <a href="https://www.limalocal.com/mitienda.php">Limalocal</a></p>
</td>
<tr bgcolor="#132d77">
<td style="font-size:8px; color:#68214f; font-family: Open-sans, sans-serif; text-decoration:none; line-height:5px; text-align: center; ">-</td>
</tr>	
</tr>
</table>
</body>
</html>';

    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //dirección del remitente 
    $headers .= "From: Registro Limalocal <noreply@limalocal.com>\r\n";

    //dirección de respuesta, si queremos que sea distinta que la del remitente 
    $headers .= "Reply-To: noreply@limalocal.com\r\n";

    //ruta del mensaje desde origen a destino 
    $headers .= "Return-path: noreply@limalocal.com\r\n";

    //direcciones que recibián copia 
    //    $headers .= "Cc: " . $email . "\r\n";

    //direcciones que recibirán copia oculta 
    //$headers .= "Bcc: rbreva@gmail.com\r\n"; 

    mail($destinatario, $asunto_tienda, $cuerpo, $headers);
    mail($email, $asunto, $cuerpo, $headers);
}

/*-----------*/
function tiendas()
{
    echo "tiendas";
}

function recibos()
{
    echo "recibos";
}

function asesoria()
{
    echo "asesoria";
}

?>
