<!-- Printer Repairs-->
<?php
$pageTitle="Printer Repairs:";
$pageSummary="We can repair most types of printer and multi-function devices. We operate out of the Hampshire region but have contacts country wide.";
$metaKeywords = "Printer Repairs, mfp repairs, sharp repairs, utax repairs, photocopier repairs, hampshire printer repairs, hampshire mfp repairs, hampshire photocopier repairs, southampton printer repairs, southampton photocopier repairs, printer repair service";
$metaDescription = "We can repair most types of printers and multi function devices. Find out what information we would need from you.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="services.php">Services</a> &gt; <a href="printer-repairs.php">Printer Repairs</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div class="main-span">
			<h1>Printer Repairs</h1>
			<div class="left">
				<img alt="" src="images/Repairs.jpg" title="" height="150px" width="150px"/> </div>
			<div class="left" style="width: 80%">
				<p>Most office printers aren't cheap.<br>In most cases, a full repair can be made for a fraction of the price of a new printer.<br>
          We can repair most types of printers and mult-function devices (formally known as photocopiers).<br>
          We operate in the Hampshire region but have many contacts country wide.</p>
        <p>What you can try before you get our help.<br>
          Most print quality issues which occur in printers are cartridge problems, especially with combined toner and drum cartridges. If you can, try another cartridge or even an old one to see if it makes a difference.<br>
          If you need any help, please call us for advice. We are always happy to help. If you do call us please have the printer make and model and a descriptionof the fault, because we maybe able to cure it over the phone or point you to an easy user repair before you spend your money on a needless callout.</p>
        <p>Why would we do this?<br>
          We believe that a good service will result in you calling us again in the future. We want to show you that our interest is in your machines continued functioning and not just in our pockets.</p>
        <p>Please note that we no longer repair inkjet printers, except for high value plotters and printers, most inkjets these days are cheaper the replace than to repair.</p>

			</div>
		</div>
	<br>
		<h2>Printer Repairs Form</h2>
		<form method="post" name="myemailform" action="Service-to-email.php">
			<p>
				<label for='name'>Enter Name: </label><br>
				<input type="text" name="name">
			</p>
			<p>
				<label for='email'>Enter Email Address: </label><br>
				<input type="text" name="email">
			</p>
			<p><strong>To help us, help you. Please fill out as much details about the problem as possible.</strong></p>
			<p>
				<label for='manufacturer'>Manufacturer: </label><br>
				<input type="text" name="manufacturer">
			</p>
			<p>
				<label for='model'>Model: </label><br>
				<input type="text" name="model">
			</p>
			<p>
				<label for='description'>Brief description of the problem:</label><br>
				<textarea name="description"></textarea>
			</p>
			<input type="submit" name='submit' value="Submit">
		</form>
		<script language="JavaScript">
			//Validating the name and email address
			var frmvalidator = new Validator("myemailform");
			frmvalidator.addValidation("name","req","Please provide your name");
			frmvalidator.addValidation("email","req","Please provide your email address");
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
