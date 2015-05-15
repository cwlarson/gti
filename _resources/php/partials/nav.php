<?php

$navItem = function($URI, $label){
	$isActive = ($_SERVER['REQUEST_URI'] == $URI ? 'active' : '');

	return <<<NAV_ITEM
		<li class='$isActive'>
			<a href='$URI'>$label</a>
		</li>
NAV_ITEM;
};

$isActiveNavItem = function($URI){
	return (explode('/',$URI)[1] == explode('/',$_SERVER['REQUEST_URI'])[1] ? 'active' : '');
};

$GLOBAL_NAV = <<<NAVBAR
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Guerra Technologies</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown {$isActiveNavItem('/about/')}">
						<a href="/about/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
								{$navItem('/about/company/', 'Company Expertise')}
								{$navItem('/about/projects/', 'Project Highlights')}
								{$navItem('/about/management-team/', 'Managament Team')}
								{$navItem('/about/news/', 'News')}
								{$navItem('/about/testimonials/', 'Testimonials')}
						</ul>
					</li>
					<li class="dropdown {$isActiveNavItem('/products/')} {$isActiveNavItem('/services/')}">
						<a href="/products/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products &amp; Services <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">PRODUCTS</li>
								{$navItem('/products/single-stage-lna/', 'Single Stage LNA')}
								{$navItem('/products/low-noise-amplifier/', 'Low Noise Amplifier')}
								{$navItem('/products/stop-band-filter/', 'Stop-Band Filter')}
							<li class="divider"></li>
							<li class="dropdown-header">SERVICES</li>
								{$navItem('/services/consulting/', 'Consulting Services')}
								{$navItem('/services/rf-engineering/', 'RF/Elec. Engineering')}
								{$navItem('/services/full-custom-rf-asic/', 'Full Custom RF ASIC')}
						</ul>
					</li>
					<li class="{$isActiveNavItem('/contact/')}"><a href="/contact/">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
NAVBAR;

?>