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
		join our mailing list:<br><br>
		<a href="https://dev.eclipse.org/mailman/listinfo/linuxtools-dev">linuxtools-dev</a>
		<br>
		<a href="https://dev.eclipse.org/mailman/listinfo/linux-distros-dev">linux-distros-dev</a> (formerly our only list and now used primarly for Linux distribution discussions)
		<br><br>
		For questions related to use of our tools, try our newsgroup:<br>
		<br>
		<a href="news://news.eclipse.org/eclipse.technology.linuxtools">news://news.eclipse.org/eclipse.technology.linuxtools</a> (or via <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.linuxtools">http</a>)
		<br><br>
        Alternatively, join us on Freenode IRC:<br><br>
        <a href="irc://irc.freenode.net/#eclipse-linux">#eclipse-linux</a> (Freenode)
		<br><br>
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
