<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Contacting the Linux Tools project";
	$pageAuthor		= "Andrew Overholt";

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
		<p>
		Our project is actively seeking interested people to join us.  If you are interested, please
		email our mailing list, <a href="mailto:linux-distros-dev@eclipse.org">
		linux-distros-dev@eclipse.org</a> or join us on Freenode IRC in the #eclipse-linux channel.
        </p>

		<br/><br/><br/>
	</div>

	<div id="rightcolumn" class="sideitem" style="text-align: center">
	    <h6>Incubation</h6>
	    <a href="/projects/what-is-incubation.php"><img alt="Incubation" src="/images/egg-incubation.png"/></a>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
