<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); # All on the same line to unclutter the user's desktop'
$pageTitle = "Linux Tools Project - Eclipse-build";
$pageKeywords = "linux, eclipse, downloads";
$pageAuthor = "Alexander Kurtakov";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
$html =<<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		Building Eclipse is not a simple process. You can not simply download a tarball from eclipse.org and
build it in a way suitable for inclusion in a Linux distribution. There are a lot of manual interactions needed. 

		</p>

		<h2>Current Status</h2>
		<p>
		Eclipse-build is following Eclipse milestones builds and currently it is up to version 3.5 M4.
		We are still not able to produce a working SDK build but we can compile the whole Eclipse SDK.
		Hopefully a working build will be produced in the not so distant future.
		
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>Create a working build using upstream srcIncluded build.</li>
		  <li>Create a script to fetch sources from cvs.</li>
		  <li>Fix to properly build with the fetched sources.</li>
		  <li>Put all patches we have in Fedora srpm here so other distros can easily reuse them.</li>
        </ul>
		</p>

		<h2>Try it out</h2>
		<p>To ease both developers and distributions there are two ways of building. </p>
		<ol>
		<li>Developer build
		<p>
		  <ul>
			<li>svn co http://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/eclipse-build/trunk/</li>
			<li>ant devBuild</li>
		  </ul>
		</p>
		</li>
		<li>Distribution build
		<p>
		  <ul>
			<li>svn co http://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/eclipse-build/trunk/</li>
			<li>ant -f fetch.xml</li>
		  </ul>
		</p>
		<p>This will produce a tar containing all the sources with the patches applies. It can be used in e.g. RPM builds by simply extracting and run `ant`.</p>
		</li>
		</ol>
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
