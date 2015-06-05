<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools - System Tap Plug-in";
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
		In conjunction with Eclipse SDK, the plugin supports:
		<ul>
	  <li>Coding folding of probe points</li>
	  <li>Completion suggestions of probe points</li>
	  <li>Syntax Highlighting</li>
        </ul>

		<h2>Future Plans</h2>
		<ul>
		  <li>Improved code folding to fold comment and functions</li>
		  <li>Script error detection</li>
		  <li>Expansion of completion to include functions, and built-in updates as System Tap updates</li>
                </ul>

		<h2>Screenshots</h2>
		<h4>SystemTap editor sample</h4>
		    <img src="images/stap_editor.png" alt="SystemTap editor in action"/>

		<h2>Try it out</h2>
		Please use our update site as described <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">here</a>. <br/>
		<br/>
		You can also check the project plugins out of Git
		  directly from eclipse.org at git://git.eclipse.org/gitroot/linuxtools/org.eclipse.linuxtools.git.
          You will need to check out the following from systemtap subfolder:
<pre>     org.eclipse.linuxtools.systemtap.feature
     org.eclipes.linuxtools.systemtap.ui.editor
</pre>
From there, run the plugins as an Eclipse Application.
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
