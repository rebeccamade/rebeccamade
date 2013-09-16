<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Black Goose Bistro</title>

<link rel="stylesheet" href="css/goosestyle.css" type="text/css" media="all" />

<!--//// STEP 1: Insert the following code between the <head> and </head> tags.-->
<script language="JavaScript">

// Drummy's Random Image Script
// (C) 2006 Paul Voth, Drummy.org
// Please leave this copyright notice in the script if you're gonna use it :)

function get_random()
{

// Make sure that random()*X) has the correct number. The number of images defined below.
var ranNum= Math.floor(Math.random()*4);
return ranNum;
}
var whichImg=get_random();

function show_image() {

// Add your images here.
// Make sure that Array(X) has the number of images that you want to include
var img=new Array(4)
img[0]="images/teriyaki_chix.jpeg";
img[1]="images/sashimi.jpeg";
img[2]="images/Bistro-Egg-Sandwich.jpg";
img[3]="images/beetsalad.jpeg";

 // Here the actual displaying of the image is taking place.
document.write("<img src='");
document.write(img[whichImg]);
document.write("' border='0' />");
}
</script>



</head>

<body>
<div id="container">

<?php include ("includes/nav.php"); ?>

<!--<div id="header">
<h1><a id="homelink" href="#">Black Goose Bistro</a></h1>
	<p>/// Since December 2009 ///</p>
	<h3>We are Zagat Rated</h3>
</div>

<ul id="globalnav">
	<li><a href="menu.html">Menu</a></li>
    <li><a href="story.html">&lsquo;Goose Story</a></li>
    <li><a href="pages/contact.html">Contact</a></li>
</ul>-->

<div class="leftcol">
<!--STEP 2: Insert the following code where you want the random image to appear. -->
<script language="JavaScript">show_image(); </script>
<h2>The Restaurant</h2>

<p>Black Goose Bistro offers casual lunch and dinner fare in a hip atmosphere. The menu changes regularly to highlight the freshest ingredients.
<br />
<br />
<em>Some of our more popular dishes are:</em>

<ul class="contentlist">
	<li>Shrimp Mousse</li>
    <li>Blackened Goose Feet</li>
    <li>Cream of Wheat & Liverwurst Casserole (w/Thousand Island Dressing)</li>
	<li>6-day old Room Temperature Chicken</li>
	<li>Piping hot Rainbow Trout & Root Beer Smoothie</li>
</ul>
</p>
</div>

<div class="rightcol">
<h2>Catering Services</h2>

<p> You have fun... we'll do the cooking. Black Goose Catering can handle events from snacks for Bridge Club to elegant corporate fundraisers.
</p>

<h2>Location and Hours</h2>
<p>Bakers Corner in Seekonk, Massachusetts<br />
<em>Monday Through Thursday 11am to 9pm, Friday and Saturday, 11am to Midnight</em>
</p>
</div>

<?php include ("includes/footer.php"); ?>

<!--<!--<div id="footer">
<p>&copy;2010 Black Goose Bistro World Empire, Inc.</p>
</div>-->

</div>
</body>
</html>