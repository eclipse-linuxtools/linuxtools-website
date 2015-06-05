<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools - Man Page Plug-in";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Alexander Kurtakov";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Distributions Man Page plugin provides a common interface for displaying a man page in a view or fetching it's content for embedded display purposes (e.g hover help).
		</p>

		<h2>Current Status</h2>
		<ul>
          <li>View for displaying a man page</li>
          <li>API for fetching preformated simple html</li>
	      <li>Preference page for setting path to the man executable</li>
        </ul>
		<p>
		Note that the Man Page plugin is currently only available directly from the Linux Tools update sites.  It is not found on the
		Eclipse train update sites nor is it built as part of the Eclipse IDE for C/C++ Linux Developers.
		</p>

		<h2>Screenshots</h2>
		<h4>Man page as tooltip</h4>
		<a href="images/tooltip.png"><img src="images/tooltip_thumb.png" alt="Man page as tooltip"/></a>
		<h4>Man page in a view</h4>
		<a href="images/view.png"><img src="images/view_thumb.png" alt="Man page in its own view"/></a>

		<h2>Try it out</h2>
		<p>
		 Follow the <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a> .
		</p>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
