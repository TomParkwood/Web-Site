<!--ServiceForm-->
<?php
$pageTitle="Service Form:";
$pageSummary="Request a service visit";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="ServiceForm.php">Service Form</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
    <form method="post" name="myemailform" action="Service-to-email.php">
    	<p>
    		<label for='name'>Enter Name: </label><br>
    		<input type="text" name="name">
    	</p>
    	<p>
    		<label for='email'>Enter Email Address:</label><br>
    		<input type="text" name="email">
    	</p>
      <p><strong>To help us, help you. Please fill out as much details abou the problem as possible.</strong></p>
      <p>
        <label for='manufacturer'>Manufacturer: </label><br>
        <input type="text" name="manufacturer">
      </p>
      <p>
        <label for='model'> Model: </label><br>
        <input type="text" name="model">
      </p>
    	<p>
    		<label for='description'>Brief description of the problem:</label> <br>
    		<textarea name="description"></textarea>
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
    <p>
    <a href='http://www.html-form-guide.com/email-form/php-form-to-email.html'
    >PHP form to email article page</a>
    </p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php');
?>
