<!--Sharp Huddle Spaces-->
<?php
$pageTitle = 'Sharp Huddle Spaces';
$pageSummary = "Sharp's new, modern way of holding meetings. No more small rooms with only a round table. A enclosed space for quick meetings, with much more high tech features such as built in touchscreen and the ability to wirelessly connect to the display.";
$metaKeywords = "Keywords";
$metaDescription = "The new way to hold a meeting, with a built in touchscreen and wireless display connect, bring your meetings into the 21st Century";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
  <div id="crumbs">
    You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="huddle.php">Huddle Spaces</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <h1>Huddle Spaces</h1>
    <p>A Huddle space is somewhere that you can have a quick meeting without it being completely formal and needed to plan around. The idea of a Huddle Space is that you can easily see if one is free and quickly jump into one and have your quick meeting, in relative privacy and then when you are done leave.<br>
      With the Huddle Space being much smaller than a regular meeting room, you can easily fit multiple into offices where there would have only been one or two meeting rooms, this means that anyone who needs to hold a meeting can do so easily and doesn't have to wait around for the next free slot so they can have a quick chat with a colleague.</p>
    <img src="images//sharp/huddle/Sharp-Huddle.jpg" alt='Sharp Huddle Space' maxwidth="600px" width="50%" maxheight="600px" height="50%"/>
    <p>A Huddle Space is meant for the high tech office or where space is a premium. A Huddle Space also allows you to easily share and annotate documents as part of a group with the in built BigPad which can be linked to almost any device, so you can quickly and easily setup a meeting with the relevant information, make any changes then finish the meeting.</p>
    <p>The Huddle Spaces can be equipped with up to 50" BigPad and power and networks points, as well as a Mini-OPS PC which will allow for wireless display connect to the BigPad so there is no need to run cables if not necessary.<br>
      There are two styles of Huddle Spaces, an open top and a more enclosed top. These two styles are available across the three sizes a two seater, a four seater and a six seater. The nice design feature is that no matter the seat configuration they are the same width and height so they are easy to place multiple together without having to worry about calculating widths and deciding what seat configurations can fit and what cannot.<br>
      Depending on how much privacy you want the more enclosed space, although it doesn't completely block out the noise made from the HuddleSpace it reduces it. So HuddleSpaces aren't for your top secret and confidential meetings, but can be used for brief private chats that can be overheard.</p>
      <table style="width:100%;">
        <tr>
          <td style="width:50%; height:400px;"><img src="images/sharp/huddle/Huddle-O.jpg" alt="Four seater HuddleSpace with open top" width="100%" height="100%"></td>
          <td style="width:50%; height:400px;"><img src="images/sharp/huddle/Huddle-C.jpg" alt="Four seater HuddleSpace with closed top" width="100%" height="100%"></td>
        </tr>
      </table>
    <p>There is more than enough room for two laptops to be sat on the table facing each other, so if necessary everyone can have their own device out and be contributing to the meeting. Unlike in a regular meeting room, where one person leads and the rest just listen and make notes, every person can contribute and lead the discussion if needed, whilst sharing their screen on the BigPad for all to see.</p>
  </div>
  <?php
  include('include/pds-sidebar.php')
  ?>
  <div id="equal-1" class="width-three">
    <p>If you would like more information about the Sharp Huddle Spaces, please get in contact with us.</p>
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
      <input type="hidden" name="currentpage" value="Huddle Space">
      <input type="submit" name="submit" value="submit">
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validator("myemailform");
      frmvalidator.addValidation("name", "req", "Please provide your name");
      frmvalidator.addValidation("email","req", "Please provide your email");
      frmvalidator.addValidation("email","email","Please enter a valid email address");
    </script>
    <br>
  </div>
</div>
<?php
include('include/pds-footer.php')
?>
