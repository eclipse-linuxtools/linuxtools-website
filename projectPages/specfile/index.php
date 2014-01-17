	<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); # All on the same line to unclutter the user's desktop'
$pageTitle = "Linux Tools Project - RPM integration";
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
		RPM integration consist of few different parts - editor for RPM .spec files, UI for createrepo command and ability to generate stubs for 
		RPM .spec files.
		</p>
		<p>
		Specfile Editor is a full featured editor for RPM spec files. Specfiles are the files that tell the rpm program which are the sources for this package,
		how to build, where to install, additional scripts to execute on install/uninstall and so on. This plugin provides all the basic features 
		for editing or modifing such specfile. 
		</p>
		<p>
		Information needed for creating RPM specfile is present in a number of different files that are part of the upstream sources. Good examples are Eclipse feature.xml files and Maven pom.xml files.
		And this plugin does exactly that - creates a RPM specfile from the information in these files.
		</p>
		
		<h2>User guide</h2>
		<p>
		   Please read our <a href="http://wiki.eclipse.org/Linux_Tools_Project/SpecfileEditor/User_Guide">User guide</a> for detailed instructions.
		</p>
		
		<h2>Demos</h2>
		<p>
	    	  <a href="http://www.eclipse.org/downloads/download.php?file=/linuxtools/videos/specfile-demo.ogg">Specfile editor demo in ogg format</a>
		</p>

		<h2>Try it out</h2>
		<p>
			 Follow the <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a> .
		</p>
	</div>

EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
