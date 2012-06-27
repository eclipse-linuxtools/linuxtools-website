<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); # All on the same line to unclutter the user's desktop'
$pageTitle = "Linux Tools Project - Specfile Editor";
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
		Specfile Editor is an editor for RPM spec files. Specfiles are the files that tell the rpm program which are the sources for this package,
		how to build, where to install, additional scripts to execute on install/uninstall and so on. This plugin provides all the basic features 
		for editing or modifing such specfile. 
		</p>

		<h2>Current Status</h2>
		<p>
		The plugin can do the following:
		<ul>
		<li>Highlight specfile contents.</li>
		<li>Integrate with rpmlint to validate the specfile.</li>
		<li>Quick fixes for the most common rpmlint warnings.</li>
		<li>Outline and quick outline views.</li>
		<li>Changelog plugin integration for auto-generation changelog entries.</li>
		<li>Auto-complete for package names and rpm macros.</li>
		<li>Import and export wizards.</li>
		</ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>More rpmlint quick fixes.</li>
		  <li>Form based editor. <i>Help wanted</i></li>
		  <li>Increase test coverage.</li>
        </ul>
		</p>
		
		<h2>Nice to have but no plans for now</h2>
		<p>
		<ul>
		  <li>Shell script editor integration.</li>
		  <li>Lua script editor integration - Latest rpm releases are offering Lua as an option for scripting inside specfiles. </li>
        </ul>
		</p>
		
		<h2>User guide</h2>
		<p>
		   Please read our <a href="http://wiki.eclipse.org/Linux_Tools_Project/SpecfileEditor/User_Guide">User guide</a> for detailed instructions.
		</p>
		
		<h2>Demos</h2>
		<p>
	    	  <a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/specfile-demo.ogg">Specfile editor demo in ogg format</a>
		</p>

		<h2>Try it out</h2>
		<p>
			 Follow the <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a> .
		</p>
	</div>

	<div id="rightcolumn">
	</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
