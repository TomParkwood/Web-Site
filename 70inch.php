<!--70" screen-->
<?php
$pageTitle = 'Sharp Big Pad: 70"';
$pageSummary = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
$metaKeywords = "Sharp Big Pad, Big Pad, Sharp Screen, Touch Screen, Meeting Room Screen, Meeting Room Touch Screen, PN-50TC1, PN50TC1";
$metaDescription = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="bigpad.php">Sharp Big Pad</a> &gt; <a href="70inch.php">70 inch Big Pad</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>70" Big Pads</h1>
    <p>There are currently 4 different models of 70" screens, the PN-70TB3, PN-70SC5, PN-70TW3A and the PN-70TH5. There is one major difference for one of these models, the PN-70TH5 features a 4k screen (3840x2160) instead of 1920x1080, so if you need the best picture quality possible then you should look into the 4k version.<br>
      There are slight differences between the other three models, for example the PN-70SC5 was designed for education and office meeting rooms, so it includes a freeze frame and blackout buttons as well as two built in 10W speakers which are more than loud enough to fill large classrooms Whereas, the PN-70TW3A seems to be for a hospital or medical facility, with DICOM emulation for radiology reciewings as one of it's key selling features. The PN-70TB3 is designed for an office meeting room so there is no need for such features as the blackout button or radiological review software to be included. </p>
    <h2>PN-70TB3</h2>
    <table>
      <tr>
        <td style="width:70%;"><img src="images/BigPad/70inch.jpg" alt='70" BigPad' width="100%" height="100%"/></td>
        <td style="width:30%;">
          <ul>
            <li>70" (176.6cm) screen with a resolution of 1920x1080</li>
            <li>It features a fast and responsive infrared 10 point multi-touch which can support up to 4 users at once.</li>
            <li>Using the Sharp Pen software it allows for intuitive writing, annotating and drawing on documents, as well as saving that writing so that it can be kept after the meeting and sent to everyone involved if needed.</li>
          </ul>
        </td>
      </tr>
    </table>
    <h3>Technical Specifications</h3>
    <p>3x HDMI, 1x DisplayPort, 1x VGA, 1x Component (via VGA port) and 2x 3.5mm audio jacks as inputs.<br>
      2x 10W speakers, 1x 3.5mm audio jack and 1x DisplayPort as outputs<br>
      1x LAN port for control<br>
      It also features a VESA mount for easy wall or stand mounting, using the 4/400 x 200 mount.</p>
  </div>
  <h2>PN-70SC5</h2>
  <p>The main difference of the PN-70SC5 compared to the other models of the 70" models is that it features the Freeze-frame and Blackout buttons, which adds wanted features for teachers because it gives them greater control over what is being shown on the screen, so they can leave work on the screen while they can get on with other work in the background.</p>
  <table>
    <tr>
      <td style="width:70%;"><img src="images/BigPad/70inchSC5.jpg" alt='70" SC5 BigPad' width="100%" height="100%"/></td>
      <td style="width:30%;">
        <ul>
          <li></li>
        </ul>
      </td>
    </tr>
  </table>
  <h3>Technical Specifications</h3>
  <p>3x HDMI, 1x VGA, 1x Component (via VGA port), 1x Component (switchable), 1x 3.5mm audio jack and 1x RCA R/L audio jacks as inputs.<br>
    2x 10W speakers and 1x 3.5mm audio jack as outputs.<br>
    1x RS232C IN, 1x USB and 1x USB Service port (covered) for control<br>
    It also features a VESA mount for easy wall or stand mounting, using the 4/400 x 400 mounts.</p>
  <h2>PN-70TW3A</h2>
  <p>difference between everything</p>
  <table>
    <tr>
      <td style="width:70%;"><img src="images/BigPad/70inchtw3a.jpg" alt='70" TW3A BigPad' width="100%" height="100%"/></td>
      <td style="width:30%;">
        <ul>
          <li></li>
        </ul>
      </td>
    </tr>
  </table>
  <h3>Technical Specifications</h3>
  <p>3x HDMI, 1x DisplayPort, 2x VGA, 1x Component (via VGA port) and 2x 3.5mm audio jacks as inputs.<br>
    2x 10W speakers, 1x 3.5mm audio jack and 1x DisplayPort as ouputs.<br>
    1x RS232C IN, 2x USB and 1x LAN port for control.<br>
    It also features a VESA mount for easy wall or stand mounting, using the 4/400 x 200 mounts.</p>
  <div id="equal-1" class="width-three">
    <p>If you want more information about the 70" Big Pads, please get in contact with us.</p>
    <form method="post" name="myemailform" action="To-Email.php">
      <p>
        <label for='name'>Enter Name: </label>
        <input type="text" name="name">
      </p>
      <p>
        <label for='email'>Enter Email: </label>
        <input type="text" name="email">
      </p>
      <p>
        <label for='moreinformation'>What would you like more information about?: </label><br>
        <textarea name="moreinformation"></textarea>
      </p>
      <input type="hidden" name="currentpage" value='40" Big Pad'>
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validator("myemailform");
      frmvalidator.addValidation("name","req","Please provide your name");
      frmvalidator.addValidation("email","req","Please provide your email");
      frmvalidator.addValidation("email","email","Please enter a valid email address");
    </script>
    <br>
  </div>
</div>
<?php
include('include/pds-footer.php')
 ?>
