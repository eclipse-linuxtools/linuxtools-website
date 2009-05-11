<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Tools Project";
	$pageKeywords	= "Eclipse, Linux, autoconf, automake, autotools, CDT, OProfile, Valgrind, RPM, systemtap";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
	    <table border="0" cellpadding="5">
	      <tr>
	        <td valign="top">
	          <img alt="Screenshot of Linux Tools projects" border="0" src="images/mainscreenshot.png">
	        </td>
	        <td></td>
	        <td valign="top">
	          <p>
	          The Linux Tools project aims to bring a <b>full-featured C and C++ IDE</b> to Linux developers.  
	          We build on the source editing and debugging features of the
	          <a href="http://eclipse.org/cdt">CDT</a> and integrate popular native
	          development tools such as the GNU Autotools, Valgrind, OProfile, RPM, Systemtap, etc.  Current
	          projects include Autotools build integration, a Valgrind heap usage analysis tool, and an OProfile call profiling
	          tool.  In the future we hope to expand into the area of tracing tools.
	          </p>
	          <p>
	          The project also provides a place for Linux
	          distributions to collaboratively overcome issues surrounding distribution packaging of
	          Eclipse technology.  The project produces both <em>best practices</em> and tools related to
	          packaging.  One of our future goals in this area is to provide a source archive of the
	          Eclipse SDK that can be used by all Linux distributions building and distributing it.
	          </p>

	          <table border="0" cellpadding="5">
	            <tr height=9>

	            <!-- Downloads -->
	            <tr>
	              <td width=20></td>
	              <td><a href="/linuxtools/downloads.php"><img border=0 src="images/downloads.gif"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="/linuxtools/downloads.php">Downloads</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>Get our latest <b>0.2.0</b> release (<em>2009-05-11</em>)!</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <!-- Get Involved -->
	            <tr>
	              <td width=20></td>
	              <td><a href="/linuxtools/getInvolved.php"><img border=0 src="images/community.jpg"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="/linuxtools/getInvolved.php">Get Involved</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>Find out how you can get involved with the project</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <!-- Plans -->
	            <tr>
	              <td width=20></td>
	              <td><a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros"><img border=0 src="images/reference.png"></a></td>
	              <td>
	                <table border="0" cellpadding="0">
	                  <tr>
	                    <td><font size=+1><a href="http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros">Plans</a></font></td>
	                  </tr>
	                  <tr>
	                    <td>See the project plans</td>
	                  </tr>
	                </table>
	              </td>
	            </tr>

	            <tr height=11></tr>

	          </table>

	          <!-- Project News -->
	          <div class="homeitem3col">
				<h3>Project News</h3>
				<ul>
				    <li><em>2009-05-11</em>:  Our 0.2.0 release is <a href="http://www.eclipse.org/linuxtools/downloads.php">available</a>! 
				    Check out our <a href="http://www.eclipse.org/linuxtools/new/" >New and Noteworthy</a> page.</li>
					<li><em>2009-04-07</em>:  A presentation on the project was given at EclipseCon 2009 and the <a href="http://overholt.fedorapeople.org/LinuxTools.pdf">slides are available</a>.</li>
					<li><em>2009-03-27</em>:  Our screencasts have been re-recorded with audio!  <a href="/linuxtools/downloads.php">Check them out</a>.</li>
				    <li><em>2009-03-03</em>:  The Linux Tools project team has put together some screencast videos demonstrating functionality in our 0.1.0 and 0.2.0 releases.  They are all available in Ogg Theora and Flash video under the "Screencast videos" section of our <a href="/linuxtools/downloads.php">downloads page</a>.
				</ul>
              </div>

	        </td>
	      </tr>
	    </table>
	</div>

	<div id="rightcolumn" class="sideitem" style="text-align: center">
	   <h6>Incubation</h6>
	   <a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation"/></a>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
