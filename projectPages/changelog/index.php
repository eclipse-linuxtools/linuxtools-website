<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Changelog Plug-in";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Jeff Johnston";

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

		<h2>Overview</h2>
		<p>
		The Linux Distributions Changelog plugin adds automatic ChangeLog entry creation support to Eclipse for projects checked out from a Team repository.  Method and function indication is provided for C, C++, and Java language files.  A ChangeLog entry can be created for a single file or an entire project.  In addition, a ChangeLog editor is provided which makes it easy to format the file consistently and to put the latest entry into the clipboard buffer for usage in a repository commit operation.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with Eclipse 3.4.1 and CDT 5.0.1, the plugin supports:
		<ul>
	  <li>C, C++, and Java language support for modified functions/methods</li>
	  <li>Preference page to set name, e-mail address, and desired entry style</li>
	  <li>Automatic new and removed file entries</li>
	  <li>Support in Team synchronize view as well as C View and Project Views, C Editor, and Java Editor</li>
          <li>Single ChangeLog entry for current file</li>
	  <li>Full entry for entire project</li>
	  <li>Tested with CVS and SVN repositories</li>
          <li>Colorized ChangeLog editor with support for diffing to clipboard</li>
	  <li>Short-cut key sequences CTL+ALT+P for project entry and CTL+ALT+C for single entry</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>git and mercurial support </li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="images/changelog.png">
		    <br>
		    Changelog sample
		  </center>
		</p>

		<h2>Try it out</h2>
		<p>
		  At present we have no update site, but you can check the project plugins out of SVN
		  directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
          You will need to check out the following from changelog/trunk:
<pre>     org.eclipse.linuxtools.changelog.core
     org.eclipes.linuxtools.changelog-feature
     org.eclipse.linuxtools.changelog.cparser
     org.eclipse.linuxtools.changelog.doc
     org.eclipse.linuxtools.changelog.javaparser
</pre>
From there, run the plugins as an Eclipse Application.
		</p>
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
