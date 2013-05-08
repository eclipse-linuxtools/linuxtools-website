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
		The Linux Tools OProfile plugin aims to bring the powerful call profiling
		capabilities of OProfile to Eclipse, in a manner that is easy to use for developers
		of any level of experience. Inexperienced users can, with 1 click, determine the parts
		of their code which use the most time while experienced users of OProfile can perform
		the same functions they would on the command-line but with a much more rich visualization
		of the results.
		</p>

		<h2>Current Status</h2>
		In conjunction with the CDT, the plugin can do the following:
		<ul>
          <li>Launch a local C/C++ application and OProfile simultaneously to start profiling (requires root password to execute OProfile commands)</li>
          <li>Automatically gather OProfile data and display in a tree viewer after a launch</li>
          <li>Launch a local C/C++ application and manually control OProfile via a simple dialog</li>
          <li>Configure OProfile to profile several events simultaneously with as many debug registers as the CPU/OProfile supports</li>
          <li>Configure OProfile to profile relevant shared-libraries and/or kernel modules</li>
          <li>Jump to the line-number of the corresponding source file on a double-click of a sample</li>
          <li>Prompt to save the default session for viewing at a later time</li>
          <li>View the oprofiled log</li>
          <li>One-click launch with sane defaults</li>
        </ul>

		<h2>Future Plans</h2>
		<ul>
		  <li> Robust filtering for events/sessions/images</li>
		  <li> Code-colourization (similar to <a href="http://www.eclemma.org/index.html" class="external text" title="http://www.eclemma.org/index.html" rel="nofollow">EclEmma</a>) for code hotspots</li>
          <li> Comparing two sessions/runs similar to functionality of opreport</li>
        </ul>

		<h2>Screenshots</h2>
		<h4>OProfile View</h4>
							<a href="images/oprofile_view.png"><img src="images/oprofile_view_thumb.png" alt="Oprofile view"/></a>
<h4>Event Configuration Tab</h4>
							<a href="images/event_config_tab.png"><img src="images/event_config_tab_thumb.png" alt="Oprofile config tab"/></a>
		
		<h2>Video Demo</h2>
		<p>
		Check out a screencast of the plugin in action <a href="http://www.eclipse.org/downloads/download.php?file=/linuxtools/videos/eclipse-oprofile-demo.ogg">here</a>.
		</p>

		<h2>Try it out</h2>
		  You can download the plugin from our <a href="http://www.eclipse.org/linuxtools/downloads.php">update site</a>, or 
		  check the project plugins out of Git directly from eclipse.org at git://git.eclipse.org/gitroot/linuxtools/org.eclipse.linuxtools.git.
          You will need all the plugins under oprofile subfolder, and the plugins under the profiling subfolder:
<pre>     
	org.eclipse.linuxtools.oprofile-feature
	org.eclipse.linuxtools.oprofile.core
	org.eclipse.linuxtools.oprofile.core.linux.ppc
	org.eclipse.linuxtools.oprofile.core.linux.x86
	org.eclipse.linuxtools.oprofile.core.linux.x86_64
	org.eclipse.linuxtools.oprofile.core.tests
	org.eclipse.linuxtools.oprofile.doc
	org.eclipse.linuxtools.oprofile.launch
	org.eclipse.linuxtools.oprofile.launch.tests
	org.eclipse.linuxtools.oprofile.test-feature
	org.eclipse.linuxtools.oprofile.tests
	org.eclipse.linuxtools.oprofile.ui
	org.eclipse.linuxtools.oprofile.ui.tests
	org.eclipse.linuxtools.profiling-feature
	org.eclipse.linuxtools.profiling.launch
	org.eclipse.linuxtools.profiling.test-feature
	org.eclipse.linuxtools.profiling.tests
	org.eclipse.linuxtools.profiling.ui
</pre>
		For help with installing and using the plugin, please read the user guide <a href="http://wiki.eclipse.org/Linux_Tools_Project/OProfile/User_Guide">here</a>.
		<br/><br/>
		We have tested using Eclipse 4.2.0, OProfile 0.9.6, and 0.9.7 on Fedora 16 x86, Fedora 17 x86.
	<br/><br/><br/>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
