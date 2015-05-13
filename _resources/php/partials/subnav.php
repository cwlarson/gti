<?php

$subnavItem = function($URI, $label){
	$isActive = ($_SERVER['REQUEST_URI'] == $URI ? 'active' : '');
	$isHidden = (explode('/', $URI)[1] == explode('/', $_SERVER['REQUEST_URI'])[1] ? '' : 'hidden');

	return <<<SUBNAV_ITEM
		<li class='$isActive $isHidden'>
			<a href='$URI'>$label</a>
		</li>
SUBNAV_ITEM;
};

$GLOBAL_SUBNAV = <<<SUBNAV
<div class="navbar subnav navbar-default navbar-static-top hidden-xs">
	<div class="container">
		<ul class="nav navbar-nav">
			{$subnavItem('/about/company/', 'Company Expertise')}
			{$subnavItem('/about/projects/', 'Project Highlights')}
			{$subnavItem('/about/management-team/', 'Managament Team')}
			{$subnavItem('/about/news/', 'News')}
			{$subnavItem('/about/testimonials/', 'Testimonials')}

			{$subnavItem('/products/single-stage-lna/', 'Single Stage LNA')}
			{$subnavItem('/products/low-noise-amplifier/', 'Low Noise Amplifiers')}
			{$subnavItem('/products/stop-band-filter/', 'Stop Band Filter')}

			{$subnavItem('/services/consulting/', 'Consulting Services')}
			{$subnavItem('/services/rf-engineering/', 'RF/Electrical Engineering')}
			{$subnavItem('/services/full-custom-rf-asic/', 'Full Custom RF ASIC')}				
		</ul>
	</div>
</div>
SUBNAV;
?>