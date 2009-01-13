<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - System Tap Editor Plug-in";
	$pageKeywords	= "linux, eclipse, downloads, system tap, systemtap";
	$pageAuthor		= "Phil Muldoon";

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
		The Linux Tools SystemTap editor plugin adds SystemTap script editing support to Eclipse. The editor includes completion, syntax highlighting, partition support and code folding.
		</p>

		<h2>Current Status</h2>
		<p>
		In conjunction with Eclipse 3.4.1, the plugin supports:
		<ul>
	  <li>Coding folding of probe points</li>
	  <li>Completion suggestions of probe points</li>
	  <li>Syntax Highlighting</li>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
		  <li>Improved code folding to fold comment and functions</li>
		  <li>Script error detection</li>
		  <li>Expansion of completion to include functions, and built-in updates as System Tap updates</li>
                </ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="images/stap_editor.png">
		    <br>
		    SystemTap editor sample
		  </center>
		</p>

		<h2>Try it out</h2>
		<p>
		  At present we have no update site, but you can check the project plugins out of SVN
		  directly from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
          You will need to check out the following from systemtap/trunk:
<pre>     org.eclipse.linuxtools.systemtap.feature
     org.eclipes.linuxtools.systemtap.ui.editor
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
