<!--JustPrint-->
<?php
$pageTitle ="JustPrint:";
$pageSummary = "Just Print is a new way of getting a printer, all you have to do is pay for what you print. No rental, no leasing and no buying.";
$metaKeywords = "Just Print, no print contract, Print only contract, no printer rental, pay as you go printing";
$metaDescription = "Just Print is a new way of getting a printer, all you have to do is pay for what you print. No rental, no leasing and no buying.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="services.php">Services</a> &gt; <a href="Just-Print.php">Just Print</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-threecentre">
    <img src="images/JustPrint.png" style="width:70%">
    <p style="font-size:40px"><b>Just Print</b></p>
    <p style="font-size:25px">We supply a colour A3 MFD,<br>
      Fully Maintained,<br>
      For you to use.<br>
      No Rental<br>
      No Leasing<br>
      No Buying</p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
  <div id="equal-1" class="width-three">
    <p>If you would like more information on Just Print, please get in contact with us.</p>
    <form method="post" name="myemailform" action="JustPrintEmail.php">
      <p>
        <label for='name'>Enter Name:</label><br>
        <input type="text" name="name">
      </p>
      <p>
        <label for='email'>Enter Email Address:</label><br>
        <input type="text" name="email">
      </p>
      <p>
        <label for='pages'>Average Pages Printed per Month:</label><br>
        <input type="text" name="pages">
      </p>
      <p>
        <label for='colour'>What is the percentage of pages printed in colour:</label><br>
        <input type="text" name="colour">
      </p>
      <p>
        <label for='moreinformation'>What area of Just Print do you want more information about?:</label><br>
        <textarea name="moreinformation"></textarea>
      </p>
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validator("myemailform");
      frmValidator.addValidation("name","req","Please provide your name");
      frmValidator.addValidation("email","req","Please provide your email");
      frmValidator.addValidation("email","email","Please enter a valid email address");
    </script>
  </div>
</div>
<?php
include('include/pds-footer.php');
?>
