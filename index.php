<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Distros Project";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h3>For now, see our <a href="http://wiki.eclipse.org/index.php/Linux_Distributions_Project">wiki page</a>.</h3>
		<br>
		<h4>Project set files (for use with Subclipse):</h4>
		<ul>
		<li><a href="doc/rpmstubby.psf">"rpmstubby"</li>
		<li><a href="doc/changelog.psf">ChangeLog</li>
		<li><a href="doc/specfileeditor.psf">RPM Specfile Editor</li>
		<li><a href="doc/linuxtools.psf">All</li>
		</ul>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	   </div>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
