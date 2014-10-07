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
	<meta name="copyright" content="&copy; 2005 Sybil Shane Studio" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="imagetoolbar" content="no" />
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<script language="JavaScript" type="text/javascript" src="norightclick.js"></script>
   
    <style type="text/css" media="screen">
        @import url(styles/type.css);
        body {
            margin:10px;
            padding:10px;
            border:0px;
            background:#000;
            color:#fff;
        }
        #textbox {
				margin:0;
            padding:0;
				width:250px;
            float:right;
        }           
        #imagebox {
            padding:0 20px 0 0;
        }           
    </style>
</head>

<body onclick="window.close()">

<?php
if (isset($_GET['series'])) {
    $series = $_GET['series'];
    switch ($series):
    case 'senses':
        $series = "cs_";
        break;
    case 'calligraphy':
        $series = "c_";
        break;
    case 'journey':
        $series = "j_";
        break;
    case 'orchids':
        $series = "o_";
        break;
    case 'presentmoment':
        $series = "pm_";
        break;
    case 'tasteoflife':
        $series = "tol_";
        break;
    case 'twelvemoons':
        $series = "tm_";
        break;
    case 'love':
        $series = "l_";
        break;
    case 'tilesi':
        $series="ti_";
        break;
    case 'wine':
        $series="w_";
        break;
    case 'essence':
        $series="es_";
        break;
    case 'smallwonders':
        $series="sw_";
        break;
    case 'gems':
        $series = "gg_";
        break;
    case 'zodiac':
        $series = "z_";
        break;
    case 'embracing':
        $series = "e_";
        break;
    case 'lifestreasures':
        $series = "lt_";
        break;
    default:
        $series = "unknown";
    endswitch;
} else
    $series = "" ;
    
$product="new";
    
if (isset($_GET['product'])) {
    $product = $_GET['product'];
    switch ($product):
    case 'card':
    case 'gift':
    case 'small':
    case 'large':
    case 'tile':
    case 'tee':
    case 'tote':
    case 'special':
	    break;
    default:
        $product="new";
    endswitch;
    }
    
if ($series == "unknown" or $product == "new") {
    $series="";
    $product="new";
    }

include 'includes/p_' . $series . $product . '.html';    
  
?>

<?php include_once("includes/ganalytics.inc.php") ?>
</body>
</html>
    
