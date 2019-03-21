<?php
$pageTitle="Services:";
$pageSummary="ParkWood Document Solutions provide a range of services aimed at helping you improve costs and workflow.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="services.php">Services</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Just Print. . . . . .</h1>
			<div class="left">
				<img alt="" src="images/JustPrint.png" title="" height="150px" width="250px"/></div>
			<div class="right" style="width: 550px">
				<p>Just Print is the new way to print. No Buying, Renting or Leasing involved.<br>
					Simply Just Print.</p>
				<p><a class="more" href="justprint.php">
					<img alt="" src="images/read-more.png" title=""/></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Printer Repairs. . . . . .</h1>
			<div class="left">
				<img alt="" src="images/Repairs.jpg" title="" height="150px" width="150px"/></div>
			<div class="right" style="width: 550px">
				<p>While most office printers aren't cheap, the price of repairing a machine can be done for a fraction of a new machine.<br>
					<br>
					With proper repairs to your existing printer you can control the printing quality of your machine. So we can restore your printer to almost brand new quality.</p>
					<p><a class="more" href="printer-repairs.php">
					<img alt="" src="images/read-more.png" title="" /></a></p>
			</div>
		</div>
		<div class="separator">
		</div>
		<div class="main-span">
			<h1>Print Audit. . . . . .</h1>
			<div class="left">
				<img alt="" src="images/services2.jpg" title="" /> </div>
			<div class="right" style="width: 550px">
				<p>What are your company&#39;s printing costs? Is this a question you could answer? Document production accounts for 3-5% of company revenue &amp; 2/3rds of businesses underestimate their document &amp; printer costs by up to 50%!</p>
				<p>With a Print Audit from ParkWood Document Solutions you can establish a comprehensive print strategy &amp; highlight expensive printing equipment. What&#39;s more this service is absolutely FREE to businesses in the Romsey area &amp; there are no obligations once you have the findings. We are 100% honest &amp; if your business is printing in the most efficient manner we&#39;ll tell you. However, If ParkWood can make you savings on your current internal printing &amp; photocopying expenditure we&#39;ll make the recommendations to do so with the appropriate hardware or software</p>
				<p><a class="more" href="print-audit.php">
				<img alt="" src="images/read-more.png" title="" /></a></p>
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
				<label for='email'>Enter Email Address: </label><br>
				<input type="text" name="email">
			</p>
			<p>
				<label for='moreinformation'>What would you like more information about?:</label><br>
				<textarea name="moreinformation"></textarea>
			</p>
			<input type="hidden" name="currentpage" value="Services Hub">
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
