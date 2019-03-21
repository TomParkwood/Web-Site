<!--Utax Range-->
<?php
$pageTitle = "Utax Range:";
$pageSummary = "The range of UTAX machines varies based on your needs, if you need a large A3 multi function device with up to 60 pages per minute and complex finishing options, there is a machine for you. Or if you simply want a small desktop machine which can print, scan, copy then there is a machine for you. All you need to do is determine what your needs are and choose the best match for you.";
$metaKeywords = "UTAX printer, utax copier, utax scanner, utax fax machine, desktop mfp, utax desktop, utax multi function device, colour printers.";
$metaDescription = "The range of UTAX machines varies based on your needs, if you need a large A3 multi function device with up to 60 pages per minute and complex finishing options, there is a machine for you. Or if you simply want a small desktop machine which can print, scan, copy then there is a machine for you. All you need to do is determine what your needs are and choose the best match for you.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="utax-range.php">Utax Range</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>The Utax Range of MFDs</h1>
    <table style="width:100%;" border="1">
      <tr>
        <td style="width:50%;"><strong>The A4 Colour Range</strong></td>
        <td style="width:50%;"><strong>The A3 Colour Range</stong></td>
      </tr>
      <tr>
        <td><a href="a4utax.php"><img class="copier-table" src="images/utax/C2655.jpg" alt="Thumbnail of the A4 UTAX range."></a></td>
        <td><a href="a3utax.php"><img class="copier-table" src="images/utax/6006ci.jpg" alt="Thumbnail of the A3 UTAX range."></a></td>
      </tr>
      <tr>
        <td>A pair of A4 colour devices which are perfect for a small office or low user, with running speeds of 21 or 26 pages per minute with all of the bells and whistles expected from a much larger machine.<br>
          See all of the details <a href="a4utax.php">here</a>.
        </td>
        <td>A range of five SRA3 machines with varying speeds from 25 pages per minute all the way up to 60 pages per minute, with plenty of finishing and software options available.<br>
          See all of the details <a href="a3utax.php">here</a>.
        </td>
      </tr>
    </table>
    <br>
    <p>If you want more inormation on the UTAX machines then, please get in contact with us.</p>
    <form method="psot" name="myemailform" action="To-Email.php">
      <p>
        <label for='name'>Enter Name:</label><br>
        <input type="text" name="name">
      </p>
      <p>
        <label for="email">Enter Email Address:</label><br>
        <input type="text" name="email">
      </p>
      <p>
        <label for="moreinformation">What would you like more information about?:</label><br>
        <textarea name="moreinformation"></textarea>
      </p>
      <input type="hidden" name="currentpage" value="MFP: Utax Range">
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmValidator = new Validation("myemailform");
      frmValidator.addValidation("name","req","Please provide your name");
      frmValidator.addValidation("email","req","Please provide your email");
      frmValidator.addValidation("email","email","Please enter a valid email address");
    </script>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php');
?>
