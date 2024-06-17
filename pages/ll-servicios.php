<?php

$acc = "";

if (isset($_GET['acc'])) {
    $acc = $_GET['acc'];
}

if (!$acc) {
    alquila();
} else {
    if ($acc == "alquila") {
        alquila();
    } elseif ($acc == "compra") {
        compra();
        caracteristicas();
    } elseif ($acc == "campana") {
        campana();
    } elseif ($acc == "fotografia") {
        fotografia();
    } elseif ($acc == "diseno") {
        diseno();
    }
}

function alquila()
{
    ?>
    <div class="presentacion_serv">
        <div class="titulo_serv">Alquila una tienda virtual</div>
        <div class="parrafo_serv">
            <p>Automatiza tus ventas por internet con una tienda virtual.</p>
            <p>Nuestra plataforma te permitirá ordenar tus ventas, optimizar tu inversión publicitaria y facilitar el proceso de compra a tus clientes. </p>
            <p>Queremos ayudarte a vender, por eso te acompañamos durante todo el proceso de implementación de tu tienda virtual. </p>
        </div>
    </div>
    <div class="caracteristicas_serv">
        <div class="car_serv">
            <div class="img_serv_car"><img src="images/svg/iconos/pasarella.svg"></div>
            <div class="tit_serv_car">Pasarella de pago</div>
            <div class="parr_serv_car">
                <p>Recibe pagos con tarjetas de crédito, débito y otros sistemas de pago.</p>
                <p>Implementamos la pasarela de pago que tu negocio necesita.</p>
            </div>
        </div>
        <div class="car_serv">
            <div class="img_serv_car"><img src="images/svg/iconos/administrador.svg"></div>
            <div class="tit_serv_car">Administrador de contenidos</div>
            <div class="parr_serv_car">
                <p>Podrás agregar, suspender o eliminar: contenido, banners, productos y fotografías.</p>
            </div>
        </div>
        <div class="car_serv">
            <div class="img_serv_car"><img src="images/svg/iconos/soporte.svg"></div>
            <div class="tit_serv_car">Soporte técnico</div>
            <div class="parr_serv_car">
                <p>Ninguna de nuestras tiendas virtuales queda obsoleta. Actualizamos la programación y la vinculamos con redes sociales y buscadores de manera constante.</p>
            </div>
        </div>
    </div>
    <div class="planes_serv">
        <div class="titulo_planes">Nuestros planes de alquiler</div>
        <div class="plan">
            <div class="marco_plan linea_naranja">
                <div class="titulo_plan back_naranja">Tienda Emprende</div>
                <div class="lista_plan">
                    <ul>
                        <li class="li_naranja">Dominio (.com)</li>
                        <li class="li_naranja">Hosting</li>
                        <li class="li_naranja">Sello de seguridad SSL</li>
                        <li class="li_naranja">Diseño responsive</li>
                        <li class="li_naranja">Administrador de contenidos</li>
                        <li class="li_naranja">Pasarella de pago (Izipay)</li>
                        <li class="li_naranja">Google Analytics</li>
                        <li class="li_naranja">Facebook Pixel</li>
                        <li class="li_naranja">Productos Ilimitados</li>
                        <li class="li_naranja">Cupones de descuento</li>
                        <li class="li_naranja">Cambios personalizados (no incluye)</li>
                        <li class="li_naranja"><strong>Sin comisión por ventas</strong></li>
                    </ul>
                </div>
                <div class="precio_plan lt_naranja">
                    <div class="preciop"><span class="arreglo">S/.</span>87</div>
                    <div class="mensp">mensuales</div>
                    <div class="mensp">(pago trimestral de S/.261.00)</div>
                </div>
                <div class="lista_plan">
                    <ul>
                        <li class="li_naranja centrado">* costo regular mensual: S/.99.00</li>
                        <li>&nbsp;</li>

                    </ul>
                </div>
            </div>
            <div class="suscribirsep"><a href="contacto.php">Contactarse</a></div>
        </div>
        <div class="plan">
            <div class="marco_plan linea_rojo">
                <div class="titulo_plan back_rojo">Tienda Empresa</div>
                <div class="lista_plan">
                    <ul>
                        <li class="li_rojo">Dominio (.com)</li>
                        <li class="li_rojo">Hosting</li>
                        <li class="li_rojo">Sello de seguridad SSL</li>
                        <li class="li_rojo">Diseño responsive</li>
                        <li class="li_rojo">Administrador de contenidos</li>
                        <li class="li_rojo">Pasarella de pago (Izipay)</li>
                        <li class="li_rojo">Google Analytics</li>
                        <li class="li_rojo">Facebook Pixel (Catálogo Automático)</li>
                        <li class="li_rojo">Productos Ilimitados</li>
                        <li class="li_rojo">Cupones de descuento</li>
                        <li class="li_rojo"><strong>Cambios personalizados</strong></li>
                        <li class="li_rojo"><strong>Sin comisión por ventas</strong></li>
                    </ul>
                </div>
                <div class="precio_plan lt_roja">
                    <div class="preciop"><span class="arreglo">S/.</span>162</div>
                    <div class="mensp">mensuales</div>
                    <div class="mensp">(pago trimestral de S/.486.00)</div>
                </div>
                <div class="lista_plan">
                    <ul>
                        <li class="li_rojo centrado">* costo regular mensual: S/.189.00</li>
                        <li>&nbsp;</li>

                    </ul>
                </div>
            </div>
            <div class="suscribirsep"><a href="contacto.php">Contactarse</a></div>
        </div>
    </div>
    <?php
}

