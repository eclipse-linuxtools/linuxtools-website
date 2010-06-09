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

		<p>
		LTTng is a tracer for Linux that has the capability to generate a high
		volume of traces (from the kernel or an application) with very low overhead.
		This is achieved by instrumenting the Linux kernel and using debugfs, an
		efficient and lightweight virtual file system for debugging information.
		LTTng is delivered as a set of kernel patches, to collect the traces, as well
		as a tool chain to control, view and analyze the generated data.
		<p>
		The scope of this project is to provide an Eclipse integration of LTTng, in
		particular its LTTv component which is used to control, fetch and visualize
		the LTTng traces.
		<p>
		The project will be delivered in two components:
		<ul>
			<li>A Tracing and Monitoring Framework (TMF), a tracing tool-agnostic component
			that facilitates their integration in Eclipse</li>
			<li>An LTTng reference implementation based on TMF</li>
		</ul>
		<p>
		The Tracing and Monitoring Framework will provide a number of features:
		<ul>
			<li>Tracing project management</li>
			<li>Support for very large trace files (that exceed available memory)</li>
			<li>Online monitoring and trace streaming</li>
			<li>Unified view for multiple, heterogeneous traces</li>
			<li>Traces correlation</li>
			<li>Out-of-the-box set of standard tracing views</li>
			<li>Toolbox of tracing widgets that can be used to assemble application specific views</li>
			<li>Toolbox of statistical widgets</li>
			<li>View synchronization mechanism</li>
			<li>Clipboard support</li>
			<li>Wizards for tracing/logging/monitoring application integration</li>
			<li>Wizard for parser generation (CSV, XML, plain text, regular expression, ...)</li>
		</ul>
		</p>
		<p>
		From a user's perspective, the main features of the LTTng integration are:
		<ul>
			<li>Control of the LTTng tracer running on a target node (remote or local)</li>
			<li>Efficient retrieval and handling of LTTng trace files</li>
			<li>Support for distributed, multi-processor, multi-core traces synchronization</li>
			<li>Example of a third-party parsing library integration</li>
			<li>Standard LTTv trace visualization, correlation and analysis views</li>
			<li>Support for kernel and the upcoming user space tracing</li>
			<li>State tracking system</li>
		</ul>
		<p>

		<h2>Current Status</h2>
		<p>
		The first internal release (v0.1.0, delivered October/14) implements the following features:

		<h4>LTTng perspective</h4>
		<ul>
			<li>Project View</li>
			<li>Time Frame View</li>
			<li>Events View</li>
			<li>Control Flow View</li>
			<li>Resource View</li>
			<li>Statistics View</li>
			<li>View Synchronization</li>
		</ul>

		<h4>LTTng structure</h4>
		<ul>
			<li>JNI integration of the C library</li>
			<li>First integration of the LTTv State Provider</li>
			<li>Integrated Help</li>
		</ul>

		<h4>Tracing and Monitoring Framework</h4>
		<ul>
			<li>Generic Event model</li>
			<li>Generic Trace model</li>
			<li>Support for arbitrarily large traces</li>
			<li>Support for custom trace parsers</li>
			<li>Concurrent Data Request handling</li>
			<li>Generic Events View</li>
		</ul>

		<h4>Limitations</h4>
		<ul>
			<li>Single LTTng trace support</li>
		</ul>

		<h2>Future Plans</h2>
		<p>
		V0.2.0 (due in December) should include the following:
		<ul>
			<li>LTTng Control (remote and local)</li>
			<li>Histogram View</li>
			<li>Parser Generator Wizard</li>
			<li>Performance improvements</li>
			<li>Bug fixes</li>
		</ul>

		<p>
		<p>
		V0.3.0 (due TBD) should include the following:
		<ul>
			<li>TBD</li>
			<li>Performance improvements</li>
			<li>Bug fixes</li>
		</ul>

		<p>
		V1.0.0 (2010 Q2) should include the following:
		<ul>
			<li>Performance improvements</li>
			<li>Bug fixes</li>
		</ul>
		</p>

		<h2>Screenshots</h2>
		<p>
		<br>
		  <center>
		    <a href="images/lttng_perspective.png"><img src="images/lttng_perspective_thumb.png"/></a>
		    <br>
		    LTTng Perspective
		  </center>
		  <p>
		</p>
		
		<h2>Video Demo</h2>
		<p>
		Coming (not so) soon.
		</p>

		<h2>Try it out</h2>
		<p>
		LTTng is not yet part of the Linux Tools delivery train. To give it a try, 
		you will need to:
		<ul>
			<li>Checkout the plugins from the SVN repository</li>
			<li>Download and install the LTTng parser library</li>
		</ul>
		For good measure, you should also consider downloading some sample LTTng traces
		(because they work :-)
		<p>
		Note that this currently only works for Linux.

		<p>
		<h4>Downloading LTTng and TMF plugins</h4>
		You can checkout the project plugins out of SVN from eclipse.org at svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools.
		You will need the following plugins under lttng/trunk:
<pre>     
	org.eclipse.linuxtools.lttng
	org.eclipse.linuxtools.lttng.help
	org.eclipse.linuxtools.lttng.ui
	org.eclipse.linuxtools.tmf
	org.eclipse.linuxtools.tmf.ui
</pre>
		</p>

		<p>
		<h4>Downloading and installing the LTTng parser library</h4>
		LTTv comes with a very efficient parsing library (in C) which was not re-implemented
		in Java for this project. Instead, the library is simply integrated using JNI.
		<p>
		This library is not delivered as part of Eclipse (licensing stuff) and has to be downloaded
		from the LTTng site, compiled and then installed.
		<p>
		The full installation procedure can be found in the User Guide. In Eclipse, switch to Help
		(Help > Help Contents) and open the LTTng User Guide. Follow the installation procedure
		from the "Getting Started/Installing the LTTng parsing library" page.  More information is 
		also available on the LTTng component's 
		<a href="http://wiki.eclipse.org/Linux_Tools_Project/LTTng">wiki page</a>.
		<p>
		Note that you need the org.eclipse.linuxtools.lttng.help plugin to access the User Guide.

		<p>
		<h4>Sample LTTng traces</h4>
		In Eclipse, switch to Help (Help > Help Contents) and open the LTTng User Guide. You can download
		sample traces from the "Getting Started/Samples" page.
		<p>

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
