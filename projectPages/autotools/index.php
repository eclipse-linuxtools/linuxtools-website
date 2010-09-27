<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Autotools Plug-ins";
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
		The Linux Distributions Autotools suite of plugins add support to the CDT (C/C++ Development Tools) for building and maintaining C/C++ projects that use autotools.
Using autotools is very common in the world of Open Source projects such as those hosted at http://www.gnu.org.  With this additional support, a vast repository of C/C++ code can be checked out, built, and maintained under the CDT rather easily without having to resort to the command line.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with the CDT, the plugin can do the following:
		<ul>
          <li>Build a C/C++ project that uses a configure script or an autogen script or a Makefile.cvs script</li>
	  <li>Create a simple C or C++ hello world Autotools project via a template</li>
          <li>Allow configuration parameters to be set via a gui and to rebuild when configuration parameters are changed</li>
          <li>Colorized editing of configuration files such as configure.in, configure.ac, Makefile.am, and Makefile.in with full hover help for autoconf/automake macros</li>
          <li>Allow specification of multiple build configurations for a single project</li>
          <li>Run autotools such as autoconf, automake, or aclocal directly using a gui interface</li>
	  <li>Help for autoconf and automake</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>Wizard support for creation of Autotool projects</li>
		  <li>Templates for autoconf/automake tasks</li>
          <li>Better error parsing of autoconf/automake input files</li>
	  <li>Support loading of missing packages noted by pkg-config</li>
          <li>Increased test coverage</li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="images/autotoolsBuild.png">
		    <br>
		    Autotools build
		  </center>
		</p>
		<p>
		  <center>
		    <img src="images/autotoolsConfig2.png">
		    <br>
		    Autotools configuration parameters
		  </center>
		</p>
		<p>
		  <center>
		    <img src="images/autotoolsEditor.png">
		    <br>
		    Autotools editor
		  </center>
		</p>

		<h2>Try it out</h2>
		<p>
		  Please use our update site as described <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">here</a>. <br>
		  Or check the project plugins out of SVN
		  directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
          You will need to check out the following from autotools/trunk:
<pre>
     org.eclipse.linuxtools.cdt.autotools
     org.eclipse.linuxtools.cdt.autotools.core
     org.eclipse.linuxtools.cdt.autotools.ui
     org.eclipse.linuxtools.cdt.autotools-docs
     org.eclipse.linuxtools.cdt.autotools-feature
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
