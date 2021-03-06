<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117937434-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-117937434-1');
	</script>
<?php
// Turn off all error reporting
error_reporting(0);

// meta description ( get from page or display default )
if(isset($metaDescription))
{
	echo "<meta content=\"".$metaDescription."\" name=\"description\" />\n";
}
else
{
	echo"<meta content=\"We supply, install, maintain and, most importantly, monitor the performance of photocopiers and print machines both locally across Hampshire Dorset Wiltshire and nationally from a variety of manufacturers\" name=\"description\" />\n";
}

// meta keywords ( get from page or display default )
if(isset($metaKeywords))
{
	echo "<meta content=\"".$metaKeywords."\" name=\"keywords\" />\n";
}
else
{
	echo "<meta content=\"Sharp,Ricoh,kyocera,Cannon,Photocopiers,Photocopier Sales,Copier Sales,Copiers,Printers,Printer Sales,Multifunctional Devices,MFP,MFPS,MFD,MFDS,Colour &amp; Mono,Colour,Mono,Duplex,Electronic Document Management,Hampshire,Dorset,Wiltshire,Egland,UK\" name=\"keywords\" />\n";
}

$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
?>

<meta content="ParkWood Document Solutions: it@parkwoodsolutions.com" name="author" />
<meta content="text/html;charset=UTF-8" http-equiv="content-type" />
<link href="./style/desktop.css" media="screen" rel="stylesheet" type="text/css" />
<link href="./style/print.css" media="print" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/livs/jquery/3.1.0/jquery.min.js"></script>
<script src="./scripts/jQuery.equal.columns.js" type="text/javascript"></script>
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="./scripts/CookieConsent.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<title><?php echo $pageTitle; ?> ParkWood Document Solutions</title>
<link rel="icon" href="/images/favicon.ico">
</head>
<body>
<div id="top"></div>
<div id="wrapper">
