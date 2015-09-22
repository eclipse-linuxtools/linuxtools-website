<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools - Docker Tooling Support";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Roland Grunberg";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
                The Docker Tooling plugin provides the ability to manage Docker images and containers from within the Eclipse IDE.
		<p>
		</p>

		<h2>Current Status</h2>
		<p>
		Most of the commands available through the Docker Client commandline interface are supported, as well as integrations within the C/C++ Development Tooling (CDT) for running/debugging projects within containers.
		</p>

		<h2>Future Plans</h2>
		<p>
		See the <a href="https://wiki.eclipse.org/Linux_Tools_Project/Docker_Tooling">Docker Tooling Wiki Page</a>
		</p>

		<h2>Try it out</h2>
		<p>
		  You can download the plugin from our <a href="http://www.eclipse.org/linuxtools/downloads.php">update site</a>, or
		  check the project plugins out of Git directly from eclipse.org at git://git.eclipse.org/gitroot/linuxtools/org.eclipse.linuxtools.git. Be sure to check out the <a href="https://wiki.eclipse.org/Linux_Tools_Project/Docker_Tooling/User_Guide">user guide</a> for help, or information on supported features.
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
