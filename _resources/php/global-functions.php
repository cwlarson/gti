<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'/_resources' );
	require 'php/global-variables.php';
	require 'php/partials/head.php';
	require 'php/partials/nav.php';
	require 'php/partials/subnav.php';
	require 'php/partials/footer.php';
	require 'php/partials/scripts.php';
?>