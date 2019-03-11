<!--PaperCut Versions-->
<?php
$pageTitle = "PaperCut Versions";
$pageSummary = "PaperCut is the largest print management suite, which will revolutionise how you manage your printing and printers. Using follow-me printing it will revolutionise your printers, by not having documents sitting on the printer and you can just walk up to any printer and it will print out your documents.";
$metaKeywords = "PaperCut MF, PaperCut NG, print tracking, track prints, follow me printing, print authentication";
$metaDescription = "PaperCut is the largest print management suite, which will revolutionise how you manage your printing and printers. Using follow-me printing it will revolutionise your printers, by not having documents sitting on the printer and you can just walk up to any printer and it will print out your documents.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="software.php">Software</a> &gt; <a href="papercut.php">PaperCut</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>PaperCut Versions</h1>
    <img src="images/software/papercut.png" style="float:right" width="50%">
    <p>There is currently two different versions of PaperCut which are currently offered, they are both targeted towards the different needs of organisations.<br>
      The more simplified version is PaperCut NG, which can monitor and assign costs to what is being printed. This is useful where you want control over how much and who is printing and be able to create rules on how print jobs are printed, such as forcing black and white only, or moving large print jobs to the cheapest machine.<br>
      The more advanced version is PaperCut MF, which has all of the features of PaperCut NG but also enables a small application to be embedded within the photocopiers for greater control over who has access to these devices and more monitoring of what is being done on the machine, such as tracking scans and copying.<br>
      <br>
      Whereas PaperCut NG can only track print jobs that have been sent to the print queue, PaperCut MF is able to track and monitor everything that is done on the machine once the user has logged in, this includes copying, scanning and printing.<br>
      With PaperCut MF you have to login at the machine before you can use the machine so it can effectively lock down the machine to unwanted users from using the machine if you don't want them to.<br>
      PaperCut MF also allows for more control and versatility on what it can do in regards to converting files to different formats, printing from emails and much more.
    </p>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
  <div id="equal-1" class="width-three">
    <p>If you would like more information about PaperCut and what it can do for you then, please get in contact with us.</p>
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
      <input type="hidden" name="currentpage" value="Software: PaperCut">
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
