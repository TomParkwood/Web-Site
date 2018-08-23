<!--ServiceForm-->
<?php
$pageTitle="General Enquiries:";
$pageSummary="Fill out enquiries form.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="EnquiryForm.php">Meter Reading Form</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
    <form method="post" name="myemailform" action="Enquiry-to-email.php">
    	<p>
    		<label for='name'>Enter Name: </label><br>
    		<input type="text" name="name">
    	</p>
    	<p>
    		<label for='email'>Enter Email Address:</label><br>
    		<input type="text" name="email">
    	</p>
			<p>
				<label for='company'>Company: </label><br>
				<input type="text" name="company">
			</p>
			<p><strong>Please select any of the following products &amp; services that you would like more information about: </strong></p>
			<p>
				<label for= 'Multifunction'>Multifunctional Printers, Print / Copy / Scan: </label>
				<input name="Array[]" type="checkbox" value="Multifunction"/>
			<br>
				<label for= 'PrintControl'>Print Control & Management Solutions: </label>
				<input name="Array[]" type="checkbox" value="PrintControl"/>
			<br>
				<label for= 'Electronic Document'>Electronic Document &amp; Records Management Software: </label>
				<input name="Array[]" type="checkbox" value="ElectronicDocument"/>
			<br>
				<label for= 'PrintAudit'>Print Audit: </label>
				<input name="Array[]" type="checkbox" value="PrintAudit"/>
			<br>
				<label for= 'Servicing'>Servicing &amp; Support: </label>
				<input name="Array[]" type="checkbox" value="Servicing"/>
			<br>
				<label for= 'Supplies'>Office &amp; Paper Supplies: </label>
				<input name="Array[]" type="checkbox" value="Supplies"/>
			</p>
			<p>
				<label for= 'further'>Any Further Information: </label><br>
				<textarea name="further"></textarea>
			</p>
    	<input type="submit" name='submit' value="submit">
    </form>
    <script language="JavaScript">
    // Code for validating the form
    // Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
    // for details
    var frmvalidator  = new Validator("myemailform");
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
