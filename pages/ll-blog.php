<?php

?>
<div class="articulo">
    <div class="titulo_gen">3 tipos de empresas de desarrollo de tiendas virtuales. ¿Cuál me conviene?</div>
</div>

<div class="youtube">
    <iframe width="350" height="197" src="https://www.youtube.com/embed/lxZuA-gKgHo?rel=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="solo_texto">
    <p>Actualmente las empresas que ofrecen tiendas virtuales tienen precios que varían de forma significativa. Tenemos empresas que ofrecen el servicio por un costo mensual muy bajo y otras que te proponen costos muy elevados. </p>
    <p>En este artículo te vamos a contar cuales son los costos de una tienda virtual y por qué la oferta es tan variada.</p>
    <div class="titulo">Podemos dividir la oferta en tres tipos de servicio:</div>
    <p class="bold celeste">1. Herramientas de e-commerce. (Hazlo tu mismo)</p>
    <p class="int">Son empresas que alquilan su software y plantillas de diseño por un costo mensual muy bajo.</p>
    <p class="tit"><strong>Diseño:</strong> Te permiten diseñar la tienda virtual a partir de plantillas de diseño. Es decir, modelos prediseñados que se pueden adaptar a tu imagen de marca. Estos diseños sirven muy bien para tiendas pequeñas con pocos productos, pero tendrán problemas cuando los productos aumenten o si el modelo de negocio requiere funcionalidades particulares.</p>
    <p class="tit"><strong>Funcionalidad:</strong> El diseño de una página web está directamente relacionado a sus funcionalidades. Por ejemplo, si tú producto principal son pasteles para eventos podrías requerir que tus clientes solo paguen el 50% como adelanto o que, durante el proceso de compra, el sistema les ofrezca productos complementarios como velas de cumpleaños o paquetes de bocaditos relacionados con su evento. Es probable que no encuentres plantillas prediseñadas con funcionalidades tan específicas.</p>
    <p class="tit"><strong>Costo:</strong> La principal ventaja de estas herramientas es que inviertes poco dinero y puedes probar si tus productos funcionan en el mercado digital por un tiempo corto. Sin embargo, no son recomendables a largo plazo ya que <strong>el costo mensual superaría el costo de desarrollar una tienda virtual propia.</strong></p>
    <p class="tit"><strong>PRO:</strong> A corto plazo podrías probar tus productos en el mercado invirtiendo poco dinero.</p>
    <p class="tit"><strong>CONTRA:</strong> A largo plazo el costo mensual superaría el costo de desarrollar tu propia tienda y si tu negocio crece tendrás que migrar a otro sistema y será como empezar desde cero.</p>
    <br>
    <p class="bold celeste">2. Content Management System. CMS (Hazlo tú mismo + Desarrollador) </p>
    <p class="int">Desarrollan una tienda virtual adaptando plantillas de diseño y librerías de aplicativos como Wordpress, Joomla.</p>
    <p class="tit"><strong>Diseño:</strong> El uso de plantillas de diseño reduce el costo de la tienda virtual, pero tendrás que adaptarte y dejar de lado algunas funcionalidades personalizadas.</p>
    <p class="tit"><strong>Funcionalidad:</strong> Los aplicativos prediseñados o de librerías pueden ser difíciles de modificar y presentar problemas en el funcionamiento global de la tienda. Además, para realizar modificaciones tendrás que contratar a una empresa o a un programador de confianza que sepa realizar las modificaciones sin perder otras funcionalidades. </p>
    <p class="tit"><strong>Costo:</strong> Por lo general tienen un costo único de desarrollo Web básico. Algunos incluyen el pago de los servicios de hosting, dominio y sello de seguridad que se renueva anualmente y otros te asesoran para que contrates ese servicio aparte. Luego de entregada la página termina su relación con el cliente y no brindan soporte técnico. </p>
    <p class="tit"><strong>PRO:</strong> Tienen una cantidad de plantillas y aplicativos mucho más extensa que las herramientas de e-commerce.</p>
    <p class="tit"><strong>CONTRA:</strong> Tu tienda virtual podría ser más lenta pues estas librerías de aplicativos te obligarán a subir todo su sistema. Por otro lado, debes asegurarte de mantener tu página actualizada constantemente para que se indexe correctamente en buscadores. </p>
    <br>
    <p class="bold celeste">3. Desarrollo personalizado. </p>
    <p class="int">Son empresas que han desarrollado un software propio que se pueden adaptar a las necesidades de sus clientes. No importa cuál sea tu modelo de negocio se puede digitalizar si inviertes en una tienda personalizada. </p>
    <p class="tit"><strong>Diseño:</strong> Utilizan un software propio por lo cual pueden crear diseños sin las limitarse a una plantilla. </p>
    <p class="tit"><strong>Funcionalidad:</strong> Tienen muchas funcionalidades prediseñadas que pueden modificar y adaptar fácilmente o crean nuevas según las necesidades de sus clientes.</p>
    <p class="tit">También pueden integrar los aplicativos de stock, facturación electrónica o envíos que ya estés utilizando en tu negocio. </p>
    <p class="tit"><strong>Costo:</strong> Algunas empresas presupuestan tu proyecto y algunas tienen paquetes básicos con costos únicos de desarrollo Web. Otro costo que tenemos que considerar es la renovación anual del servicio de dominio, hosting y sello de seguridad. </p>
    <p class="tit"><strong>PRO:</strong> Puedes adaptar al máximo tu negocio al entorno digital.</p>
    <p class="tit"><strong>CONTRA:</strong> Te recomendamos consolidar tu modelo de negocio antes de invertir en una tienda virtual personalizada. </p>
    <br>
    <p class="tit"><strong>En resumen:</strong> Algunas empresas presupuestan tu proyecto y algunas tienen paquetes básicos con costos únicos de desarrollo Web. Otro costo que tenemos que considerar es la renovación anual del servicio de dominio, hosting y sello de seguridad. </p>
</div>
<br>

<?php
form_blog();

function form_blog()
{
    $accion = "";
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
    }
    ?>
    <div class="bloque_banner">
        <div class="banners">
            <div class="galeria">
                <div><img src="images/banners/tiendas_vituales-min.jpg"></div>
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
