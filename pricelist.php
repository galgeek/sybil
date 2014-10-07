<?php
include 'includes/config.inc.php';
$page_title = 'Sybil Shane Studio &#8212; Price Sheet';
include 'includes/head.inc.html';
?>

<body>
<div id="pageframe">
    <div class="menubar">
	<a href="about.php" onmouseout="MIout('aboutus')" onmouseover="MIover('aboutus')">
<img id="aboutus" src="images/inside/nav_aboutus.gif" alt="About Us" width="62" height="22"  /></a>
	<a href="gallery.php" onmouseout="MIout('gallery')" onmouseover="MIover('gallery')">
<img id="gallery" src="images/inside/nav_gallery.gif" alt="Gallery" width="49" height="22" /></a>
	<a href="pricelist.php" onmouseout="document.getElementById('pricesheet').setAttribute('src','images/inside/nav_pricesheet-on.gif')" onmouseover="MIover('pricesheet')">
<img id="pricesheet" src="images/inside/nav_pricesheet-on.gif" alt="Price Sheet" width="75" height="22"  /></a>
	<a href="products.php" onmouseout="MIout('products')" onmouseover="MIover('products')">
	<img id="products" src="images/inside/nav_products.gif" alt="Products" width="64" height="22"  /></a>
	<a href="contact.php" onmouseout="MIout('contactus')" onmouseover="MIover('contactus')">
<img id="contactus" src="images/inside/nav_contactus.gif" alt="Contact Us" width="73" height="22"  /></a>
	<a href="index.html" onmouseout="MIout('home')" onmouseover="MIover('home')">
<img id="home" src="images/inside/nav_home.gif" alt="Home" width="43" height="22"  /></a>
	</div>
    
    <div id="bodybox">
        
        <div id="imagebox">
        
            <img src="images/headers/img_pricesheet.jpg" width="181" height="233" alt="Heron" />
        
        </div>
        
        <div id="contentbox">
<h1>
<img src="images/headers/title_pricesheet.gif" width="107" height="18" alt="Price Sheet" />
</h1>
<p>
To request a price sheet, please <a href="&#109;&#097;&#105;&#108;&#116;&#111;&#058;&#106;&#107;&#110;&#117;&#100;&#115;&#101;&#110;&#064;&#115;&#121;&#098;&#105;&#108;&#115;&#104;&#097;&#110;&#101;&#046;&#099;&#111;&#109;?&#115;&#117;&#098;&#106;&#101;&#099;&#116;=&#083;&#121;&#098;&#105;&#108; &#083;&#104;&#097;&#110;&#101; &#083;&#116;&#117;&#100;&#105;&#111; &#112;&#114;&#105;&#099;&#101;&#108;&#105;&#115;&#116;, &#112;&#108;&#101;&#097;&#115;&#101;!">email us</a> with your name, address, phone number, and wholesaler's resale number. We will email you a .pdf of our price sheet.
</p>
	
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
	</p>

</body>
</html>
	
