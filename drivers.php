<!--Drivers-->
<?php
$pageTitle = "Drivers";
$pageSummary = "Summary";
$metaKeywords = "Keywords";
$metaDescription = "Description";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="drivers.php">Drivers</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>Drivers</h1>
    <p>All printers need drivers.<br>
      It is important to download and install the manufacturers driver, this is because the Windows generic drivers are basic and often hamper the functionability of the printer.</p>
    <br>
    <h3>Here are some links to our machine ranges.</h3>
    <p>We recommend that you use the PCL6 driver if the option is available and to not opt for the universal driver.<br>
      For some older machines it maybe useful to know that most Windows 7 drivers will also work with Windows 10.</p>
    <a href="https://www.sharp.co.uk/cps/rde/xchg/gb/hs.xsl/-/html/download-centre.htm" target="_blank">Sharp Download Center</a><br>
    <a href="https://www.oki.com/uk/printing/executive-series/support/drivers-and-utilities/index.html" target="_blank">OKI Executive Series</a><br>
    <a href="https://www.utaxuk.co.uk/C12571450046D4C3/vwWebPagesById/7F56655DFB05A003C125737F00413FEE" target="_blank">Utax Driver Downloads</a><br>
    <p>It is a good idea to let the drivers install themselves using their own application. However some only extract the files into the folder, so you will have to install the driver manually.</p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
  <div id="equal-1" class="width-three">
    <form method="post" name="myemailform" action="To-Email.php">
      <p>
        <label for='name'>Enter Name:</label><br>
        <input type="text" name="name">
      </p>
      <p>
        <label for='email'>Enter Email Address:</label><br>
        <textarea name="moreinformation"></textarea>
      </p>
      <input type="hidden" name="currentpage" value="Drivers.">
      <input type="submit" name="submit" value="submit">
