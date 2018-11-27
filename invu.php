<!--InvuDM-->
<?php
$pageTitle = "Invu:";
$pageSummary = "Invu Document Management allows you to take control over your documents and have them stored in a centralised area, which is better for everyone because you can be assured that you are always working on the latest copies of documents and that a newer one isn't on someones computer and not being shared to everyone else.";
$metaKeywords = "Invu, Digital Records, Document Management, Invu addons, document audit trail, reduce storage space, remote access, document management byod, remote working, process automation";
$metaDescription = "Invu Document Management allows you to take control over your documents and have them stored in a centralised area, which is better for everyone because you can be assured that you are always working on the latest copies of documents and that a newer one isn't on someones computer and not being shared to everyone else.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="software.php">Software</a> &gt; <a href="invu.php">Invu DM</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>Invu Document Mangement</h1>
    <img src="images/software/Invu.jpg" alt="Invu Document Management Software" style="float:right" width="50%">
    <h3>What does Invu DM do?</h3>
    <p>Invu helps you keep on top of your digital records. It does this by keeping a central copy of the documents and everyone saves their work onto the central area.<br>
      Invu would benefit your company by keeping down storage costs by not having to have multiple copies of files on everyon's workstations. It also simplfies the backup procedure, by instead of having to ensure that the user saves their files to the correct areas they are all stored in one area, meaning that you don't have to worry about someone losing all of their work which they saved to the wrong area.<br>
      By having a centralised copy of the files it allows for everyone to know what the latest version is and that they aren't working on a file which has already been changed by someone else.<br>
      Invu also offer a wide range of addons which further expand the capabilities of the software, such as turning scanned documents into searchable and editable files which can also help to reduce data entry times by automating the procedure, an email manager which can flag up if the job has already been done by another person or they are working on it, thus ensuring that two people aren't working on the same task.</p>
    <h3>How can Invu benefit your company?</h3>
    <p>Invu will drastically help to reduce the time spent searching for documents only to find out that someone else had already made the change that you have just done.<br>
      Easily search the entire archive of files for what you want, no more having to send internal emails asking for files.<br>
      Quickly import your existing and new files into the appropriate areas for storage, so that anybody with access can easily find the files and work on them. It also takes the stress off of managers if someone is on long term sick because their work can easily be found and assigned to people to work on.<br>
      Ensures that all of the data is kept safe by using encryption and with a full audit trail so if something does go wrong you know where to start looking.<br>
      Invu also helps to reduce the storage space needed as a whole, because it helps to eliminate duplicate files on the network with there only be a central copy so it helps to keep your storage requirements down.<br>
      Easier remote access for BYOD and remote working will ensure that users can always get on with their work.</p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
  <div id="equal-1" class="width-three">
    <p>If you would like more information on the Invu software, please get in contact with us.</p>
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
      <input type="hidden" name="currentpage" value="Software: InvuDM">
      <input type="submit" name='submit' value="submit">
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
