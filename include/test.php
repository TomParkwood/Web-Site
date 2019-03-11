<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>

<div id="equal-4" class="sidebar width-four" align="right">
	<div id="summary">
		<p>&quot;<?php echo $pageSummary; ?>&quot;.</p>
	</div>
	<div class="separator">
	</div>

	<?php
		if( $pageName == "a3utax.php" )
		{
			echo "<h1>Skywell</h1>";
			echo "<p>A revoluntionary product by Sharp is the Skywell.<br>What appears to be a simple water machine, until you notice that there is no water jugs or plumbing but it still dispenses fresh hot and cold water each day.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>A4 Utax</h1>";
			echo "<p>With all of the features of the larger A3 in a smaller footprint up to 26 pages per minute.</p>";
			echo "<p><a href=\"a4utax.php\">A4 Utax Range</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "a4utax.php" )
		{
			echo "<h1>Skywell</h1>";
			echo "<p>A revolutionary product by Sharp is the Skywell.<br>What appears to be a simple water machine, until you notice that there is no water jugs or plumbing, but it still dispenes fresh hot and cold water each day.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>A3 Utax</h1>";
			echo "<p>If you need something a bit more powerful or need to be able to print A3. Look no further than the A3 range by UTAX which go up to 60 pages per minute.</p>";
			echo "<p><a href=\"a3utax.php\">A3 Utax Range</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "about.php" )
		{
			echo "<h1>Photocopiers &amp; Printers</h1>";
			echo "<p>We supply a range of copiers, printers and MFDs from a variety of manufacturers. Whatever your requirements we can supply you with the right machine for you business.</p>";
			echo "<p><a href=\"photocopiers.php\">Photocopiers</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "bigpad.php" || $pageName == "40inch.php" || $pageName == "50inch.php" || $pageName == "60inch.php" || $pageName == "65inch.php" || $pageName == "70inch.php" || $pageName == "80inch.php" )
		{
			echo "<h1>Skywell</h1>";
			echo "<p>Another revolutionary product by Sharp is the Skywell.<br>A water machine that doesn't rely on plastics or plumbing. It simply uses the air to generate fresh drinking water.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "contact.php" || $pageName == "general-enquiry-form.php" || $pageName == "meter-reading-form.php" || $pageName == "service-request-form.php" )
		{
			echo "<h1>Quick Links</h1>";
			echo "<p><a href=\"service-request-form.php\">Service Request Form</a></p>";
			echo "<p><a href=\"meter-reading-form.php\">Meter Reading Form</a></p>";
			echo "<p><a href=\"general-enquiry-form.php\">General Enquiry Form</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "drivve.php" || $pageName == "laserfiche.php" || $pageName == "invu.php" )
		{
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the ability to embed PaperCut directly into the touchscreen makes using Software solutions easier than ever before.</p>";
			echo "<p><a href=\"Griffin2.php\"></a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "faq.php" )
		{
			echo "<h1>Glossary</h1>";
			echo "<p>We also have a glossary of common photocopier &amp; computing terms.</p>";
			echo "<p><a href=\"glossary.php\">Browse Glossary</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "justprint.php" )
		{
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the ability to embed PaperCut directly into the touchscreen makes using Software solutions easier than ever before.</p>";
			echo "<p><a href=\"Griffin2.php\"></a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "news-item.php" )
		{
			$max = 0;
			if( $items > 5 )
			{
				$max = 5;
			}
			echo "<p><a href=\"news.php\">Main News Page</a></p>";
			echo "<h1>Other News</h1>";
			for( $count = $items; $count > $max; $count -= 1)
			{
				echo "<p><a href=\"news-item.php?id=";
				echo $count;
				echo "\">";
				echo $newsTitle[$count];
				echo "</a></p>";
			}
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "Papercut.php" || $pageName == "papercut-versions.php" )
		{
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the ability to embed PaperCut directly into the touchscreen makes using PaperCut the easiest it has ever been.</p>";
			echo "<p><a href=\"Griffin2.php\">Sharp Griffin 2 Range</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "photocopiers.php" )
		{
			echo "<h1>PaperCut</h1>";
			echo "<p>A perfect companion to a new photocopier, gives you even more control over your new device by being able to track and limit prints on a user basis as well as set rules for how print jobs can be printed.</p>";
			echo "<p><a href=\"Papercut.php\">PaperCut</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Just Print</h1>";
			echo "<p>Just Print is a new way of getting a printer, all you have to do is pay for what you print. No rental, no leasing and no buying.</p>";
			echo "<p><a href=\"justprint.php\">Just Print</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Skywell</h1>";
			echo "<p>A revolutionary product offered by Sharp is the Skywell.<br>A water machine that doesn't rely on plastics or plumbing. It simply uses the air to generate fresh drinking water.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "print-audit.php" )
		{
			echo "<h1>PaperCut</h1>";
			echo "<p>If your print costs are spiraling out of control and want real time tracking of who and what is printing.<br>Look no further than PaperCut.</p>";
			echo "<p><a href=\"papercut.php\">PaperCut</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "ProfiPack.php" )
		{
			echo "<h1>Skywell</h1>";
			echo "<p>Another eco-friendly product that we can offer is the Skywell by Sharp.<br>What appears to be a simple water machine, until you notice that there are no water jugs or plumbing. But it still dispenses fresh hot and cold water each day.";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the different configurations available you can get a new photocopier without any compromises which does exactly what you need it to do.</p>";
			echo "<p><a href=\"Griffin2.php\">Sharp Griffin 2 Range</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "Sharpdesk.php" )
		{
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the different configurations available you can get a new photocopier without any compromises which does exactly what you need it to do.</p>";
			echo "<p><a href=\"Griffin2.php\">Sharp Griffin 2 Range</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Sharp Big Pads</h1>";
			echo "<p>Sharp Big Pads are a range of large touch screens ranging from 40\" to 80\".<br>Some models allow for up to 3 to be grouped together as one surface.<br>Perfect for classrooms or meeting rooms.</p>";
			echo "<p><a href=\"bigpad.php\">Sharp Big Pads</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "skywell.php" )
		{
			echo "<h1>HSM ProfiPack</h1>";
			echo "<p>Another eco-friendly product that we offer is the ProfiPack. The ProfiPack aims to eliminate the need for bubble wrap and padding materials, by using waste cardboard and transforming it into packaging material.<br>So instead of only recycling your cardboard you can also reuse it for another purpose before it gets recycled.</p>";
			echo "<p><img src=\"images/Packaging.jpg\" width=\"250px\" alt=\"Preview of the packaging made by the ProfiPack\"></p>";
			echo "<p><a href=\"ProfiPack.php\">HSM ProfiPack</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Photocopiers</h1>";
			echo "<p>The Griffin 2 range of photocopiers by Sharp, which go up to 40 pages per minute, so they are perfect for a small to medium office size.<br>With the different configurations available you can get a new photocopier without any compromises which does exactly what you need it to do.</p>";
			echo "<p><a href=\"Griffin2.php\">Sharp Griffin 2 Range</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of batteru power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Sharp Big Pads</h1>";
			echo "<p>Sharp Big Pads are a range of large touch screens ranging from 40\" to 80\".<br>Some models allow for up to 3 to be grouped together as one surface.<br>Perfect for classrooms or meeting rooms.</p>";
			echo "<p><a href=\"bigpad.php\">Big Pads</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "software.php" )
		{
			echo "<h1>Photocopiers</h1>";
			echo "<p>A perfect pairing for software is a new photocopier, with the latest machines you are guaranteed the best experience with printing such as PaperCut.</p>";
			echo "<p><a href=\"photocopiers.php\">Photocopiers</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"nursery-table.php\">Sharp Nursery Table</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Sharp Big Pads</h1>";
			echo "<p>Sharp Big Pads are a range of large touch screens ranging from 40\" to 80\".<br>Some models allow for up to 3 to be grouped together as one surface.<br>Perfect for classrooms or meeting rooms.</p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Skywell</h1>";
			echo "<p>A revolutionary product by Sharp is the Skywell.<br>What appears to be a simple water machine, until you notice that there is no water jugs or plumbing but it still dispenses fresh hot and cold water each day.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "support.php" )
		{
			echo "<h1>F.A.Q</h1>";
			echo "<p>If you are having a problem please have a look at our F.A.Q page. It may very well hold the answer and save time as well.</p>";
			echo "<p><a href=\"faq.php\">Browse F.A.Q Page</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Photocopiers</h1>";
			echo "<p>A perfect pairing for software is a new photocopier, with the latest machines you are guaranteed the best experience with printin such as PaperCut.</p>";
			echo "<p><a href=\"photocopiers.php\">Photocopiers</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
		}

		if( $pageName == "utax-range.php" )
		{
			echo "<h1>Skywell</h1>";
			echo "<p>A revoluntionary product by Sharp is the Skywell.<br>What appears to be a simple water machine, until you notice that there is no water jugs or plumbing but it still dispenses fresh hot and cold water each day.</p>";
			echo "<p><a href=\"skywell.php\">Skywell</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Software</h1>";
			echo "<p>We can offer you a range of software for your copiers.<br>This ranges from PaperCut, Drivve, Laserfiche and more.<br>All with the goal of improving your printing experience.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Nursery Table</h1>";
			echo "<p>Sharp's new 40\" Nursery Table.<br>Unlike any other 40\" tablets it runs off of battery power and has a multi-point tiltable screen so children of all heights can use it.</p>";
			echo "<p><a href=\"software.php\">Software</a></p>";
			echo "<div class=\"separator\"></div>";
			echo "<h1>Sharp Big pad</h1>";
			echo "<p>Sharp Big Pads are a range of large touch screens ranging from 40\" to 80\".<br>Some models even allow for up to 3 to be grouped together as one surface.<br>Perfect for classrooms or meeting rooms.</p>";
			echo "<div class=\"separator\"></div>";
		}

	?>

	<h2>Learn More</h2>
	<p class="center">If you would like any more information about any of our products
	or services, please do not hesitate to get in touch.</p>
	<p class="center"><a href="contact.php">Contact Us</a></p>
</div>
