<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Linux Tools Project Downloads";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Andrew Overholt";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p> 
		The preferred method of installation is via the 
		<a href="http://wiki.eclipse.org/Linux_Tools_Project/User_Guide#Installation">Update Manager (instructions available)</a>.
		</p>
		
		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<!--
		<h3>0.3.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp"><img border=0 src="/linuxtools/images/icon-help.gif"></a></h3> 
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/linuxtools/new">New & Noteworthy</a> (Released 2009-08-19).
		<br>&nbsp;&nbsp;&nbsp;Requires JRE >= 5.0 and Eclipse 3.5.
		-->
		<h3>0.2.1 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/User_Guide#Installation"><img border=0 src="/linuxtools/images/icon-help.gif"></a></h3> 
		<br>&nbsp;&nbsp;&nbsp;<a href="http://www.eclipse.org/linuxtools/new">New & Noteworthy</a> (Released 2009-06-05).
		<br>&nbsp;&nbsp;&nbsp;Requires JRE >= 5.0 and Eclipse 3.4.
		<br>&nbsp;&nbsp;&nbsp;Specific tools require their underlying native tools (ex. GNU Autotools, Valgrind, OProfile).
		<br>&nbsp;&nbsp;&nbsp;Other dependencies of some tools include <a href="http://eclipse.org/cdt">CDT</a> and <a href="http://eclipse.org/birt">BIRT</a>.
		<br>&nbsp;&nbsp;&nbsp;Installations via the update site will automatically get these dependencies.
		<!--
		<br>&nbsp;&nbsp;&nbsp;<b>New!</b> <a href="http://download.eclipse.org/technology/linuxtools/eclipse-build/">Tarballs</a> and <a href="http://wiki.eclipse.org/Linux_Tools_Project/Eclipse_Build">instructions</a> for building the Eclipse SDK.
		-->
		<ul> 
			<li>
				<a title="Update Site Zip" href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/S200905251646/linuxtools-Update-incubation-0.2.1.zip">
					<img border=0 src="/linuxtools/images/icon-save.gif"></a>
				&nbsp;&nbsp;<b>http://download.eclipse.org/technology/linuxtools/update</b>
			</li>
		</ul>
		</div>
		
		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Screencast videos</h3>
		<ul>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/changelog">ChangeLog</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/changelogdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1192">Flash video for viewing in a web browser</a>)</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/libhover">Libhover</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/libhoverdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1195">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/oprofile">OProfile</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/eclipse-oprofile-demo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1196">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/specfile">Specfile editor</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/specfile-demo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1201">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Memcheck</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-1.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1197">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Massif</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-2.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1198">Flash video for viewing in a web browser</a>))</li>
		</ul>
		</div>
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