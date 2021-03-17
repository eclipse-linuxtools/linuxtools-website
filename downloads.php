<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	$pageTitle 		= "Linux Tools Downloads";
	$pageKeywords	= "linux, eclipse, downloads";
	$pageAuthor		= "Linux Tools committers";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>
		The preferred method of installation is via the
		Update Manager (<a href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp">instructions</a>).  A getting started
		guide is <a href="http://wiki.eclipse.org/Linux_Tools_Project/Getting_Started">available on the wiki</a>.
		</p>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>8.2.0 Release&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp"><img src="/linuxtools/images/icon-help.gif" alt="Help icon" /></a></h3>
		<br/>&nbsp;&nbsp;&nbsp;<a href="https://wiki.eclipse.org/Linux_Tools_Project/News/NewIn81">New &amp; Noteworthy</a>.
		<a href="https://ci.eclipse.org/linuxtools/job/linuxtools-8.2/4/testReport/">Unit test results</a>.
		<br/>&nbsp;&nbsp;&nbsp;Requires:
		<ul>
		<li>JRE >= 11.0</li>
	        <li>Eclipse >= 4.19</li>
		<li><a href="http://eclipse.org/cdt">CDT</a> >= 10.2.0</li>
		<li>org.mandas.docker-client 3.2.1.v20200519-1937 (for Docker Tooling feature)
		<li>GEF >= 3.8.2 (for Draw2d and Zest packages)</li>
		<li>Specific tools require their underlying native tools (ex. Valgrind, OProfile, SystemTap, Perf)</li>
		<li>There are some Orbit dependencies such as antlr</li>
		</ul>
		<br/>&nbsp;&nbsp;&nbsp;Installations via the 2021-03 p2 aggregate repository will automatically get these dependencies.
		<br/>&nbsp;&nbsp;&nbsp;Building the Eclipse SDK?  <a href="http://download.eclipse.org/linuxtools/eclipse-build/">Tarballs</a> and <a href="http://wiki.eclipse.org/Linux_Tools_Project/Eclipse_Build">instructions</a>.
		<br/>&nbsp;&nbsp;&nbsp;<a href="http://git.eclipse.org/c/linuxtools/org.eclipse.linuxtools.git/tag/?id=v8.2.0">Source tarballs</a> for Linux Tools plugins.
		<ul>
			<li>
				<a title="p2 Main Repository Zip" href="http://www.eclipse.org/downloads/download.php?file=/linuxtools/linuxtools-8.2.0.zip">
					<img src="/linuxtools/images/icon-save.gif" alt="Download icon"/></a>
				&nbsp;&nbsp;(<a href="http://download.eclipse.org/linuxtools/linuxtools-8.2.0.zip.md5">md5sum</a>)
				<b>http://download.eclipse.org/linuxtools/update-8.2.0</b>
			</li>
			<li>
				<a title="p2 Docker Tooling Repository Zip" href="http://www.eclipse.org/downloads/download.php?file=/linuxtools/linuxtools-docker-5.2.0.zip">
					<img src="/linuxtools/images/icon-save.gif" alt="Download icon"/></a>
				&nbsp;&nbsp;(<a href="http://download.eclipse.org/linuxtools/linuxtools-docker-5.2.0.zip.md5">md5sum</a>)
				<b>http://download.eclipse.org/linuxtools/update-docker-5.2.0</b>
			</li>
		</ul>
		</div>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Nightly builds&nbsp;<a title="More Info" href="http://wiki.eclipse.org/Linux_Tools_Project/PluginInstallHelp"><img src="/linuxtools/images/icon-help.gif" alt="Help icon"/></a></h3>
		<br/>&nbsp;&nbsp;&nbsp;Early adopters and Linux Tools developers may wish to use our nightly development builds.  These are not suitable for use by everyone.
		<ul>
			<li>
				Nightly p2 repository:  <b>http://download.eclipse.org/linuxtools/updates-nightly</b>
			</li>
			<li>
				Docker Tooling Nightly p2 repository:  <b>http://download.eclipse.org/linuxtools/updates-docker-nightly</b>
			</li>
		</ul>
		</div>

		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Screencast videos</h3>
		<ul>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/changelog">ChangeLog</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/changelogdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1192">Flash video for viewing in a web browser</a>)</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/libhover">Libhover</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/libhoverdemo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1195">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/specfile">Specfile editor</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/specfile-demo.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1201">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Memcheck</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-1.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1197">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/valgrind">Valgrind Massif</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/valgrind-demo-2.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1198">Flash video for viewing in a web browser</a>))</li>
		<li>&nbsp;&nbsp;&nbsp;<a href="/linuxtools/projectPages/callgraph">Function Callgraph</a> (<a href="http://www.eclipse.org/downloads/download.php?file=/technology/linuxtools/videos/callgraph-realtimeparsing.ogg">original Ogg Theora</a>, <a href="http://video.linuxfoundation.org/video/1198">Flash video for viewing in a web browser</a>))</li>
		
		</ul>
		</div>
		
		<div class="homeitem3col" style="margin-left:40px; width:90%">
		<h3>Older releases</h3>
		&nbsp;&nbsp;&nbsp;<a href="http://archive.eclipse.org/linuxtools/">archive.eclipse.org</a> hosts older releases.  If a URL contains <tt>download.php?file=</tt> then it will function whether something is on the Eclipse mirrors, at download.eclipse.org, or if it has been moved to archive.eclipse.org.
		</div>
	</div>

	<div id="rightcolumn">
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
