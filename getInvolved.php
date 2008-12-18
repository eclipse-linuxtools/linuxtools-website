<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Linux Distros Project Downloads";
	$pageKeywords	= "linux, eclipse, downloads";
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

        <p>
        <h3>Packaging</h3>
        We have a few pages with lists of things that need to be fixed on the packaging side of things.
        These pages should be migrated into bugs:<br><br>

        <a href="http://wiki.eclipse.org/Linux_Packaging_Tasks">Linux Packaging Tasks</a>
        <br>
        <a href="http://wiki.eclipse.org/FHS_Compliant_Packages">FHS Compliant Packages</a>
		<br>
		<br>

        We also need to update this diagram of the Fedora Eclipse SDK packages and ensure that all
        distributions use a similar hierarchy:<br><br>

        <a href="http://wiki.eclipse.org/Fedora_Eclipse_Packages">Fedora Eclipse Packages</a>

        </p>

		<p>
		<h3>Tools development</h3>
		Our sub-projects maintain their own pages with development plans:
        <ul>
		<li><a href="projectPages/autotools">Autotools</a></li>
		<li><a href="projectPages/changelog">ChangeLog</a></li>
		<li><a href="projectPages/eclipse-build">eclipse-build</a></li>
		<li><a href="projectPages/oprofile">OProfile</a></li>
		<li><a href="projectPages/rpmstubby">"RPM Stubby"</a></li>
		<li><a href="projectPages/rpm-editor">RPM Specfile Editor</a></li>
		<li><a href="projectPages/systemtap">Systemtap Editor</a></li>
		<li><a href="projectPages/valgrind">Valgrind</a></li>
		</ul>

		<p>
		These project set files can be used to easily check out our source from Subversion:
		<ul>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/autotools.psf?root=Technology_LINUXTOOLS&view=co">Autotools</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/changelog.psf?root=Technology_LINUXTOOLS&view=co">ChangeLog</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/eclipse-build.psf?root=Technology_LINUXTOOLS&view=co">eclipse-build</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/oprofile.psf?root=Technology_LINUXTOOLS&view=co">OProfile</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/libhover.psf?root=Technology_LINUXTOOLS&view=co">Libhover</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/rpmstubby.psf?root=Technology_LINUXTOOLS&view=co">"RPM Stubby"</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/rpm-editor.psf?root=Technology_LINUXTOOLS&view=co">RPM Specfile Editor</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/systemtap.psf?root=Technology_LINUXTOOLS&view=co">Systemtap Editor</a></li>
		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/valgrind.psf?root=Technology_LINUXTOOLS&view=co">Valgrind</a></li>
		</ul>
		</p>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>