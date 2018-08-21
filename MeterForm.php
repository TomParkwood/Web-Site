<!--ServiceForm-->
<?php
$pageTitle="Meter Form:";
$pageSummary="Fill out a meter form online.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="MeterForm.php">Meter Reading Form</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
    <form method="post" name="myemailform" action="Meter-to-email.php">
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
      <p>
        <label for='manufacturer'>Manufacturer: </label><br>
        <input type="text" name="manufacturer">
      </p>
      <p>
        <label for='model'> Model: </label><br>
        <input type="text" name="model">
      </p>
			<p>
				<label for='serial'> Serial: </label><br>
				<input type="text" name="serial">
			</p>
			<p>
				<label for='mono'>Mono Count: </label><br>
				<input type="number" name="mono">
			</p>
			<p>
				<label for='colour'>Colour Count: </label><br>
				<input type="number" name="colour">
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
		frmvalidator.addValidation("company","req","Please provide your company name");
		frmvalidator.addValidation("manufacturer","req","Please enter the Manufacturer of the machine");
		frmvalidator.addValidation("model","req","Please enter the model of the machine");
		frmvalidator.addValidation("serial","req","Please enter the serial number of the machine");
    </script>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php');
?>
