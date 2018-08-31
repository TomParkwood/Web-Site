<?php
$pageTitle="Sharpdesk:";
$pageSummary="Sharpdesk allows you to take control over your scanned documents by making them OCR compatible and automatically place them into the correct folders. Find out more information about Sharpdesk and how it can benefit you.";
$metaKeywords="Sharp Desk, sharpdesk, ocr, scanned documents, document thumbnails, editing scans, edit scans, image editor, optical character recognition.";
$metaDescription="Sharpdesk allows you to take control over your scanned documents by making them OCR compatible and automatically place them into the correct folders. Find out more information about Sharpdesk and how it can benefit you.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="software.php">Software</a> &gt; <a href="sharpdesk.php">Sharpdesk</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>Sharpdesk</h1>
    <h3>What can Sharpdesk do for you?</h3>
    <p>Sharpdesk allows the easy viewing, organiastion, annotation and editing of scanned documents.<br>
      It converts paper based documents into those with OCR (Optical Character Recognition) capability. Meaning that you can search for whats included within the document, edit the text and much more functionality for scanned documents. As well as thumbnail viewing of documents, so you don't always have to open up each document to try and find the one you are after just look at the preview picture.<br>
      Sharpdesk also offers the ability to search for files using metadata, this is also included for searching .tif and image .pdf file, so you can even find content from within these document types.<br>
      Sharpdesk also features an inbuilt image editor for simple editing of files, which can make them better for presentation and printing. You also have the ability to easily merge files of many different types into one document which can greatly help with marketing and ease of use.<br>
      One of the most used features is the image enhancement, which improves the quality of scanned in documents, by straightening edges, getting rid of small dots or even automatically rotating the pages so the text is facing the correct way.</p>
    <h3>What are the benefits of Sharpdesk?</h3>
    <p>Being able to search for scanned documents by whats in them rather than by name, this eliminates the need to search through all of your pdf files by opening them if you cannot remember what it was called in a month or two when you need it.<br>
      Sharpdesk also fully integrates with Sharp OSA Network Scanner Tool, it simplifies the process of getting the scanned documents into the program and also converts them directly into OCR compatible files.<br>
      Sharpdesk can helps making marketing materials easier to produce by enabling different file types to be put together in one document, so there is no more having to print out two parts of the document and place the paper copies together or having to have two electronic files to send out. It looks better to send out one files with all of the information needed.<br>
      A key fact is that you can convert your pre-existing scanned documents into OCR capable ones, it doesn't just work for newly scanned files, so you can convert your archive of documents into ones which can easily be found when needed.</p>
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
      <input type="hidden" name="currentpage" value="Software: Sharpdesk">
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
