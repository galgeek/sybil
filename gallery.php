<?php
include 'includes/config.inc.php';
$series = '';
$image = '';
$page_title = 'Sybil Shane Studio &#8212 ';
if (isset($_GET['series'])) {
	switch ($_GET['series']):
	case 'senses':
	case 'twelvemoons':
	case 'calligraphy':
	case 'journey':
	case 'presentmoment':
	case 'tasteoflife':
	case 'orchids':
	case 'wine':
	case 'love':
//	case 'tilesi':
	case 'essence':
	case 'smallwonders':
	case 'gems':
	case 'zodiac':
	case 'embracing':
	case 'lifestreasures':
		$series = $_GET['series'] ;
		if (isset($_GET['image']))
			$image = $_GET['image'] ; 
	endswitch;
}
if ($series != '') {
	$imgfmt = "jpg";
	switch ($series):
	case 'senses':
		$page_title .= 'Come to Your Senses';
		$sc = "_cs_";
		$bph = 600;  // tallest 575
		$inseries = "12";
		break;
	case 'twelvemoons':
		$page_title .= 'Twelve Moons';
		$sc = "_tm_";
		$bph = 424;  // tallest 404
		$inseries = "12";
		break;
	case 'calligraphy':
		$page_title .= 'Calligraphy';
		$sc = "_c_";
		$bph = 306;  //tallest 286
		$inseries = "12";
		break;
	case 'journey':
		$page_title .= 'Journey';
		$sc = "_j_";
		$bph = 420;  //tallest 400
		$inseries = "7";
		break;
	case 'presentmoment':
		$page_title .= 'Present Moment';
		$sc = "_pm_";
		$bph = 582;  //tallest 562
		$inseries = "4";
		break;
	case 'tasteoflife':
		$page_title .= 'Taste of Life';
		$sc = "_tol_";
		$bph = 426;  //tallest 405
		$inseries = "12";
		break;
	case 'orchids':
		$page_title .= 'Orchids';
		$sc = "_o_";
		$bph = 584;  //tallest 560
		$inseries = "6";
		break;
	case 'wine':
		$page_title .= 'Wine';
		$sc = "_w_";
		$bph = 581;  //tallest 557
		$inseries = "4";
		break;
	case 'love':
		$page_title .= 'Love';
		$sc = "_l_";
		$bph = 595;  //tallest 575
		$inseries = "12";
		break;
/*	case 'tilesi':
		$page_title .= 'Decorative Tiles';
		$sc = "_ti_";
		$bph = 420;  //tallest 400?
		$inseries = "4";
		break;
*/
	case 'essence':
		$page_title .= 'Essence of the Seasons';
		$sc = "_es_";
		$bph = 420;  //tallest 400?
		$inseries = "4";
		break;
	case 'smallwonders':
		$page_title .= 'Small Wonders';
		$sc = "_sw_";
		$bph = 420;  //tallest 400?
		$inseries = "6";
		break;
	case 'gems':
		$page_title .= 'Gathering Gems';
		$sc = "_gg_";
		$bph = 420;  //tallest 400?
		$inseries = "12";
		break;
	case 'zodiac':
		$page_title .= 'Sacred Zodiac';
		$sc = "_z_";
		$bph = 600;  //tallest 575
		$inseries = "12";
		break;
	case 'embracing':
		$page_title .= 'Embracing the Day';
		$sc = "_e_";
		$bph = 600;  //tallest 575
		$inseries = "12";
		break;
	case 'lifestreasures':
		$page_title .= 'Life&rsquo;s Treasures';
		$sc = "_lt_";
		$bph = 426;  //tallest ~400
		$inseries = "6";
		$imgfmt = "png"; //trying to support transparency...
	endswitch;	
} else $page_title .= 'Gallery';
include 'includes/head.inc.html';
?>
<body>

<?php
if ($series == '') {
	echo '<div id="gallerymain">';
}
?>
	
<div id="pageframe">

	<div class="menubar">
<a href="about.php" onmouseout="MIout('aboutus')" onmouseover="MIover('aboutus')">
<img id="aboutus" src="images/inside/nav_aboutus.gif" alt="About Us" width="62" height="22"  /></a>
<a href="gallery.php" onmouseout="document.getElementById('gallery').setAttribute('src','images/inside/nav_gallery-on.gif')" onmouseover="MIover('gallery')">
<img id="gallery" src="images/inside/nav_gallery-on.gif" alt="Gallery" width="49" height="22"  /></a>
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

