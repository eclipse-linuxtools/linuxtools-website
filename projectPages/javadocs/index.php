<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools - Javadocs Support";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Eric Williams";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Tools Javadocs plugin displays Javadoc documents in Eclipse's built in
		help system. For example, if one were to install a Javadoc package (i.e., xmvn-javadoc),
		the Javadocs from that package would be browseable in the Eclipse help system. This plugin
		is also capable of crawling user specified directories, and displaying the Javadocs within
		those directories in the Eclipse help system.
		</p>

		<h2>Current Status</h2>
		<p>
		By default the plugin crawls /usr/share/javadoc for valid Javadocs to display. It can also display Javadocs
		present in user specified directories.
		</p>

		<h2>Future Plans</h2>
		<ul>
		  <li> Allow indexing and searching of Javadocs within the Eclipse help system </li>
        	</ul>

		<h2>Try it out</h2>
		<p>
		  You can download the plugin from our <a href="http://www.eclipse.org/linuxtools/downloads.php">update site</a>, or 
		  check the project plugins out of Git directly from eclipse.org at git://git.eclipse.org/gitroot/linuxtools/org.eclipse.linuxtools.git.
		<br/><br/>
		</p>
	<br/><br/><br/>
	</div>
	
	
	<div id="rightcolumn">
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
