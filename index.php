<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	$pageTitle 		= "Linux Tools Project";
	$pageKeywords	= "Eclipse, Linux, autoconf, automake, autotools, CDT, OProfile, Valgrind, RPM, systemtap";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	ob_start();?>
<div id="maincontent">
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
	          development tools such as the GNU Autotools, Valgrind, OProfile, RPM, SystemTap, GCov, GProf, LTTng, etc.  Current
	          projects include LTTng trace viewers and analyzers, an RPM .spec editor, Autotools build integration, a Valgrind heap 
	          usage analysis tool, and OProfile call profiling tools.
	          </p>
	          <p>
	          The project also provides a place for Linux
	          distributions to collaboratively overcome issues surrounding distribution packaging of
	          Eclipse technology.  The project produces both best practices and tools related to
	          packaging.  Since our 0.3.0 release, one of our features is a source archive of the
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
	                    <td>Get our latest <b>0.6.1</b> release (<em>2010-08-26</em>)!  Previous version (0.6.0) a part of <a href="http://eclipse.org/helios/">Helios</a> or is available from our update site (see our <a href="http://www.eclipse.org/linuxtools/downloads.php">downloads page</a> for more details).</td>
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

	         </td>
	      </tr>
	    </table>
	</div>
	    <? include("_rightColumn.php"); ?>
</div>
<?php
    $html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