<?php
if ($series != '') {
	echo '<div id="navbox" style="background: #A39161 url(images/bg_', $series, '.jpg) no-repeat">
		<div id="subnav">
<a href="gallery.php?series=zodiac">zodiac</a> | 
<a href="gallery.php?series=embracing">embracing</a> | 
<a href="gallery.php?series=senses">senses</a> | 
<a href="gallery.php?series=love">love</a> | 
<a href="gallery.php?series=presentmoment">present moment</a> | 
<a href="gallery.php?series=orchids">orchids</a>
<br />
<a href="gallery.php?series=gems">gems</a> |
<a href="gallery.php?series=calligraphy">calligraphy</a> | 
<a href="gallery.php?series=twelvemoons">moons</a> | 
<a href="gallery.php?series=tasteoflife">taste of life</a> | 
<a href="gallery.php?series=journey">journey</a> | 
<a href="gallery.php?series=smallwonders">wonders</a> |
<a href="gallery.php?series=lifestreasures">life&rsquo;s treasures</a>
		</div>
	</div>' ;

	if ($image == "") {   // series pages
		echo '<div id="galleryframe">
	<div id="gallerybox">
<img src="images/main_', $series, '.', $imgfmt, '" alt="', $series, ' product shot"  /></div>
<div id="gallerycontent">' ;
		include "includes/content_" . $series . ".html" ;
	 } 
	else {				// individual image pages
		echo '<div id="galleryframe">
	<div id="gallerybox"><h1>';
		include 'includes/t' . $sc . $image . '.txt';
		echo '</h1>';
		echo '<div><a href="big.php?image=' . $sc . $image . '&imgfmt=' . $imgfmt . '" onclick="return pop(this,\'' . $sc . $image . '\',\'width=420,height=' . $bph . '\')" title="view a larger version in a new window">';
		echo '<img src="images/main' . $sc . $image . '.' . $imgfmt . '" ' . 'alt="' ;
		include 'includes/t' . $sc . $image . '.txt';
		echo '" ' . ' /><br /><span class="click">click for larger image</span></a></div></div>
		
		';
		echo '<div id="gallerycontent">';
		@include 'includes/d' . $sc . $image . '.html';
		echo '<h2>available formats</h2><ul>';
		@include 'includes/f_' . $series . '.html';
		@include 'includes/f' . $sc . $image . '.html';
		echo '</ul>
		
		';
		}
	echo '<h2>images in this series (' . $inseries . ' total)</h2>

';
	include 'includes/thumbs_' . $series . '.html' ;
	echo '</div></div>';
} else { //  gallery page - all series
	echo '
	<div id="bodybox">
	
		<div id="frame">
<div class="galbutton">
<a href="gallery.php?series=zodiac" title="view our Sacred Zodiac series">
<img class="i" src="images/gal_zodiac.jpg" width="100" height="140" alt="sacred zodiac" />
<img src="images/gal_zodiac.gif" width="82" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=embracing" title="view our Embracing the Day series">
<img class="i" src="images/gal_embracing.jpg" width="100" height="140" alt="embracing the day" />
<img src="images/gal_embracing.gif" width="67" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=senses" title="view our Come to Your Senses series">
<img class="i" src="images/gal_senses.jpg" width="100" height="140" alt="come to your senses" />
<img src="images/gal_senses.gif" width="39" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=love" title="view our Love series">
<img class="i" src="images/gal_love.jpg" width="100" height="140" alt="love" />
<img src="images/gal_love.gif" width="26" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=presentmoment" title="view our Present Moment series">
<img class="i" src="images/gal_presentmoment.jpg" width="100" height="140" alt="present moment" />
<img src="images/gal_presentmoment.gif" width="98" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=orchids" title="view our Orchids series">
<img class="i" src="images/gal_orchids.jpg" width="100" height="140" alt="orchids" />
<img src="images/gal_orchids.gif" width="43" height="17" alt="" />
</a></div>
<div class="galbutton">
<img src="images/gal_text.gif" width="100" height="140" />
</div>
<br clear="all" />
<div class="galbutton">
<a href="gallery.php?series=gems" title="view our Gathering Gems series">
<img class="i" src="images/gal_gems.jpg" width="100" height="100" alt="gathering gems" />
<img src="images/gal_gems.gif" width="90" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=calligraphy" title="view our Calligraphy series">
<img class="i" src="images/gal_calligraphy.jpg" width="100" height="100" alt="calligraphy" />
<img src="images/gal_calligraphy.gif" width="64" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=twelvemoons" title="view our Twelve Moons series">
<img class="i" src="images/gal_twelvemoons.jpg" alt="Twelve Moons" width="100" height="100" />
<img src="images/gal_twelvemoons.gif" width="83" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=tasteoflife" title="view our Taste of Life series">
<img class="i" src="images/gal_tasteoflife.jpg" alt="taste of life" width="100" height="100" />
<img src="images/gal_tasteoflife.gif" width="66" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=journey" title="view our Journey series">
<img class="i" src="images/gal_journey.jpg" width="100" height="100" alt="journey"  />
<img src="images/gal_journey.gif" width="48" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=smallwonders" title="view our Small Wonders series">
<img class="i" src="images/gal_smallwonders.jpg" width="100" height="100" alt="small wonders"  />
<img src="images/gal_smallwonders.gif" width="87" height="17" alt="" />
</a></div>
<div class="galbutton">
<a href="gallery.php?series=lifestreasures" title="view our Life&rsquo;s Treasures series">
<img class="i" src="images/gal_lifestreasures.png" width="100" height="100" alt="life&rsquo;s treasures"  />
<img src="images/gal_lifestreasures.gif" width="87" height="17" alt="" />
</a></div>		
		<br clear="all" />
	</div>
</div>';
}
include 'includes/logo.inc.html';
?>

</div>

<p align="center" class="footer">
<a href="gallery.php?series=zodiac">zodiac</a> | 
<a href="gallery.php?series=embracing">embracing</a> | 
<a href="gallery.php?series=senses">senses</a> | 
<a href="gallery.php?series=love">love</a> | 
<a href="gallery.php?series=presentmoment">present moment</a> | 
<a href="gallery.php?series=orchids">orchids</a> | 
<a href="gallery.php?series=gems">gems</a> |
<a href="gallery.php?series=calligraphy">calligraphy</a> | 
<a href="gallery.php?series=twelvemoons">moons</a> | 
<a href="gallery.php?series=tasteoflife">taste of life</a> | 
<a href="gallery.php?series=journey">journey</a> | 
<a href="gallery.php?series=smallwonders">wonders</a> |
<a href="gallery.php?series=lifestreasures">life&rsquo;s treasures</a>
<br />
<?php include 'includes/foot.inc.html';
?>

<?php
if ($series = '') {
	echo '</div>';
}
?>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>