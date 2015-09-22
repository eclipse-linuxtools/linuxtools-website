<?php

$theme="solstice";

$Nav->setLinkList(null);

	$branding = <<<EOBRANDING
<div id="branding">
<center>
<h2>Linux Tools</h2>
</center>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);

$pageAuthor = isset($pageAuthor) ? $pageAuthor : "";
$pageKeywords = isset($pageKeywords) ? $pageKeywords : "linux, eclipse";

# Page-specific Nav bars go here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
$Nav->addNavSeparator("Linux Tools", "/linuxtools/index.php");
# Break the navigation into sections
	$Nav->addCustomNav("About the Project", "https://projects.eclipse.org/projects/tools.linuxtools", "", 1);
    $Nav->addCustomNav("Plan", "http://projects.eclipse.org/projects/tools.linuxtools/releases/4.0.0/plan", "", 2);
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/Linux_Tools_Project", "_self", 2);
    $Nav->addCustomNav("Get Involved", "http://wiki.eclipse.org/Linux_Tools_Project/Getting_Involved", "_self", 2);
    $Nav->addCustomNav("Contact Us", "/linuxtools/contact.php", "_self", 2);
    $Nav->addCustomNav("Downloads", "/linuxtools/downloads.php");
$Nav->addNavSeparator("Sub Projects", "/linuxtools/index.php");
	$Nav->addCustomNav("Callgraph", "/linuxtools/projectPages/callgraph", "_self", 2);
	$Nav->addCustomNav("ChangeLog", "/linuxtools/projectPages/changelog", "_self", 2);
	$Nav->addCustomNav("Docker Tooling", "/linuxtools/projectPages/docker", "_self", 2);
	$Nav->addCustomNav("GProf", "/linuxtools/projectPages/gprof", "_self", 2);
	$Nav->addCustomNav("Gcov", "/linuxtools/projectPages/gcov", "_self", 2);
	$Nav->addCustomNav("Javadocs plugin", "/linuxtools/projectPages/javadocs", "_self", 2);
	$Nav->addCustomNav("Libhover", "/linuxtools/projectPages/libhover", "_self", 2);
	$Nav->addCustomNav("Man Page", "/linuxtools/projectPages/manpage", "_self", 2);
	$Nav->addCustomNav("OProfile", "/linuxtools/projectPages/oprofile", "_self", 2);
	$Nav->addCustomNav("Perf", "/linuxtools/projectPages/perf", "_self", 2);
	$Nav->addCustomNav("Systemtap", "/linuxtools/projectPages/systemtap", "_self", 2);
	$Nav->addCustomNav("Valgrind", "/linuxtools/projectPages/valgrind", "_self", 2);
	$Nav->addCustomNav("eclipse-build", "http://wiki.eclipse.org/Linux_Tools_Project/Eclipse_Build", "_self", 2);
	$Nav->addCustomNav("RPM", "/linuxtools/projectPages/specfile", "_self", 2);
?>
