<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Linux Tools Project - Valgrind Support";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Elliott Baron";

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
		<h1>Linux Tools Project - Valgrind Support</h1>

		<div>
		<h2>Overview</h2>
		<a href="images/LaunchConfig.png"><img style="border: 1px dashed #999999; margin-left:5px; float:right;" src="images/LaunchConfig_thumb.png" alt="Valgrind Launch Configuration Dialog" /></a>
		<p>
		The Linux Tools Project Valgrind plugin aims to provide simple and effective profiling for the C/C++ Development Tools.
		There is an abundance of Valgrind functionality to expose in Eclipse. Valgrind itself is very component based and this relates well to Eclipse plugins.
		The main architectural goal is to have a common Valgrind user interface and underlying launch framework, while the Valgrind tools themselves are contributed via extension points.
		As with most tools in this project, the aim is to provide not just a user interface for the underlying tool.
		Instead, this project will attempt to exploit every opportunity to integrate into the Eclipse workbench to provide a unique and formidable user experience.
		</p>
		</div>
		<br/>

		<div>
		<h2>Extensibility</h2>
		<p>
		<ul>
			<li>Each tool has the ability to contribute its own set of options to the Launch Configuration Dialog via the valgrindTools extension point and providing an implementation of the IValgrindToolPage interface.
			The controls created inside of the implementing class are nested into a tool specific tab in the Dialog.</li>
    			<li>An extender must also implement the IValgrindLaunchDelegate interface.
			This will control the lifecycle of the contributed tool and will receive control to parse the output of the underlying Valgrind process once the main delegate is finished.</li>
    			<li>There is a single Valgrind View, which by itself contains no output.
			Each tool provides its own appropriate way of displaying its output and, similar to the Launch Configuration Dialog, can embed its contributed controls into the View.
			This is done via the valgrindToolViews extension point and implementing the IValgrindToolView interface.</li>
		</ul>
		</p>
		</div>
		<br/>

		<div>
		<h2>Memcheck</h2>
		<p>
		Memcheck is a tool that detects memory management problems. It is Valgrind's most popular tool and seemingly the most mature. It supports XML output with the specific purpose of being parsed by GUI front-ends. 			Memcheck's output is rather straight forward - it is a series of errors along with stack trace information.
		<ul>
			<li>The Valgrind View presents this output using a TreeViewer with the errors as top-level elements.</li>
			<li>The stack trace is presented underneath the error and when a frame is double-clicked an editor will open and go to the line in question.</li>
			<li>Markers represent memcheck errors inside the editor and are linked to the Problems View.</li>
		</ul>
		</p>
		<br/>
		<a href="images/Memcheck.png"><img style="border: 1px dashed #999999;" src="images/Memcheck_thumb.png" alt="Using the Memcheck tool" /></a>
		</div>
		<br/>

		<div>
		<h2>Massif</h2>
		<a href="images/Massif.png"><img style="border: 1px dashed #999999; margin-left:5px; float:right;" src="images/Massif_thumb.png" alt="Using the Massif tool" /></a>
		<p>
		Massif is a heap profiling tool. It takes several "snapshots" during execution of your program detailing the various heap allocations throughout.
		It's output for each snapshot primarily consists the time of the snapshot, how many bytes were allocated that can be used, and how much extra was allocated than was asked.
		The unit of time can be configured to be instructions, milliseconds or bytes. At specified intervals, "detailed" snapshots are produced.
		These detailed snapshots contain a tree of heap allocations that comprise that snapshot. Unlike Memcheck, Massif does not yet support XML output. 
		Massif's output is complex and as such requires creative ways of displaying it. Valgrind includes the ms_print program that is used to display Massif's output in a visually appealing manner.
		ms_print was used as a template for how to display this output.
		<ul>
    			<li>The default view of the output is with a TableViewer. Snapshots are displayed as tabular data, just as ms_print does.</li>
    			<li>For detailed snapshots, an icon indicates the snapshot can be double-clicked and the View will display a TreeViewer of the detailed snapshots' heap allocation trees.</li>
    			<li>ms_print also provides a bar chart of bytes allocated throughout execution. In perhaps a more appropriate style, there is an option to display a detailed line chart of this data.</li>
		</ul>
		</p>
		</div>
		<br/>

		<div>
		<h2>Future Plans</h2>
		<p>
		<ul>
			<li>Interactivity with the Heap Chart for Massif</li>
			<li>Caching output from recent Valgrind runs for quick restoration</li>
          		<li>Integration of the remainder of the Valgrind tool suite</li>
          		<li>Increase test coverage</li>
       		</ul>
		</p>
		</div>
		<br/>

		<div>
		<h2>Try it out</h2>
		<p>
		<ul>
		<li><a href="http://dev.eclipse.org/viewsvn/index.cgi/releng/trunk/org.eclipse.linuxtools.releng/psfs/valgrind.psf?root=Technology_LINUXTOOLS&view=co">Project Set File</a>
		(includes dependencies from <a href="http://www.eclipse.org/birt">BIRT</a> and <a href="http://www.eclipse.org/emf">EMF</a>)
    		<li>SVN
		<ul>
	          	<li>svn://dev.eclipse.org/svnroot/technology/org.eclipse.linuxtools/valgrind</li>
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

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
