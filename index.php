<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Tools";
	$pageKeywords	= "Eclipse, Linux, autoconf, automake, autotools, CDT, OProfile, Valgrind, RPM, systemtap";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	ob_start();?>

<div id="maincontent">
	<div id="midcolumn" class="homeitem">
	          <img alt="Screenshot of Linux Tools projects" src="images/mainscreenshot.png" />
	          <p>
	          The Linux Tools project aims to bring a <b>full-featured C and C++ IDE</b> to Linux developers.
	          We build on the source editing and debugging features of the
	          <a href="http://eclipse.org/cdt">CDT</a> and integrate popular native
	          development tools such as Valgrind, OProfile, RPM, SystemTap, GCov, GProf, LTTng, etc.  Current
	          projects include LTTng trace viewers and analyzers, an RPM .spec editor, a Valgrind heap usage analysis tool, and OProfile and Perf call profiling tools.
	          </p>
	          <p>
	          The project also provides a place for Linux
	          distributions to collaboratively overcome issues surrounding distribution packaging of
	          Eclipse technology.  The project produces both best practices and tools related to
	          packaging.  Since our 0.3.0 release, one of our features is a source archive of the
	          Eclipse SDK that can be used by all Linux distributions building and distributing it.
	          </p>
	</div>
	    <?php include("_rightColumn.php"); ?>
</div>
<?php
    $html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
