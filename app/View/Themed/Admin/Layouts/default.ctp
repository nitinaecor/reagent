<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Metronic | Page Layouts - Blank Page</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<?php
		echo $this->Html->css(array('/plugins/font-awesome/css/font-awesome.min','/plugins/bootstrap/css/bootstrap.min','/plugins/uniform/css/uniform.default.css'));
	?>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	<?php
		echo $this->Html->css(array('style-metronic','style','style-responsive','plugins','style-responsive','/css/themes/default','custom'));
	?>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<?php
		echo $this->element('header');
	?>
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<?php
			echo $this->element('sidebar');
		?>
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<?php
		echo $this->element('footer');
	?>
</body>
<!-- END BODY -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<?php
	echo $this->Html->script(array('/plugins/respond.min','/plugins/excanvas.min'));
?>
<![endif]-->

<?php
	echo $this->Html->script(array('/plugins/jquery-1.10.2.min','/plugins/jquery-migrate-1.2.1.min','/plugins/jquery-ui/jquery-ui-1.10.3.custom.min','/plugins/bootstrap/js/bootstrap.min','/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min','/plugins/jquery-slimscroll/jquery.slimscroll.min','/plugins/jquery.blockui.min','/plugins/jquery.cokie.min','/plugins/uniform/jquery.uniform.min','/scripts/core/app'));
?>
<script>
      jQuery(document).ready(function() {    
         App.init();
      });
   </script>
<!-- END JAVASCRIPTS -->
</html>