<?php  																														
    require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Tools Project";
	$pageKeywords	= "Eclipse, Linux, autoconf, automake, autotools, CDT, OProfile, Valgrind, RPM, systemtap";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	ob_start();
	?>
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
	<li><a id="buttonDownload" href="downloads.php" title="Download">Eclipse
	Distribution, Update Site, Dropins</a></li>
	<li><a id="buttonDocumentation" href="http://wiki.eclipse.org/Linux_Tools_Project"
		title="Documentation">Tutorials, Examples, Videos, Reference Documentation</a></li>
	<li><a id="buttonSupport" href="contact.php" title="Support">Bug
	Tracker, Newsgroup, Support</a></li>
	<li><a id="buttonInvolved" href="getInvolved.php" title="Getting Involved">Workspace Setup, Wiki, Committers</a></li>
</ul>
</div>

	<div id="midcolumn" class="homeitem">
	          <img alt="Screenshot of Linux Tools projects" border="0" src="images/mainscreenshot.png">
	          <p>
	          The Linux Tools project aims to bring a <b>full-featured C and C++ IDE</b> to Linux developers.
	          We build on the source editing and debugging features of the
	          <a href="http://eclipse.org/cdt">CDT</a> and integrate popular native
	          development tools such as the GNU Autotools, Valgrind, OProfile, RPM, SystemTap, GCov, GProf, LTTng, etc.  Current
	          projects include LTTng trace viewers and analyzers, an RPM .spec editor, Autotools build integration, a Valgrind heap 
	          usage analysis tool, and OProfile call profiling tools.
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
<?php
    $html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
