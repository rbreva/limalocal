<?php

compra_contacto();

function compra_contacto()
{
    $accion = "";
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
    }
    ?>
    <div class="bloque_banner">
        <div class="banners">
            <div class="galeria">
                <div><img src="images/banners/banner-limalocal-2019_5.jpg"></div>
                <div><img src="images/banners/banner-limalocal-2019_6.jpg"></div>
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
