<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">
  <link href="/favicon.ico" rel="SHORTCUT ICON" type="image/ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->          
	<?php
		echo $this->Html->css(array('/plugins/font-awesome/css/font-awesome.min','/plugins/bootstrap/css/bootstrap'));
	?>
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
	<?php
		echo $this->Html->css(array('/plugins/fancybox/source/jquery.fancybox','/plugins/bxslider/jquery.bxslider','/plugins/layerslider/css/layerslider'));
	?>
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
	<?php
		echo $this->Html->css(array('style-metronic','style','style-responsive','custom'));
	?>
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body>
	<?php
		echo $this->element('preheader');
		echo $this->element('header');
	?>

	<?php
//		echo $this->element('sponsers');
		echo $this->element('prefooter');
		echo $this->element('footer');
	?>
</body>
<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>  
<?php
	echo $this->Html->script('/plugins/respond.min');
?>
<![endif]-->  
<?php
	echo $this->Html->script(array('/plugins/jquery-1.10.2.min','/plugins/jquery-migrate-1.2.1.min','/plugins/bootstrap/js/bootstrap.min','/plugins/back-to-top','/plugins/jQuery-slimScroll/jquery.slimscroll.min'));
?>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<?php
	echo $this->Html->script(array(
		'/plugins/fancybox/source/jquery.fancybox.pack', //pop up
		'/plugins/bxslider/jquery.bxslider.min', //slider for products
		'/plugins/zoom/jquery.zoom.min', //product zoom
		'/plugins/bootstrap-touchspin/bootstrap.touchspin' //Quantity
	));
?>

<!-- BEGIN LayerSlider -->
<?php
	echo $this->Html->script(array(
		'/plugins/layerslider/jQuery/jquery-easing-1.3','/plugins/layerslider/jQuery/jquery-transit-modified','/plugins/layerslider/js/layerslider.transitions','/plugins/layerslider/js/layerslider.kreaturamedia.jquery'
	));
?>
<!-- END LayerSlider -->

<?php
	echo $this->Html->script(array('app','index'));
?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		App.init();    
		App.initBxSlider();
		Index.initLayerSlider();
		App.initImageZoom();
		App.initTouchspin();
	});
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->

<!-- END BODY -->
</html>