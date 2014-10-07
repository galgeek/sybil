<?php
include 'includes/config.inc.php';
$page_title = 'Sybil Shane Studio &#8212 ';
if (isset($_GET['product']))
	$product = '';
	switch ($_GET['product']):
	case 'card':
	case 'gift':
	case 'small':
	case 'large':
	case 'tee':
	case 'tote':
//	case 'tile':
		$product = $_GET['product'] ;
	endswitch;
if ($product != '') {
	switch ($product):
	case 'card':
		$page_title = $page_title . 'Greeting Cards';
		break;
	case 'gift':
		$page_title = $page_title . 'Gift Prints';
		break;
	case 'small':
		$page_title = $page_title . 'Small Framed Prints';
		break;
	case 'large':
		$page_title = $page_title . 'Large Framed Prints';
		break;
	case 'tee':
		$page_title = $page_title . 'Tees';
		break;
	case 'tote':
		$page_title = $page_title . 'Totes';
		break;
/*	case 'tile':
		$page_title = $page_title . 'Tiles';
*/
	endswitch;
} else $page_title = $page_title . 'Products';
include 'includes/head.inc.html';
?>

<body>
<div id="pageframe">

	    <div class="menubar">
	<a href="about.php" onmouseout="MIout('aboutus')" onmouseover="MIover('aboutus')">
	<img id="aboutus" src="images/inside/nav_aboutus.gif" alt="About Us" width="62" height="22" /></a>
	<a href="gallery.php" onmouseout="MIout('gallery')" onmouseover="MIover('gallery')">
	<img id="gallery" src="images/inside/nav_gallery.gif" alt="Gallery" width="49" height="22" /></a>
	<a href="products.php" onmouseout="document.getElementById('products').setAttribute('src','images/inside/nav_products-on.gif')" onmouseover="MIover('products')">
	<img id="products" src="images/inside/nav_products-on.gif" alt="Products" width="64" height="22" /></a>
	<a href="wholesale.php" onmouseout="MIout('wholesale')" onmouseover="MIover('wholesale')">
<img id="wholesale" src="images/inside/nav_wholesale.gif" alt="Wholesale Info" width="97" height="22"  /></a>
	<a href="contact.php" onmouseout="MIout('contactus')" onmouseover="MIover('contactus')">
	<img id="contactus" src="images/inside/nav_contactus.gif" alt="Contact Us" width="73" height="22" /></a>
	<a href="store/" onmouseout="MIout('store')" onmouseover="MIover('store')">
<img id="store" src="images/inside/nav_store.gif" alt="Our Store" width="35" height="22" /></a>
	<a href="index.html" onmouseout="MIout('home')" onmouseover="MIover('home')">
	<img id="home" src="images/inside/nav_home.gif" alt="Home" width="43" height="22" /></a>
	    </div>

    <div id="bodybox">

<?php    
if ($product != '')	{
	echo '<div id="navbox" style="background: #A39161 url(images/bg_', $product, '.jpg) no-repeat">
	   <div id="subnav">
	      <a href="products.php?product=gift">gift prints</a> | 
	      <a href="products.php?product=small">small framed prints</a> | 
	      <a href="products.php?product=large">large framed prints</a><br />
	      <a href="products.php?product=card">greeting cards</a> | 
	      <a href="products.php?product=tee">tees</a> | 
	      <a href="products.php?product=tote">tote bags</a>
	   </div>
	</div>
	';
	@include 'includes/p-' . $product . '.inc.html';
} else 
	include 'includes/p-menu.inc.html';

echo '</div>';

include 'includes/logo.inc.html';
?>

</div>

<p align="center" class="footer">
<a href="products.php?product=gift">gift prints</a> | 
<a href="products.php?product=small">small framed prints</a> | 
<a href="products.php?product=large">large framed prints</a> | 
<a href="products.php?product=card">greeting cards</a> | 
<a href="products.php?product=tee">tees</a> | 
<a href="products.php?product=tote">tote bags</a>
<br />
<?php include 'includes/foot.inc.html';
?>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>
