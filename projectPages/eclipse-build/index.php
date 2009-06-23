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
		Eclipse-build is following Eclipse milestones builds and currently it is up to version 3.5.
		We are currently able to build a runnable Eclipse SDK.  It is not complete nor ready for use by
		distributions, but it is getting closer.
		
		</p>

		<h2>Future Plans</h2>
		<p>
		See our open bug list <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=[eclipse-build]&classification=Technology&product=Linux+Tools&component=PackagingTools&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&amp;bug_status=NEW&bug_status=ASSIGNED&amp;bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&amp;type0-0-0=noop&value0-0-0=">here</a>.
		</p>

		<h2>Try it out</h2>
		<ol>
		<li>Testing
		<p>
		  <ul>
			<li>svn co http://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/eclipse-build/trunk/eclipse-build</li>
			<li>see README.mediawiki included therein </li>
		  </ul>
		</p>
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
