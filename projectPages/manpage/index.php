<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Man Page Plug-in";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Alexander Kurtakov";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Distributions Man Page plugin provides a common interface for displaying a man page in a view or fetching it's content for embedded display purposes (e.g hover help).
		</p>

		<h2>Current Status</h2>
		<p>
		<ul>
          <li>View for displaying a man page</li>
          <li>API for fetching preformated simple html</li>
	      <li>Preference page for setting path to the man executable</li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		 <center>
		    <img src="images/tooltip.png">
		    <br>
		    Man page as tooltip
		  </center>
		  <center>
		    <img src="images/view.png">
		    <br>
		    Man page view
		  </center>
		</p>

		<h2>Try it out</h2>
		<p>
		 Follow the <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a> .
		</p>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	    <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
     </div>
    </div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
