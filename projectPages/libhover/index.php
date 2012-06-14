<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Libhover Plug-in";
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
		The Linux Distributions Libhover plugin provides a common interface for C library hover help to the CDT (C/C++ Development Tools) as well as a fundamental set of library hovers to choose from.  The plugin provides a simple extension so that any number of additional libraries may provide hover help documentation without having to create any Java code.  The general idea is that hover help documentation can be generated from the manual source or code source of a particular library.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with the CDT, the plugin supplies:
		<ul>
          <li>Glibc hover and completion support</li>
          <li>Newlib hover and completion support</li>
	  <li>An Eclipse extension for adding future C library hovers</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>libstdc++ support using doxygen documentation </li>
		  <li>Generalized C++ support via libstdc++ doxygen format</li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="images/libhover.png">
		    <br>
		    Libhover sample
		  </center>
		</p>

		<h2>Demos</h2>
		<p>
	          <a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/libhoverdemo.ogg">Libhover demo in ogg format</a>
		</p>

		<h2>Try it out</h2>
		<p>
		 Follow the <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a> .
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
