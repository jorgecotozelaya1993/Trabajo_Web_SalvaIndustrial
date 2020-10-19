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
    <section class="page-title" style="background-image:url(images/background/servicios.PNG);">
        <div class="auto-container">     

        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <?php include("paginas/page_info4.php"); ?>
    </section>

<?php include("paginas/servicios.php");?>
       
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