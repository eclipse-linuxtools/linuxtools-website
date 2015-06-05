<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools - Libhover Plug-in";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Jeff Johnston";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Overview</h2>
		<p>
		The Linux Tools Libhover plugin provides a common interface for C library hover help to the CDT (C/C++ Development Tools) as well as a fundamental set of library hovers to choose from.  The plugin provides a simple extension so that any number of additional libraries may provide hover help documentation without having to create any Java code.  The general idea is that hover help documentation can be generated from the manual source or code source of a particular library.
		</p>

		<h2>Current Status</h2>
		In conjunction with the CDT, the plugin supplies:
		<ul>
          <li>Glibc hover and completion support</li>
          <li>Newlib hover and completion support</li>
	  <li>An Eclipse extension for adding future C library hovers</li>
        </ul>

		<h2>Future Plans</h2>
		<ul>
		  <li>libstdc++ support using doxygen documentation </li>
		  <li>Generalized C++ support via libstdc++ doxygen format</li>
        </ul>

		<h2>Screenshots</h2>
		 <h4>Libhover in use</h4>
		    <img src="images/libhover.png" alt="libhover screenshot" />
		    <br/>

		<h2>Demos</h2>
		<p>
	          <a href="http://www.eclipse.org/downloads/download.php?file=/linuxtools/videos/libhoverdemo.ogg">Libhover demo in ogg format</a>
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
