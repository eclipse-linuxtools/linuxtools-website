<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - OProfile Support";
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

		<h2>Overview</h2>
		<p>
		The Linux Distributions OProfile plugin aims to bring the powerful call profiling
		capabilities of OProfile to Eclipse, in a manner that is easy to use for developers
		of any level of experience. Inexperienced users can, with 1 click, determine the parts
		of their code which use the most time while experienced users of OProfile can perform
		the same functions they would on the command-line but with a much more rich visualization
		of the results.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with CDT 5.0, the plugin can do the following:
		<ul>
          <li>Launch a local C/C++ application and OProfile simultaneously to start profiling (requires root password to execute OProfile commands)</li>
          <li>Automatically gather OProfile data and display in a tree viewer after a launch</li>
          <li>Configure OProfile to profile several events simultaneously with as many debug registers as the CPU/OProfile supports</li>
          <li>Configure OProfile to profile relevant shared-libraries and/or kernel modules</li>
          <li>Jump to the line-number of the corresponding source file on a double-click of a sample</li>
          <li>Prompt to save the default session on double-click</li>
          <li>View the oprofiled log</li>
          <li>One-click launch with sane defaults</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li> Robust filtering for events/sessions/images</li>
		  <li> Code-colourization (similar to <a href="http://www.eclemma.org/index.html" class="external text" title="http://www.eclemma.org/index.html" rel="nofollow">EclEmma</a>) for code hotspots</li>
          <li> Comparing two sessions/runs similar to functionality of opreport</li>
          <li> Increase test coverage</li>
        </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="http://wiki.eclipse.org/Image:OprofileView.png">
		    <br>
		    OProfile view
		  </center>
		</p>
		<p>
		  <center>
		    <img src="http://wiki.eclipse.org/Image:OprofileConfig.png">
		    <br>
		    OProfile launch configuration
		  </center>
		</p>

		<h2>Try it out</h2>
		<p>
		  At present we have no update site, but you can check the project plugins out of SVN
		  directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
          You will need the 3 plugins under oprofile/trunk, and the 2 plugins under profiling/trunk:
<pre>org.eclipse.linuxtools.oprofile.core
     org.eclipse.linuxtools.oprofile.launch
     org.eclipse.linuxtools.oprofile.ui
     org.eclipse.linuxtools.profiling.launch
     org.eclipse.linuxtools.profiling.ui
</pre>
To install, run (as root) the script in org.eclipse.linuxtools.oprofile.core/scripts (currently only tested on fedora x86 machines). This will build a required binary, install a consolehelper authentication link for the plugin to use and ensure that OProfile is installed and loaded properly:
<pre>     $ sudo ./install
</pre>
From there, run the plugin as an Eclipse Application.  So far, we have tested using Eclipse 3.4.1, CDT 5.0, OProfile 0.9.3 on Fedora 9 x86.
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