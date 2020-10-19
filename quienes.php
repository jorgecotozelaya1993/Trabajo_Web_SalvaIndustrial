<!DOCTYPE html>
<html>
<head>
<?php include("paginas/head.php"); ?>
</head>
<body>
<div class="page-wrapper">
   
    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top -->
    	<div class="header-top">
        	<?php include("paginas/header_top.php"); ?>
        </div><!-- Header Top End -->
    	<!--Header-Upper-->
        <div class="header-upper">
            <?php include("paginas/headerhorariodireccion.php"); ?>
        </div>
        <!--Header-Lower-->
        <div class="header-lower">
            <?php include("paginas/menuheader_lower.php"); ?>
        </div>
        <!--Sticky Header-->
        <div class="sticky-header">
        	<?php include("paginas/Sticky_Header.php"); ?>
        </div><!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/quienesomos1.PNG);">
        <div class="auto-container">     

        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <?php include("paginas/page_info1.php"); ?>
    </section>



 <!--About Section / Light Version-->
    <section class="about-section light-version">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <!--Who We Are-->
                    <div class="who-we-are">
                        <h2>Sobre Nosotros</h2>
                        
                        <ul class="info-list">
                                                      
                            <li>
                                <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="1500ms"><span class="flaticon-stick-man"></span></div>
                                <h3>Nuestros Valores</h3>
                                <div class="text">
                                <b>1- EFICIENCIA:</b> Desarrollamos procesos prácticos que nos permiten dar soluciones eficientes y oportunas; optimizando al máximo los recursos sin sacrificar la calidad.<br>
                                <b>2- SEGURIDAD:</b> Representando el elemento humano un recurso invaluable para nuestra empresa; cada proceso como equipo de trabajo, está diseñado pensando en la seguridad tanto de nuestros empleados como de nuestros usuarios.<br>
                                <b>3- OPERACION:</b> Reconocemos que lo único que nos mantiene a la vanguardia es el entrenamiento continuo y a la tecnología de punta. Sin embargo estamos abiertos a escuchar sugerencias de nuestros clientes y amigos.<br>
                                <b>4- HONRADEZ:</b> En cada una de nuestras  negociaciones va implícito el sello de honestidad y transparencia ante cualquier situación.</div>
                            </li>
                            
                            <li>
                                <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="1500ms"><span class="flaticon-quality"></span></div>
                                <h3>Politica De Calidad</h3>
                                <div class="text">
                                Brindar soluciones en instalaciones metal - mecánica a nivel nacional, ofreciendo costos atractivos sin sacrificar calidad, a través de la experiencia, profesionalismo, competitividad y una excelente actitud de servicio. Satisfaciendo así a nuestros clientes y proveedores.

                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
                
                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <!--Mission and Vision-->
                    <div class="mission-vision">
                        <h2>MISIÓN Y VISIÓN</h2>
                        
                        <!--Block-->
                        <div class="block">
                            <div class="inner-box">
                                <figure class="image"><img src="images/resource/mision.PNG" alt=""></figure>
                                <h4>NUESTRA MISIÓN</h4>
                                <div class="text">
                                Satisfacer las necesidades de nuestros clientes y superar sus expectativas a través de nuestros productos y servicios respaldados con los más altos estándares de calidad.</div>
                            </div>
                        </div>
                        <br><br>
                        <!--Block-->
                        <div class="block">
                            <div class="inner-box">
                                <figure class="image"><img src="images/resource/vision.PNG" alt=""></figure>
                                <h4>NUESTRA VISIÓN</h4>
                                <div class="text">
                                Consolidar nuestra empresa como la primera opción a nivel nacional en el rubro de metal mecánica; y de esta forma, contribuir en el desarrollo de nuestros clientes.</div>
                            </div>
                        </div>                          
                    </div>
                </div>
            </div>         
        </div>
    </section>
    <?php include("paginas/quienes1.php"); ?>
       
    <!--Main Footer-->
    <footer class="main-footer">
    <?php include("paginas/footer.php"); ?>
    </footer>    
</div>
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>