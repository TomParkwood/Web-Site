<!--Photocopiers-->
<?php
$pageTitle="Photocopiers, Printers and MFDs:";
$pageSummary="Multifunctional devices have evolved from photocopiers and have many areas of functionality, predominantly printing, faxing, scanning, the ability to e-mail documents and integration with other applciations";
$metaKeywords="Sharp Range, Sharp Griffin, Sharp Neo, Sharp Sphinx, Sharp Polaris, Utax Desktop, A4 Utax, A3 Utax";
$metaDescription="The different ranges of photocopiers which we offer. The Sharp range from desktop MFDs all the way to 75 page per minute machines. The UTAX range which range from small desktop machines to 60 page per minute machines.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="photocopiers.php">Photocopiers</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
      <h1>Photocopiers, Printers &amp; MFD's</h1>
      <h2><a href="sharp-range.php">The Sharp Range</a></h2>
      <p>The Sharp range consists of four different types of machines, which go from smaller desktop machines all the way to high speed machines with up to 75 pages per minute.</p>
        <table style="width:100%;">
          <tr>
            <td style="width:50%;"><strong><a href="griffin.php">The Griffin Range</a></strong></td>
            <td style="width:50%;"><strong><a href="neo.php">The Neo Range</a></strong></td>
          </tr>
          <tr>
            <td><a href="griffin.php"><img src="images/sharp/griffin.jpg" alt=""></a></td>
            <td><a href="neo.php"><img src="images/sharp/neo.jpg" alt=""></a></td>
          </tr>
        </table>
        <br>
        <table style="width:100%;">
          <tr>
            <td style="width:50%;"><strong><a href="sphinx.php">The Sphinx Range</a></strong></td>
            <td style="width:50%;"><strong><a href="polaris.php">The Polaris Range</a></strong></td>
          </tr>
          <tr>
            <td><a href="sphinx.php"><img src="images/sharp/sphinx.jpg" alt=""></a></td>
            <td><a href="polaris.php"><img src="images/sharp/polaris.jpg" alt=""></a></td>
          </tr>
        </table>
        <br>
        <br>
      <h2><a href="utax-range.php">The Utax Range</a></h2>
      <p>The Utax range consists of two different types of machines, which are A4 colour machines and A3 colour machines. With speeds ranging from 21 pages per minute up to 60 pages per minute.</p>
        <table style="width:100%;">
          <tr>
            <td style="width:50%;"><strong><a href="a4utax.php">The A4 Colour Range</a></strong></td>
            <td style="width:50%;"><strong><a href="a3utax.php">The A3 Colour Range</a></strong></td>
          </tr>
          <tr>
            <td><a href="a4utax.php"><img src="images/utax/C2655.jpg"></a></td>
            <td><a href="a3utax.php"><img src="images/utax/6006ci.jpg"></a></td>
          </tr>
        </table>
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
           <input type="text" name="email">
         </p>
         <p>
           <label for='moreinformation'>What would you like more information about?:</label><br>
           <textarea name="moreinformation"></textarea>
         </p>
         <input type="hidden" name="currentpage" value="Photocopiers">
         <input type="submit" name="submit" value="submit">
       </form>
       <script language="JavaScript">
        var frmvalidator = new Validator("myemailform");
        frmvalidator.addValidation("name","req","Please provide your name");
        frmvalidator.addValidation("email","req","Please provide your email");
        frmvalidator.addValidation("email","email","Please enter a valid email address");
      </script>
    </div>
</div>
<?php
include('include/pds-footer.php');
 ?>
