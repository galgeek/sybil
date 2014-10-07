<?php
$base_href = 'http://www.sybilshanestudio.com/';
$page_title = 'Sybil Shane Studio &#8212; Oops!';
error_reporting (0);
include 'includes/head.inc.html';
?>

<body>
	<div id="pageframe">
		<div class="menubar">
		<a href="about.php" onmouseout="MIout('aboutus')" onmouseover="MIover('aboutus')">
	<img id="aboutus" src="images/inside/nav_aboutus.gif" alt="About Us" width="62" height="22"  /></a>
		<a href="gallery.php" onmouseout="MIout('gallery')" onmouseover="MIover('gallery')">
	<img id="gallery" src="images/inside/nav_gallery.gif" alt="Gallery" width="49" height="22" /></a>
		<a href="products.php" onmouseout="MIout('products')" onmouseover="MIover('products')">
	<img id="products" src="images/inside/nav_products.gif" alt="Products" width="64" height="22"  /></a>
<a href="wholesale.php" onmouseout="MIout('wholesale')" onmouseover="MIover('wholesale')">
<img id="wholesale" src="images/inside/nav_wholesale.gif" alt="Wholesale Info" width="97" height="22"  /></a>
		<a href="contact.php" onmouseout="MIout('contactus')" onmouseover="MIover('contactus')">
	<img id="contactus" src="images/inside/nav_contactus.gif" alt="Contact Us" width="73" height="22"  /></a>
	<a href="store/" onmouseout="MIout('store')" onmouseover="MIover('store')">
	<img id="store" src="images/inside/nav_store.gif" alt="Our Store" width="35" height="22" /></a>
		<a href="index.html" onmouseout="MIout('home')" onmouseover="MIover('home')">
	<img id="home" src="images/inside/nav_home.gif" alt="Home" width="43" height="22"  /></a>
		</div>
		<div id="bodybox">
       
			<div id="imagebox">
				<img src="images/main_tol_serenity.jpg" alt="Serenity"  />
			</div>
			<div id="contentbox">

<?php 
switch(getenv("REDIRECT_STATUS"))
{
# "400 Bad Request" 
case 400: 
$error = "400 - Bad server request"; 
break;

# "401 Authorization Required" 
case 401: 
$error = "401 - Authorization required";
$explain = "This section requires a password or is otherwise protected.";
break;

# "403 Forbidden" 
case 403: 
$error = "403 - Forbidden access" ;
$explain = "This section requires a password or is otherwise protected.";
break;

# "404 Not Found" 
case 404:
$error = "404 - Not Found";
$explain = "This file can't be found.";
break;

# "500 Internal Server Error" 
case 500: 
$error = "500 - Internal server error";
$explain = "Please verify the address and try again.";
break;
}

$other = 'Use the links in the menu bar to explore our site. <br>
Our home page is <a href="http://www.sybilshanestudio.com/">www.sybilshanestudio.com</a>.';

echo "<H1>Oops! An error has occurred!</H1><P>The server says: $error</P><P>$explain</P><P>$other</P>";
?>

			</div>
			<br clear="all" />
		</div>
<?php    
include 'includes/logo.inc.html';
?>
</div>

	<p align="center" class="footer">
<?php    
include 'includes/foot.inc.html';
?>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>