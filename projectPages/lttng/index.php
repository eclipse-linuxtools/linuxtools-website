<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - LTTng Integration";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor	= "Francois Chouinard";

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
		LTTng (Linux Tracing Toolkit Next Generation) is a Linux tool that enables high
		volume of kernel/application traces with a very low overhead. It is delivered
		as a set of kernel patches, to collect the traces, as well as a toolchain to control,
		view and analyze the generated data.
		<p>
		The scope of this project is to provide an Eclipse integration of LTTng. It will
		be delivered in two components:
		<ul>
			<li>A Tracing and Monitoring Framework (TMF) that facilitates the integration of tracing tools in eclipse</li>
          	<li>An LTTng reference implementation based of the framework</li>
        </ul>
        The main features of this integration are:
       	<ul>
        	<li>Control of LTTng (remote and local)</li>
        	<li>Retrieval and efficient handling of large trace files (>10Gb)</li>
            <li>Traces visualization, correlation and analysis</li>
          	<li>Support for the upcoming LTTng user space tracing</li>
        </ul>
		</p>

		<h2>Current Status</h2>
		<p>
		The first release, scheduled for September 2009 (code name: Vanilla), will provide feature
		parity with the LTTng Viewer (LTTV) v0.12.12.
		<p>
		Here is a brief listing of the Vanilla features:
		<ul>
        	<li>LTTng Control (remote and local)</li>
        	<ul>
        		<li>Probe configuration</li>
        		<li>Start, stop, pause, resume</li>
        		<li>Trace retrieval</li>
            </ul>
          	<li>LTTng perspective</li>
          	<ul>
            	<li>Traceset View</li>
            	<li>Timescale View</li>
            	<li>Statistics View</li>
            	<li>Event Table View</li>
            	<li>Control Flow View</li>
            	<li>Resource View</li>
            	<li>Histogram View</li>
            	<li>View Synchronization</li>
          	</ul>
          	<li>Framework</li>
          	<ul>
            	<li>Support for very large trace files</li>
            	<li>Support for custom trace parsers</li>
            	<li>Support for Analysis components</li>
          	</ul>
        </ul>
		</p>

		<h2>Future Plans</h2>
		<p>
		<ul>
			<li>First, we take Manhattan</li>
		  	<li>Then we take Berlin</li>
        	</ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		Coming soon.
		</p>
		
		<h2>Video Demo</h2>
		<p>
		Coming (not so) soon.
		</p>

		<h2>Try it out</h2>
		<p>
		Not yet...
		</p>
	<br/><br/><br/>
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
