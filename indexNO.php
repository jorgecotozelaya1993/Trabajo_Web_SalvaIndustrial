<!DOCTYPE html>
<html>
<head>
<?php include("paginas/headindex.php"); ?>
</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
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

    <?php include("paginas/slider.php"); ?>
    <?php include("paginas/quienes1.php"); ?>
    <?php include("paginas/misionandvisionindex.php"); ?>
    <br> 
    <!--Main Footer-->
    <footer class="main-footer">
    <?php include("paginas/footer.php"); ?>
    </footer>    
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>