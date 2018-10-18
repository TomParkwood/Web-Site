<!--60" Screen-->
<?php
$pageTitle = 'Sharp Big Pad: 60"';
$pageSummary = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
$metaKeywords = "Sharp Big Pad, Big Pad, Sharp Screen, Touch Screen, Meeting Room Screen, Meeting Room Touch Screen, PN-50TC1, PN50TC1";
$metaDescription = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="bigpad.php">Sharp Big Pad</a> &gt; <a href="60inch.php">60 inch Big Pad</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>60" Big Pads</h1>
    <p>The 60" range of Big Pads currently has three models the PN-60SC5, the PN-60TB3 and the PN-TW3A. The different models are aimed at different scenarios for where they will be the best suited, so they all have slightly different features and functions built in.<br>
      For example the PN-60SC5 was designed for education and office meeting rooms, because it features freeze frame and blackout buttons which allows the presenter to have complete control over the screen. Whereas the PN-60TW3A was designed for hospitals and office meeting rooms, so it has DICOM emulation mode which is used when reviewing radiological scans and the PN-60TB3 which doesn't feature either of these functions.</p>
    <table>
      <tr>
        <td style="width:70%;"><img src="images/BigPad/60inch.jpg" alt='60" BigPad' width="100%" height="100%"/></td>
        <td style="width:30%;">
          <ul>
            <li>60" (152.5cm) size with a resolution of 1920x1080</li>
            <li>10 point touch panel with a fast and responsive PCAP capacitive touch.</li>
            <li>Sharp's unique UV2A LCD technology which gives you high visual clarity.</li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  <div id="equal-1" class="width-three">
    <p>If you want more information about the 60" Big Pads, please get in contact with us.</p>
    <form method="post" name="myemailform" action="To-Email.php">
      <p>
        <label for='name'>Enter Name: </label>
        <input type="text" name="name">
      </p>
      <p>
        <label for='email'>Enter Email Address: </label>
        <input type="text" name="email">
      </p>
      <p>
        <label for='moreinformation'>What would you like more information about?: </label><br>
        <textarea name="moreinformation"></textarea>
      </p>
      <input type="hidden" name="currentpage" value='60" Big Pad'>
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validator("myemailform");
      frmvalidator.addValidation("name", "req", "Please provide your name");
      frmvalidator.addValidation("email","req","Please provide your email");
      frmvalidator.addValidation("email","email","Please enter a valid email address");
    </script>
    <br>
  </div>
</div>
<?php
include('include/pds-footer.php')
?>
