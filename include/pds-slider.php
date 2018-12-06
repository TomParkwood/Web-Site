<div id="slide-wrapper" class="desktop" align="center" width="100%">
	<a href="products.php"><img class="mySlides" src="images/slides/slide1.png" align="middle" width="100%"/></a>
	<a href="photocopiers.php"><img class="mySlides" src="images/slides/slide-2.jpg" align="middle" width="100%"/></a>
	<a href="document-management.php"><img class="mySlides" src="images/slides/slide3.png" align="middle" width="100%"/></a>
	<!--<a href="photocopiers.php"><img class="mySlides" src="images/slides/slide-4.jpg" align="middle" width="100%"/></a>-->
	<a href="print-audit.php"><img class="mySlides" src="images/slides/slide5.png" align="middle" width="100%"/></a>
</div>
<script>
var myIndex =0;
carousel();

function carousel(){
	var i;
	var x = document.getElementsByClassName("mySlides");
	for (i=0;i<x.length; i++){
		x[i].style.display="none";
	}
	myIndex++;
	if(myIndex > x.length) {myIndex	= 1}
	x[myIndex-1].style.display = "block";
	setTimeout(carousel,5000); //Change image every 5 seconds
}
</script>
