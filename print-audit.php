<?php
$pageTitle="Print Audit:";
$pageSummary="What are your company's printing costs? Is this a question you could answer? Document production accounts for 3-5% of company revenue & 2/3rds of businesses underestimate their document & printer costs by up to 50%!";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="services.php">Services</a>
		&gt; <a href="print-audit.php">Print Audit</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Print Audit Service. . . . . .</h1>
			<p>With a Print Audit from ParkWood Document Solutions you can establish a comprehensive print strategy &amp; highlight expensive printing equipment.	What&#39;s more this service is absolutely FREE to businesses in the Romsey area &amp; there are no obligations once you have the findings. We are 100%	honest &amp; if your business is printing in the most efficient manner we&#39;ll tell you. However, If ParkWood can make you savings on your current internal printing &amp; photocopying expenditure we'll make the recommendations to do so with the appropriate hardware or software</p>
			<center><img alt="Fig 1. example of a Print Audit report" src="images/printaudit.jpg" title="Fig 1. example of a Print Audit report" /></center>
			<p>The process only takes a couple of minutes &amp; can be run over a period to suit you. We usually recommend a period of 30 days to obtain all the required information &amp; once we have all the findings will produce the reports &amp; recommendations for you at the end of the Print Audit.</p>
			<br><br>
			<p>If you require any further information or would like to arrange a Print Audit then please <a href="contact.php">contact us</a></p>
		</div>
	<br>
		<form method="post" name="myemailform" action="To-Email.php">
			<p>
				<label for='name'>Enter Name: </label><br>
				<input type="text" name="text">
			</p>
			<p>
				<label for='email'>Enter Email Address:</label><br>
				<input type="text" name="email">
			</p>
			<p>
				<label for='moreinformation'>What would you like more information about?:</label><br>
				<textarea name="moreinformation"></textarea>
			</p>
			<input type="hidden" name="currentpage" value="Print Audit">
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
