<?php
// force UTF-8 Ø

if (!defined('WEBPATH'))
	die();
if (function_exists('printRegistrationForm')) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<?php zp_apply_filter('theme_head'); ?>
			<?php printHeadTitle(); ?>
			<meta charset="<?php echo LOCAL_CHARSET; ?>">
			<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
			<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
		</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>

			<div id="main">

				<div id="header">

					<h1><?php printGalleryTitle(); ?></h1>
				</div>

				<div id="content">

					<div id="breadcrumb">
						<h2><a href="<?php echo getGalleryIndexURL(); ?>"><strong><?php echo gettext("Index"); ?></strong></a>
						</h2>
					</div>

					<div id="content-left">
						<h1><?php echo gettext('User Registration') ?></h1>
						<?php printRegistrationForm(); ?>
					</div><!-- content left-->


					<div id="sidebar">
						<?php include("sidebar.php"); ?>
					</div><!-- sidebar -->



					<div id="footer">
						<?php include("footer.php"); ?>
					</div>

				</div><!-- content -->

			</div><!-- main -->
			<?php
			zp_apply_filter('theme_body_close');
			?>
		</body>
	</html>
	<?php
} else {
	include(dirname(__FILE__) . '/404.php');
}
?>