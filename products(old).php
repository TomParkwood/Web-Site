<?php
$pageTitle="Products:";
$pageSummary="This page highlights the products &amp; solutions in which ParkWood Document Solutions Ltd specialise. If there is a particular product or solution that you require &amp; cannot find please contact us &amp; we'll see what we can do to help";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Photocopiers</h1>
			<div class="left" style="width:40%;">
				<a href="photocopiers.php"><img class="product" src="images/sharp/sphinx.jpg" alt="The current range of photocopiers that we offer" width="100%"/></a>
			</div>
			<div class="right" style="width:60%;">
				<p>Multifunctional devices have evolved from photocopiers and have many areas of functionality, predominantly printing, faxing, scanning, the ability to e-mail documents and integration with other applications.</p>
				<p>We supply a range of copiers, printers and MFDs from a variety of manufacturers. Whatever your requirements we can supply you with the right machine for you business.</p>
				<p><a class="more" href="photocopiers.php"><img src="images/read-more.png" alt=""></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>ProfiPack</h1>
			<div class="left" style="width:40%;">
				<a href="ProfiPack.php"><img class="product" src="images/ProfiPackP425.jpg" alt="HSM ProfiPack" width="100%"/></a>
			</div>
			<div class="right" style="width:60%;">
				<p>With these packaging machines, you can process cardboard into a padding mat or padded filling material in one working step.</p>
				<p>As either a compact desktop device, so it can be used as a mobile device with total flexibility, or a floor standing machine on steering rollers which can be used with total flexibility.</p>
				<p><a class="more" href="ProfiPack.php"><img src="images/read-more.png" alt=""></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Skywell</h1>
			<div class="left" style="width:40%;">
				<a href="skywell.php"><img class="product" src="images/skywell.jpg" alt="The Skywell a water machine like no other" width="30%"></a>
			</div>
			<div class="right" style="width:60%;">
				<p>The Skywell is a water machine like no other, because it makes it's own water. No plumbing or large plastic bottles of water required.</p>
				<p>With its five filters and two UV bulbs it is also fresher than most bottled solutions. You can just give it power and it will start making water for you to drink.</p>
				<p><a class="more" href="skywell.php"><img src="images/read-more.png" alt=""></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Sharp Interactive Nursery Table</h1>
			<div class="left" style="width:40%;">
				<a href="nursery-table.php"><img class="product" src="images/Sharp-table.png" alt='A 40" battery powered tablet which is perfect for pre schools and early years education' width="100%"></a>
			</div>
			<div class="right" style="width:60%;">
				<p>A 40" tablet which is aimed at nurseries and schools which aim to encourage sharing and co-operation with educational games which are aimed at younger children.</p>
				<p>There is also a version of the Tablet which is not just aimed at younger children but older schools and nursing homes, with height adjustment and screen rotation to make it easier for adults to use.</p>
				<p>The biggest selling point is that there is no cables, it is completely battery operated, so there is no trip hazards, and can easily be wheeled in and out of room when needed.</p>
				<p><a class="more" href="nursery-table.php"><img src="images/read-more.png" alt=""></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Sharp Big Pad</h1>
			<div class="left" style="width:40%;">
				<a href="bigpad.php"><img class="product" src="images/BigPad.jpg" alt='The range of BigPads which are suited for meeting rooms and classrooms' width="100%"></a>
			</div>
			<div class="right" style="width:60%;">
				<p>The Big Pads offered by Sharp are designed to increase productivity in meetings and classroom environments, by adding a large touch screen display. Which can either be used by itself or with a computer or tablet.</p>
				<p>With sizes ranging from 40 inches all the way up to 80 inches. You can easily find one which will suit your requirements.</p>
				<p><a class="more" href="bigpad.php"><img src="images/read-more.png" alt=""></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
	<br>
		<form method="post" name="myemailform" action="To-Email.php">
			<p>
				<label for='name'>Enter Name:</label><br>
				<input type="text" name="name">
			</p>
			<p>
				<label for='email'>Enter Email Address:</label><br>
				<input type="text" name="email">
			</p>
			<p>
				<label for='moreinformation'>What would you like more information about?:</label><br>
				<textarea name="moreinformation"></textarea>
			</p>
			<input type="hidden" name="currentpage" value="Products">
			<input type="submit" name="submit" value="submit">
		</form>
		<script language="JavaScript">
			var frmvalidator = new Validator("myemailform");
			frmvalidator.addValidation("name","req","Please provide your name");
			frmvalidator.addValidation("email","req","Please provide your email");
			frmvalidator.addValidation("email","email","Please enter a valid email address");
		</script>
	</div>
	<?php
	include('include/pds-sidebar.php');
	?>
</div>
<?php
include('include/pds-footer.php');
?>
