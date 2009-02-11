<?php

if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText)$/", $_GET["skin"], $regs))
{
	$theme = $regs[1];
}
else
{
	$theme = "Lazarus";
}

#$theme="Nova";

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
$Nav->addNavSeparator("Linux Tools", "/linuxtools/index.php");
    $Nav->addCustomNav("Project Summary", "/projects/project_summary.php?projectid=technology.linux-distros", "", 1);
    $Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros", "", 2);
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/Linux_Tools_Project", "_self", 2);
    $Nav->addCustomNav("Get Involved", "/linuxtools/getInvolved.php", "_self", 2);
    $Nav->addCustomNav("Contact Us", "/linuxtools/contact.php", "_self", 2);
    $Nav->addCustomNav("Downloads", "/linuxtools/downloads.php");
$Nav->addNavSeparator("C/C++ Tools Projects", "/linuxtools/index.php");
	$Nav->addCustomNav("Autotools", "/linuxtools/projectPages/autotools", "_self", 2);
	$Nav->addCustomNav("ChangeLog", "/linuxtools/projectPages/changelog", "_self", 2);
	$Nav->addCustomNav("Libhover", "/linuxtools/projectPages/libhover", "_self", 2);
	$Nav->addCustomNav("OProfile", "/linuxtools/projectPages/oprofile", "_self", 2);
	$Nav->addCustomNav("Systemtap", "/linuxtools/projectPages/systemtap", "_self", 2);
	$Nav->addCustomNav("Valgrind", "/linuxtools/projectPages/valgrind", "_self", 2);
$Nav->addNavSeparator("Packaging/Distribution Projects", "/linuxtools/index.php");
	$Nav->addCustomNav("eclipse-build", "/linuxtools/projectPages/eclipse-build", "_self", 2);
	$Nav->addCustomNav("RPM Stubby", "/linuxtools/projectPages/rpmstubby", "_self", 2);
	$Nav->addCustomNav("Specfile Editor", "/linuxtools/projectPages/specfile", "_self", 2);
	$Nav->addCustomNav("Distribution Packaging Status", 	"http://wiki.eclipse.org/Linux_Distributions_Packaging_Status", "_self", 2);
?>
