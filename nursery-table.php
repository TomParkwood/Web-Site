<!-- Sharp interactive nursery table-->
<?php
$pageTitle = "Interactive Nursery Table:";
$pageSummary = 'The Sharp Nursery Table is a 40" tablet which runs completely off of batteries, so it is ideal for a early learning environment. With its included educational material and games with up to 4 users at a time which will help to teach sharing and cooperation.';
$metaKeywords = "Nursery Table, Interactive Table, Sharp Nursery table, 40 inch tablet, table tablet, educational tablet, battery tablet, multi user tablet.";
$metaDescription = 'The Sharp Nursery Table is a 40" tablet which runs completely off of batteries, so it is ideal for a early learning environment. With its included educational material and games with up to 4 users at a time which will help to teach sharing and cooperation.';
include('include/pds-main.php');
include('include/pds-header.php');
 ?>
<div id="crumbs-wrapper">
  <div id="crumbs">
     You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a> &gt; <a href="nursery-table.php">Nursery Table</a>
  </div>
</div>
<div id="main-wrapper">
  <div id="equal-1" class="width-three">
    <table style="width:100%">
      <tbody>
        <tr>
          <td style="width: 40%;">Ok so it isn't a photocopier, but our Sharp partners have released a 40" Interactive Nursery Table.<br>
            The amazing feature of this table is the battery. You are not restricted to the wall plug. This can be rolled to the position you want.<br>
            There is also another version which is being worked on at the moment which includes height adjustment as well as screen rotation, so it is better suited for adult use.<br>
            One of the areas which could benefit from a large interactive tablet is care providers, not just for toddlers, but providing dementia patients with interactive games to help stimulate their brains.
          </td>
          <td style="width=:60%;"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Qk4eKb-cnO0?rel=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <tr>
        <td style="width: 60%;"><img src="images/Sharp-Table.png" alt="Sharp Nursery Table" width="100%" height="100%"></td>
          <td style="width: 40%;">
          <ul>
            <li>Toughened 6mm thick safety glass screen.</li>
            <li>Screen which features both tilting and locking screen position.</li>
            <li>Educational software loaded as standard.</li>
            <li>Easily navigable menus for child led learning.</li>
            <li>Up to 12 hour battery life, so you don't have to stop the children from using it during the day.</li>
            <li>Lock the device to a specific app so the children cannnot change the app whenever they want, the teacher will need to do so.</li>
            <li>Built in speakers so you can easily watch video content on it, whether that be streaming or from a USB stick plugged in to the back of the unit.</li>
          </ul>
        </td>
      </tr>
    </table>
  <p>The table isn't just an android tablet, it can also function as a 40" touch screen for any computer. So if you want to teach a class using a touch screen but it doesn't run on android you can plug a computer in and it will work as a second screen for the device.<br>
  The table can easily be used for meetings and displays, not just for games and apps, For parents evenings or staff meetings it can be used to show work done, or information which needs to be shown to staff or parents.<br>
  </p>
  <br>
  <p>If you are interested in the Sharp Interactive Nursery Table then, please get in contact with us.</p>
  <form method="post" name="myemailform" action="To-Email.php">
    <p>
      <label for='name'>Enter Name: </label><br>
      <input type="text" name="name">
    </p>
    <p>
      <label for='email'>Enter Email Address:</label><br>
      <input type="text" name="email">
    </p>
    <p>
      <label for="moreinformation">What would you like more information about?:</label><br>
      <textarea name="moreinformation"></textarea>
    </p>
    <input type="hidden" name="currentpage" value="Products: Sharp Nursery Table">
    <input type="submit" name='submit' value="submit">
  </form>
  <script language="JavaScript">
    var frmvalidator = new Validator("myemailform");
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email");
    frmvalidator.addValidation("email","email","Please enter a valid email address");
  </script>
  </div>
  <?php
  include('include/pds-sidebar.php');
  ?>
</div>
<?php
include('include/pds-footer.php');
 ?>
