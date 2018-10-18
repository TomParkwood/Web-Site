<!--50" Screen-->
<?php
$pageTitle = 'Sharp Big Pad: 50"';
$pageSummary = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
$metaKeywords = "Sharp Big Pad, Big Pad, Sharp Screen, Touch Screen, Meeting Room Screen, Meeting Room Touch Screen, PN-50TC1, PN50TC1";
$metaDescription = "With the Big Pad range from Sharp you can make your meetings more interactive and user friendly. By allowing for up to 50 devices to be wirelessly connected to it, so it can be a truely collaborative experience. Sizes ranging from 40 inch all the way up to 80 inch, so it is perfect for a meeting room all the way to a big classroom.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="bigpad.php">Sharp Big Pad</a> &gt; <a href="50inch.php">50 inch Big Pad</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>50" Big Pads</h1>
    <p>The 50" range is the smallest range currently offered by Sharp and have been designed to be used within huddle spaces and smaller meeting rooms with the idea of improving the functionality of meetings.</p>
    <table>
      <tr>
        <td style="width:70%;"><img src="images/BigPad/50inch.jpg" alt='50" BigPad' width="100%" height="100%"/></td>
        <td style="width:30%;">
          <ul>
            <li>50" (125.7cm) size with a resolution of 1920x1080</li>
            <li>10 point touch panel with a fast and responsive PCAP capacitive touch</li>
            <li>Designed for Huddle spaces and meeting rooms, but could also be used for digital signage</li>
            <li>With the optional Mini-OPS slot it will allow for quick and easy BYOD collaboration, with a wireless connection to the screen</li>
            <li>Built in web camera mount so no more having to balance a web cam on the top of the screen</li>
            <li>Although the 50" Big Pad was designed to be used in Huddle spaces and small meeting rooms, it really is up to you with how you use them, they can be used as advertisement screens or welcome screens for a reception</li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  <div id="equal-1" class="width-three">
    <p>If you want more information about the 50" Big Pads, please get in contact with us.</p>
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
      <input type="hidden" name="currentpage" value='50" Big Pad'>
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validatior("myemailform");
      frmvalidator.addValidation("name","req", "Please provide your name");
      frmvalidator.addValidation("email","req","Please provide your email");
      frmvalidator.addValidation("email","email","Please enter a valid email address");
    </script>
    <br>
  </div>
</div>
<?php
include('include/pds-footer.php')
?>
