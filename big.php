<?php    
include 'includes/config.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<title>Sybil Shane Studio</title>
	<meta name="description" content="Sybil Shane Studio" />
	<meta name="keywords" content="Sybil Shane Studio, Sybil Shane, calligraphy, asian art, art nouveau, contemporary art, art deco, prints, art prints, tiles, decorative tiles, cards, greeting cards, tee shirts, t-shirts, tees, teeshirts, tote bags, totes, gifts" />
	<meta name="copyright" content="&copy; 2013 Sybil Shane Studio" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="imagetoolbar" content="no" />
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<script language="JavaScript" type="text/javascript" src="norightclick.js"></script>

    <style type="text/css" media="screen">
        @import url(styles/type.css);
        @import url(styles/inside.css);
    </style>
</head>
<body onclick="window.close()">
<div id="bigpic">
<?php
if (isset($_GET['image']))
    $image = $_GET['image'];
else
    $image = "";
if (isset($_GET['imgfmt'])) {
	switch ($_GET['imgfmt']):
	case 'png':  //support pngs, too!
		$imgfmt = $_GET['imgfmt'];
	case 'jpg':  
		$imgfmt = $_GET['imgfmt'];
	endswitch;
} else $imgfmt = "jpg";
	


echo "<img src='images/big" . $image . "." . $imgfmt;
echo "' alt='";
@include 'includes/t' . $image . '.txt';
echo "' />";
?>
</div>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>
    
