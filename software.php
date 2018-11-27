<!--Software-->
<?php
$pageTitle = "Software:";
$pageSummary = "Printing software is all about making your life easier and more productive. Print software comes in all sorts, some serves one main purpose whereas some are a suite and do basically anything you would want a printer to do. Read more about the different software utilities which we can offer and choose which is best for you.";
$metaKeywords = "Drivve Image, Invu DM, Invu Document Management, Drivve, Drive Image, Laserfiche, Laser fish, PaperCut, PaperCut MF, PaperCut NG, Sharpdesk, Sharp desk, Document Management, Print Audit, Print Tracking, Printing Audit.";
$metaDescription = "Printing software is all about making your life easier and more productive. Print software comes in all sorts, some serves one main purpose whereas some are a suite and do basically anything you would want a printer to do. Read more about the different software utilities which we can offer and choose which is best for you.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php"> Home</a> &gt; <a href="software.php">Software</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <div class="main-span">
      <h1>Drivve Image</h1>
      <div class="left" style="width:40%;">
        <img class="product" src="images/software/drivve.png" alt="Drivve Image" width="100%"/>
      </div>
      <div class="right" style="width:60%;">
        <p>Drivve Image allows you to save time and money on archiving documents, by utilising OCR and barcode scanning to complete workflows. Such as moving invoices into specific folders, placing documents sent by a company into their own folder, naming files by the date on the letter just to name a few.</p>
        <p><a class="more" href="drivve.php"><img src="images/read-more.png" alt=""></a></p>
      </div>
    </div>
    <div class="separator">
    </div>
    <div class="main-span">
      <h1>Invu Document Mangement</h1>
      <div class="left" style="width:40%;">
        <img class="product" src="images/software/invu.jpg" alt="Invu Document Management" width="100%"/>
      </div>
      <div class="right" style="width:60%;">
        <p>Invu Document Mangement centralizes your documents and improves workflow by streamlining the prcess to get documents to where they need to be internally and provides automation for data entry.</p>
        <p><a class="more" href="Invu.php"><img src="images/read-more.png" alt=""></a></p>
      </div>
    </div>
    <div class="separator">
    </div>
    <div class="main-span">
      <h1>Laserfiche</h1>
      <div class="left" style="width:40%;">
        <img class="product" src="images/software/laserfiche.png" alt="Laserfiche" width="100%"/>
      </div>
      <div class="right" style="width:60%;">
        <p>Laserfiche is a software package which allows for easier storing of documents as well as transforming all scanned documents into OCR searchable ones.</p>
        <p><a class="more" href="Laserfiche.php"><img src="images/read-more.png" alt=""></a></p>
      </div>
    </div>
    <div class="separator">
    </div>
    <div class="main-span">
      <h1>PaperCut</h1>
      <div class="left" style="width:40%;">
        <img class="product" src="images/software/papercut.png" alt="PaperCut" width="100%"/>
      </div>
      <div class="right" style="width:60%;">
        <p>PaperCut allows you to take control of your print environment, so you can assign print costs to departments, use biometrics to authenticate yourself at the printer or simply automate reports. It is as powerful as you make it.<p>
        <p><a class="more" href="papercut.php"><img src="images/read-more.png" alt=""></a></p>
      </div>
    </div>
    <div class="separator">
    </div>
    <div class="main-span">
      <h1>Sharpdesk</h1>
      <div class="left" style="width:40%;">
        <img class="product" src="images/software/sharpdesk.png" alt="Sharpdesk" width="100%"/>
      </div>
      <div class="right" style="width:60%;">
        <p>Sharpdesk allows for easy viewing, annotation, editing and organisation of scanned documents. Sharpdesk comes with OCR capability meaning that you can always find the scanned document you want with text searching.</p>
        <p><a class="more" href="sharpdesk.php"><img src="images/read-more.png" alt=""></a></p>
      </div>
    </div>
  </div>
  <br><br><br>
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
      <input type="hidden" name="currentpage" value="Software Menu">
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
