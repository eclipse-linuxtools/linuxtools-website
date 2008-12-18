<?php

if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText)$/", $_GET["skin"], $regs))
{
	$theme = $regs[1];
}
else
{
	$theme = "Lazarus";
}

$Nav->setLinkList(null);

	$branding = <<<EOBRANDING
<div id="branding">
<center>
<h2>Linux Tools Project</h2>
</center>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);

$pageAuthor = isset($pageAuthor) ? $pageAuthor : "";
$pageKeywords = isset($pageKeywords) ? $pageKeywords : "linux, eclipse";

# Page-specific Nav bars go here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
$Nav->addNavSeparator("Linux Tools", "index.php");
    $Nav->addCustomNav("Project Summary", "/projects/project_summary.php?projectid=technology.linux-distros", "", 1);
    $Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros", "", 2);
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/Linux_Distributions_Project", "_self", 2);
    $Nav->addCustomNav("Get Involved", "getInvolved.php", "_self", 2);
    $Nav->addCustomNav("Downloads", "downloads.php");
$Nav->addNavSeparator("Projects", "index.php");
	$Nav->addCustomNav("Autotools", "/linuxtools/projectPages/autotools", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;ChangeLog", "/linuxtools/projectPages/changelog", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;eclipse-build", "/linuxtools/projectPages/eclipse-build", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;OProfile", "/linuxtools/projectPages/oprofile", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;RPM Stubby", "/linuxtools/projectPages/rpmstubby", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Specfile Editor", "/linuxtools/projectPages/specfile", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Systemtap", "/linuxtools/projectPages/systemtap", "_self", 2);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Valgrind", "/linuxtools/projectPages/valgrind", "_self", 2);
$Nav->addCustomNav("Distribution Packaging Status", 	"distroStatus.php");
?>
