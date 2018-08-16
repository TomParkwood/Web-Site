<!--Drivve Image-->
<?php
$pageTitle = "Drivve Image:";
$pageSummary = "Drivve Image allows you to scan in documents, but convert these to OCR compatible, and move them around once they have been scanned in. So you want the invoices to be named by the company it was sent to and the invoice number, Drivve Image can do that.";
$metaKeywords = "Drivve, Drive, Drivve Image, Drive Image, Batch scanning, document routing, barcode scanning, ocr scanning, ocr, optical character recognition";
$metaDescription = "Drivve Image allows you to scan in documents, but convert these to OCR compatible, and move them around once they have been scanned in. So you want the invoices to be named by the company it was sent to and the invoice number, Drivve Image can do that.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="software.php">Software</a> &gt; <a href="drivve.php">Drivve Image</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>Drivve Image</h1>
    <p>Drivve Image allows you to create workflows around invoices and other documents so they can be archived and searched for in the future.<br>
      No more having to search through that months invoices to find the one you want or having to rename all of your scanned in documents, create the folders and have the file names created automatically.<br>
      So all you have to do is scan your documents in and let the program do it for you.
    </p>
    <h3>Batch Scanning?</h3>
    <p>Easily setup batch scanning which after some tweaking will allow you to simply stack the documents into the scanner and let it run through no more having to manually seperate out different documents. As long as there is a structure to the documents which indicate where one starts and the other begins then they will just fly through the machine and create the documents as needed and place the files in to the correct folders.</p>
    <p>There is a full ecosystem of Drivve products which can all be linked together to allow for the best workflow for you, this is the scanning in of documents, organising the stored documents with Drivve DM and easy printer management with Drivve Print.<br>
      As well as the other products there are many addons to Drivve Image, which expand its feature set, to add features such as barcode scanning, ocr support.<br>
      But there is also support for many different connectors to storage platforms, such as OneDrive or Google Docs, which means that you can easily get documents to where they need to be, even if that is sent out via email.</p>
    <h3>What is a common use for Drivve Image?</h3>
    <p>The most common use case for Drivve Image is to automate the archiving of invoices or job sheets. This can be done with as little user intervention as possible, if the formatting for the forms are the same, this is so that it can pick up what type of document it is, and the specific details such as an invoice number.<br>
      Some people just use Drivve Image to clean up their scans, using the inbuilt tools which can de-skew the image, remove blobs(normally caused by hole-punches) and lines, or to simply automate the Bates stamping (annotation and pagination of the document) process, removing the blank pages or simply automatically rotating the documents so the text is always facing the right way.</p>
    <h3>Is there a desktop client to use instead of using the printer?</h3>
    <p>There is another version of Drivve which can be installed alongside the server and on the machine, whichis intended to be isntalled on a desktop, so instead of having to use the printer, you can scan the documents in and upload the files to the program to work on. Depending on your needs the Desktop Client maybe perfect for you or not.<br>
      The good thing about the Desktop Client is that it is as fully features as the one installed onto the printer, if not more so by also being able to upload pre-scanned documents into it as well as new scans.</p>
    <h3>How does it know what to call the files or folders?</h3>
    <p>With the OCR or barcode modules installed, you can pick up data from he document itself. So it can find the company name and create a folder for them, then look for the invoice number and give the file name invoiceXXX, which means when someone goes to look for a specified invoice from that company, all they would have to do is look for the invoice number and it will be there.</p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php');
?>
