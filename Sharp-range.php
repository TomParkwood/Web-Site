<!--Sharp Range-->
<?php
$pageTitle = "Sharp Range:";
$pageSummary = "The four different ranges currently offered by Sharp, with machines going from smaller desktop machines all the way to high speed machines with up to 75 pages per minute";
$metaKeywords = "Sharp Griffin, Griffin range, MX-3050N, mx3050n, mx-3550n, mx3550n, mx-4050n, mx4050n, mx-5050n, mx5050n, mx-6050n, mx6050n, mx-3050v, mx3050v, mx-3060v, mx3060v, mx-3070v, mx3070v, mx-3550v, mx3550v, mx-3560v, mx3560v, mx-3570v, mx3570v, mx-4050v, mx4050v, mx-4060v, mx4060v, mx-4070v, mx4070v, mx-5050v, mx5050v, mx-5070v, mx5070v, mx-6050v, mx6050v, mx-6070v, mx6070v";
$metaDescription= "Find out about the new ranges of Sharp MFPs which we offer, which could vastly improve your productivity and save you money. With machines from small A4 MFPs to 75 pages per minute you will find something to suit your needs.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="sharp-range.php">Sharp Range</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>The Sharp Range of MFDs</h1>
    <table style="width:100%;" border="1">
      <tr>
        <td style="width:50%;"><strong>The Griffin Range</strong></td>
        <td style="width:50%;"><strong>The Neo Range</strong></td>
      </tr>
      <tr>
        <td style="width:50%;"><a href="griffin.php"><img src="images/sharp/griffin.jpg" alt="thumbnail of the griffin range"></a></td>
        <td style="width:50%;"><a href="neo.php"><img src="images/sharp/neo.jpg" alt="thumbnail of the neo range"></a></td>
      </tr>
      <tr>
        <td>A range of 5 SRA3 machines with varying speeds from 30 pages per minute up to 60 pages per minute, with plenty of finishing and software options. Very easy to use and super reliable.<br>
          See all of the details <a href="griffin.php">here</a>.
        </td>
        <td>A pair of A4 colour devices for the small office or low user. Running speeds of 25 or 30 pages per minute with all the bells and whistles expected from a much larger machine.<br>
          See all of the details <a href="neo.php">here</a>.
        </td>
      </tr>
    </table>
    <br>
    <table style="width:100%;" border="1">
      <tr>
        <td style="width:50%;"><strong>The Sphinx Range</strong></td>
        <td style="width:50%;"><strong>The Polaris Range</strong></td>
      </tr>
      <tr>
        <td style="width:50%;"><a href="sphinx.php"><img src="images/sharp/sphinx.jpg" alt="thumbnail of the sphinx range"></a></td>
        <td style="width:50%;"><a href="polaris.php"><img src="images/sharp/polaris.jpg" alt="thumbnail of the polaris range"></a></td>
      </tr>
      <tr>
        <td>The MX-2630N is ideal for the offices who want the functionality of a small MFP but with the options of a higher range such as more trays and finishing options.<br>
          See all of the details <a href="sphinx.php">here</a>.
        </td>
        <td>A pair of high speed machines with speed of up to 75 pages per minute with a wide range of finishing options. Need high productivity and quality machine then look no further than the Polaris range.<br>
          See all of the details <a href="polaris.php">here</a>.
       </td>
      </tr>
    </table>
    <br>
  </div>
  <?php
  include('include/pds-sidebar.php');
   ?>
   <div id="equal-1" class="width-three">
     <p>If you want more inormation on the Sharp ranges then, please get in contact with us.</p>
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
       <input type="hidden" name="currentpage" value="Products: Sharp Range">
       <input type="submit" name="submit" value="submit">
     </form>
     <script language="JavaScript">
      var frmvalidator = new Validator("myemailform");
      frmvalidator.addValidation("name","req","Please provide your name");
      frmvalidator.addValidation("email","req","Please provide your email");
      frmvalidator.addValidation("email","email","Please provide a valid email address");
    </script>
  </div>
</div>
<?php
include('include/pds-footer.php');
 ?>
