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
		The Callgraph plugin uses the powerful SystemTap language as a backend, allowing it to monitor the status of a program -- function
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
		<p>
		<ul>
			<li>With the Eclipse-Callgraph projects installed, you can createa a new launch for any kind of project by extending a single class: SystemTapLaunchShortcut.</li>
    			<li>The only function that needs to be defined is the setScriptPath variable -- your script will automatically select a text parser and viewer by default.</li>
    		<li>By setting parameters in your Launch class, you can modify many of the parameters in the resulting command-line call to SystemTap. You can even change the STAP_PATH to use a different command-line tool altogether!</li>
		</ul>
		</p>
		</div>
		
		<br/>
		<div>
		<h2>Future Plans</h2>
		<p>
		<ul>
			<li>Add additional tools to the SystemTap family</li>
          	<li>Integrate with SystemTapGUI for server-based launching and more graphing options.</li>
       	</ul>
		</p>
		</div>
		<br/>

		<div>
		<h2>Try it out</h2>
		<p>
		<ul>
		<li><a href="http://dev.eclipse.org/viewsvn/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/callgraph.psf?root=Technology_LINUXTOOLS&view=co">Project Set File</a>
    		<li>SVN
		<ul>
	          	<li>svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/systemtap/org.eclipse.linuxtools.callgraph</li>
	          	<li>svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/systemtap/org.eclipse.linuxtools.callgraph.core</li>
	          	<li>svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/systemtap/org.eclipse.linuxtools.callgraph.launch</li>
	          	<li>svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/profiling</li>
		</ul>
		</li>
		</ul>
		</p>
		</div>
		<br/><br/>
	</div>
	
		<div id="rightcolumn">
		<div class="sideitem">
	   <h6>Incubation</h6>
	   <div style="text-align: center">
	    <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
     </div>
    </div>
	</div>
<div id="midcolumn">
		<h2>Screenshots</h2>
		<p>
		  <center>
		    <img src="../../new-0.4/images-0.4/callgraph.png">
		    <br>
		    Callgraph rendering of a binary, TreeView
		  </center>
		</p>
		<p>
		  <center>
		    <img src="../../new-0.4/images-0.4/callgraph-link.png">
		    <br>
		    Callgraph rendering of a binary, Aggregate View
		  </center>
		</p>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
