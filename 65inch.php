<!--65" Screen-->
<?php
$pageTitle = 'Sharp Big Pad: 65"';
$pageSummary = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
$metaKeywords = "Sharp Big Pad, Big Pad, Sharp Screen, Touch Screen, Meeting Room Screen, Meeting Room Touch Screen, PN-50TC1, PN50TC1";
$metaDescription = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="bigpad.php">Sharp Big Pad</a> &gt; <a href="65inch.php">65 inch Big Pad</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>65" Big Pads</h1>
    <p>The 65" range of Big Pads is the middle range of size, it only has one model the PN-65SC1. The screen also features a Freeze-Frame button which can keep a classrooms attention on the screen whilst getting on with work. The PN-65SC1 was designed for schools and meeting rooms, with the idea of giving the presenter complete control.</p>
    <table>
      <tr>
        <td style="width:70%;"><img src="images/BigPad/65inch.jpg" alt='65" BigPad' width="100%" height="100%"/></td>
        <td style="width:30%;">
          <ul>
            <li>65" (163.9cm) screen with a resolution of 1920x1080</li>
            <li>One of the screens most powerful features is the freeze frame button which effectively pauses what is on the display whilst they can continue with other work on the computer, without it showing on the Big Pad.</li>
            <li>With Sharp's "Pen-on-Paper" user experience there is no learning involved when using the Sharp pens, it has been designed to feel like you are writing on a piece of paper.</li>
            <li>Using Sharp's Display Connect software you can connect up to 50 devices to the Big Pad for easy collabortion and file sharing between devices.</li>
            <li>With the optional Mini-OPS board you can eliminate trailing cables and allows for up to 10 devices to connect wirelessly to the Big Pad.</li>
          </ul>
        </td>
      </tr>
    </table>
    <h3>Technical Specifications</h3>
    <p>Inputs - 4x HDMI, 1x DisplayPort, 1x VGA (Mini D-SUB 15 pin) and a 3.5mm audio jack.<br>
      Outputs - 1x 3.5mm audio jack.<br>
      Control - 1x RS232C IN and 2x USB.<br>
      It also features a VESA mount for easy wall or stand mounting, using the 4/400 x 400mm standard.</p>
    <p>If you want more information abou the 65" Big Pads, please get in contact with us.</p>
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
      <input type="hidden" name="currentpage" value='65" Big Pad'>
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
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php')
?>
