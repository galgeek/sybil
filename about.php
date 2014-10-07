<?php
include 'includes/config.inc.php';
$page_title = 'Sybil Shane Studio &#8212; About Us';
include 'includes/head.inc.html';
?>

<body>

<div id="pageframe">

    <div class="menubar">
	<img id="aboutus" src="images/inside/nav_aboutus-on.gif" alt="About Us" width="62" height="22"  />
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
        
            <img src="images/headers/img_aboutus.jpg" width="230" height="328" alt="Bell" />
        
        </div>
        
        <div id="contentbox">
        
<h1>
<img src="images/headers/title_about.gif" width="240" height="23" alt="About Sybil Shane Studio" />
</h1>
            
<p>
The art by Sybil Shane Studio was born out of a life-changing experience for Sybil. She was able to be by her mother&rsquo;s side during her mother&rsquo;s last days of battling cancer. Sybil realized after that intimate experience, that she needed to do what was most important to her at that point in her life. She sold her home, transferred her tax practice, and took some time off for herself and to be with her son. She began to experiment with Japanese papers, collage, and origami. You could say that Sybil found her path again by following this dream.</p>
</p>
<p>May her art continue to inspire us to find our own inner peace...</p>
        </div>
        <br clear="all" />
    </div>
    
<?php    
include_once 'includes/logo.inc.html';
?>

</div>

	<p align="center" class="footer">
<?php    
include_once 'includes/foot.inc.html';
?>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>