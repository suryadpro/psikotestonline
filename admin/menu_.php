<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Admin Psikotest Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Beginning of compulsory code below -->

<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/dropdown.vertical.rtl.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/default/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!-- / END -->

</head>
<body>

<p><a href="http://www.lwis.net/free-css-drop-down-menu/" class="main-site">Welcome</a></p>

<h1>Admin Psikotest Online Persada</h1>

<!-- Beginning of compulsory code below -->

<ul id="nav" class="dropdown dropdown-horizontal">
	<li><a href="./">Home</a></li>
	<li><span class="dir">Kebutuhan</span>
		<ul>
			<li><a href="menu.php?data=kebutuhan">Input Baru</a></li>
			<li><a href="menu.php?data=table_kebutuhan">Rekap Data</a></li>
		</ul>
	</li>
	<li><span class="dir">Services</span>
		<ul>
			<li><a href="./">Product Development</a></li>
			<li><a href="./">Delivery</a></li>
			<li><a href="./">Shop Online</a></li>
			<li><a href="./">Support</a></li>
			<li><a href="./">Training &amp; Consulting</a></li>
		</ul>
	</li>
	<li><span class="dir">Products</span>
		<ul>
			<li><a href="./" class="dir">New</a>
				<ul>
					<li><a href="./">Corporate Use</a></li>
					<li><a href="./">Private Use</a></li>
				</ul>
			</li>
			<li><a href="./" class="dir">Used</a>
				<ul>
					<li><a href="./">Corporate Use</a></li>
					<li><a href="./">Private Use</a></li>
				</ul>
			</li>
			<li><a href="./">Featured</a></li>
			<li><a href="./">Top Rated</a></li>
			<li><a href="./">Prices</a></li>
		</ul>
	</li>
	<li><a href="./">Gallery</a></li>
	<li><a href="./">Events</a></li>
	<li><a href="./">Careers</a></li>
	<li class="dropdown-vertical-rtl"><a href="./" class="dir">Contact Us</a>
		<ul>
			<li><a href="./">Enquiry Form</a></li>
			<li><a href="./" class="dir">Map &amp; Driving Directions</a>
				<ul>
					<li><a href="./">Map</a></li>
					<li><a href="./">Driving Directions</a></li>
				</ul>
			</li>
			<li><a href="./" class="dir">Your Feedback</a>
				<ul>
					<li><a href="./">Rate our Company</a></li>
					<li><a href="./">Write Review</a></li>
				</ul>
			</li>
		</ul>
	</li>
</ul>
<br>
<br>
<!-- / END -->
<?php if($_GET[data] != "") { include ($_GET['data'].".php"); }?>
</body>
</html>