function caracteristicas()
{
    ?>
    <div class="caracteristicas">
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/tienda_virtual.svg"></div>
            <div class="titulo celeste bold">Tienda virtual personalizada</div>
            <div class="contenido">Diseño y funcionalidad personalizada. Nos adaptamos a tu modelo de negocio y desarrollamos funciones especificas para facilitar tu proceso de venta.</div>
            <div class="link verde"><a href="blog.php">¿Qué es una tienda personalizada?</a></div>
        </div>
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/responsive.svg"></div>
            <div class="titulo celeste bold">Pasarella de pago</div>
            <div class="contenido">Recibe pagos con tarjetas de crédito, débito y otros sistemas de pago. Implementamos las pasarellas de pago que tu negocio necesite.</div>
        </div>
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/administrable.svg"></div>
            <div class="titulo celeste bold">Administrador de contenidos</div>
            <div class="contenido">Podrás agregar, suspender o eliminar: contenido, banners, productos, fotografías; ver las estadísticas internas y organizar tus visitas, ventas y entregas. </div>
        </div>
    </div>

    <div class="paquetes">
        <div class="datos">
            <div class="texto">
                <div class="verde bold">Todas las tiendas virtuales incluyen:</div>
                <ul>
                    <li>Dominio <span class="verde">(.com, .shop, .store)</span>, hosting y sello de seguridad SSL por el primer año.</li>
                    <li>Diseño personalizado y adaptable.</li>
                    <li>Administrador de contenidos adaptado a todos los dispositivos. </li>
                    <li>Pasarella de pago.
                    <li>Soporte técnico.</li>
                </ul>
            </div>
        </div>
        <div class="paquete">
            <div class="titulo bverde">Paquete Básico</div>
            <div class="contenido">
                <ul>
                    <li>Funcionalidades <span class="verde">básicas</span> creadas para tu modelo de negocio.</li>
                    <li>Configuración <span class="verde">básica</span> de la pasarella de pago.</li>
                    <li>Hasta 2 tipos de usuarios: clientes registrados e invitados.</li>
                    <li>Nuevas funcionalidades básicas sin costo adicional durante el primer año.</li>
                </ul>
            </div>
            <div class="precio verde bold">S/. 4200 <p class="detalle">(en 3 pagos, Costo Único)</p>
            </div>
        </div>
        <div class="paquete">
            <div class="titulo bceleste">Paquete Avanzado</div>
            <div class="contenido">
                <ul>
                    <li>Funcionalidades <span class="celeste">avanzadas</span> creadas específicamente para tu modelo de negocio. </li>
                    <li>Diversos tipos de usuarios. Permite determinar funciones según el tipo de usuario.</li>
                    <li>Configuración de la pasarella de pago con formas de pago diferenciadas de ser necesario y según el tipo de usuario. </li>
                    <li>Integración de aplicativos de envíos, facturación electrónica y/o manejo de stock.</li>
                    <li>Nuevas funcionalidades sin costo adicional durante el primer año.</li>

                </ul>
            </div>
            <div class="precio celeste bold">S/. 6200 <p class="detalle">(en 3 pagos)</p>
            </div>
        </div>
        <div class="paquete">
            <div class="titulo bazul">Market Place</div>
            <div class="contenido">
                <ul>
                    <li>Market Place personalizada a tu modelo de negocio y con funcionalidades específicas según el sector del mercado al que te dirijas.</li>
                    <li>Panel de administración de contenidos por cada empresa asociada a tu Market Place. </li>
                    <li>Tipos de usuario según tu modelo de negocio: empresas asociadas, tipos de cliente final, invitados, etc.</li>
                    <li>Pasarella de pago configurada para Market Place. </li>
                    <li>Panel de usuario registrado y funcionalidades específicas para promociones. </li>
                </ul>
            </div>
            <div class="precio azul bold">Costo Variable</div>
        </div>
    </div>

    <div class="caracteristicas">
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/ahorro.svg"></div>
            <div class="titulo celeste bold">Facilidades de pago</div>
            <div class="contenido">El costo de desarrollo de una tienda virtual es una inversión única (No es un alquiler de sofware) Sin embargo, usted podrá cancelar el monto total en cuotas a 3, 6 y 12 meses. </div>
            <!--<div class="link verde"><a href="facilidades.php">Ver nuestros planes</a></div>-->
        </div>
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/seguridad.svg"></div>
            <div class="titulo celeste bold">Soporte técnico</div>
            <div class="contenido">Ninguna de nuestras páginas web o tiendas virtuales queda obsoleta. Actualizamos la programación y el diseño de manera constante.</div>
        </div>
        <div class="caracteristica">
            <div class="imagen"><img src="images/svg/redes.svg"></div>
            <div class="titulo celeste bold">Marketing digital</div>
            <div class="contenido">No pierdas más clientes, ¡automatiza tus ventas! Te asesoramos para optimizar tus campañas de marketing digital y las vinculamos con tu tienda virtual. </div>
            <!--<div class="link verde"><a href="vender.php">¿Cómo vender por internet?</a></div>-->
        </div>
    </div>
    <?php
}

function compra()
{
    $accion = "";
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
    }
    ?>
    <div class="bloque_banner">
        <div class="banners">
            <div class="galeria">
                <div><img src="images/banners/banner-limalocal-2019_4.jpg"></div>
            </div>
            <script type="text/javascript" src="js/slick/slick.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.galeria').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 3000,
                        dots: true,
                        infinite: true,
                        speed: 500,
                        responsive: true,
                        arrows: false
                    });
                });
            </script>
        </div>

        <div class="formulario">
            <div class="texto">
                <div class="azul">Vende por internet con</div>
                <div class="celeste">TU PROPIA TIENDA VIRTUAL</div>
            </div>
    <?php
    if (!$accion) {
        formulario();
    } elseif ($accion == "enviar") {
        enviar_mensaje();
    }
    ?>
        </div>
    </div>
    <?php

}

function campana()
{
    echo "campana";
}

function fotografia()
{
    echo "fotografia";
}

function diseno()
{
    echo "diseno";
}

?>
