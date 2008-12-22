<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include ($App->getProjectCommon()); # All on the same line to unclutter the user's desktop'
$pageTitle = "Linux Tools Project - RPM Stubby";
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
		Most of the information needed for creating RPM specfile for Eclipse plugin is already present in the feature.xml file.
		And this plugin does exactly that - creates a RPM specfile from the information in the feature.xml.
		This puts a small limitation you can stubbify a specfile only for a plugin that contains a feature.

		</p>

		<h2>Current Status</h2>
		<p>
		RPM stubby is capable of creating good specfile when all the needed data is in the feature.xml.
		Some of this data like the license, URL and other parts is not mandatory for the feature.xml files so your results
		will vary depending on the completeness of the metadata in the feature.xml. 
		<br>
		It contains aditional features like:
		<ul>
		<li>Creating a fetch script for plugins that do not provide source tarballs - 
		The script needs tuning for plugins that use version control systems different from CVS.</li>
		<li>Add GCJ support to specfile - It was a good practice to add GCJ support to the packages in the past. 
		With OpenJDK becoming more and more popular this is not the case anymore. </li>
		<li>Use pdebuild for building - Pdebuild is a shell script shipped with Eclipse in some RPM based distributions (e.g. Fedora, Mandriva).
		It reduces the number of things you need to setup manually by setting common values whenever this value is not overridden by a parameter
		passed to the script.
		</li>
		</ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>Give warnings for missing data in the feature.xml needed for the specfile.</li>
		  <li>Provide interface for entering the missing data on generation time.</li>
        </ul>
		</p>

		<h2>Try it out</h2>
		<p>
			For now the only way to try the plugin is to build it yourself. 
			But we are working on getting a downloads and update site.
			Stay tuned.
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