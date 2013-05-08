<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Function Callgraph";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Charley Wang";

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
		<h1>Linux Tools Project - Function Callgraph</h1>

		<div>
		<h2>Overview</h2>
		<p>The Linux Tools Project Function Callgraph plugin aims to provide an easy-to-use tool for C/C++ function and timing visualization.
		The Callgraph plugin uses the powerful SystemTap language as a back-end, allowing it to monitor the status of a program -- function
		calls, returns, times and even user-space variables. The resulting data is displayed using Zest to create a visually pleasing graph
		of your entire program, or whatever parts of it you suggest. The graph shows timing information, and can be used for optimization.
		<br/>
		In Aggregate Mode, you can see a grid of all functions used in your program, coloured and sized according to the number of calls 
		and the amount of time taken by each function. If you hold ctrl and double-click on a function, you will be taken to the point in 
		code where that function was defined.  
		</p>
		</div>
		<br/>

		<div>
		<h2>Extensibility</h2>
		<ul>
			<li>With the Eclipse-Callgraph projects installed, you can create a a new launch for any kind of project by extending a single class: SystemTapLaunchShortcut.</li>
    		<li>The only function that needs to be defined is the setScriptPath variable -- your script will automatically select a text parser and viewer by default.</li>
    		<li>By setting parameters in your Launch class, you can modify many of the parameters in the resulting command-line call to SystemTap. You can even change the STAP_PATH to use a different command-line tool altogether!</li>
		</ul>
		</div>
		
		<br/>
		<div>
		<h2>Future Plans</h2>
		<ul>
			<li>Integrate with SystemTapGUI for server-based launching and more graphing options.</li>
       	</ul>
		</div>
		<br/>

		<div>
		<h2>Try it out</h2>
		 Please use our update site as described <a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">here</a>. <br/>
		 You can also check the project plugins out of Git directly from eclipse.org at git://git.eclipse.org/gitroot/linuxtools/org.eclipse.linuxtools.git.
		</div>
		<br/><br/>
		<h2>Screenshots</h2>
			<h4>Callgraph rendering of a binary, TreeView</h4>
		    <img src="../../new/0.4/images-0.4/callgraph.png" alt="Tree view screenshot"/>
			<h4>Callgraph rendering of a binary, Aggregate View</h4>
		    <img src="../../new/0.4/images-0.4/callgraph-link.png" alt="Aggregate view screenshot"/>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
