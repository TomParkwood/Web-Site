<?php
$pageTitle="Print Control:";
$pageSummary="With Print Control; Software you can track, analyze, allocate and, if necessary, recover the costs of every document that any employee sends to any networked printer, copier or multi-function device.";
include('include/pds-main.php');
include('include/pds-header.php');
?>
<div id="crumbs-wrapper">
	<div id="crumbs">
		You are at: <a href="index.php">Home</a> &gt; <a href="products.php">Products</a>
		&gt; <a href="print-control.php">Print Control</a></div>
</div>
<div id="main-wrapper">
	<div id="equal-1" class="width-three">
		<div id="main-span">
			<h1>Print Control Software</h1>
			<div class="left">
				<img alt="" src="images/products4.jpg" title="" /> </div>
			<div class="left" style="width: 550px">
				<p>The paperless office is not going to happen.</p>
				<p>Paper remains the preferred way for businesses to convey information. And for workers who don't think your company's networked communal printers provide sufficient privacy and convenience, personal desktop printers remain their preferred way for getting ideas onto paper. It's a preference that wastes money, time and resources every time	they hit the print key.</p>
				<p>Now you can reduce print waste and costs while at the same time providing all the printing security and convenience employees need</p>
				<p>With Print Control Software you can track, analyze, allocate	and, if necessary, recover the costs of every document that any	employee sends to any networked printer, copier or multi-function	device.</p>
				<ul>
					<li>Reduce the expense of equipment over-buying and under-use</li>
					<li>Direct output to the most efficient device</li>
					<li>Eliminate unauthorized printing and copying</li>
					<li>Enforce quotas on color output</li>
					<li>Allocate output costs to users, departments, projects or clients</li>
					<li>Protect document security and confidentiality</li>
					<li>Learn exactly how printers and copiers are being used</li>
					<li>Reduce IT support requirements</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
	include('include/pds-sidebar.php');
	?>
</div>
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
		<input type="hidden" name="currentpage" value="Print Control">
		<input type="submit" name="submit" value="submit">
	</form>
	<script language="JavaScript">
		var frmvalidator = new Validator("myemailform");
		frmvalidator.addValidation("name","req","Please provide your name");
		frmvalidator.addValidation("email","req","Please provide your email");
		frmvalidator.addValidation("email","email","Please enter a valid email address");
	</script>
</div>
<?php
include('include/pds-footer.php');
?>
