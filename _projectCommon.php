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

$pageAuthor = isset($pageAuthor) ? $pageAuthor : "";
$pageKeywords = isset($pageKeywords) ? $pageKeywords : "linux, eclipse";

# Page-specific Nav bars go here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
#$Nav->addNavSeparator("Linuxtools home", 	"index.php");
$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=technology.linux-distros", "", 1);
$Nav->addCustomNav("Wiki",				"http://wiki.eclipse.org/index.php/Linux_Distributions_Project", "_self", 2);
$Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros", "", 1);
#$Nav->addCustomNav("Developers", 		"developers.php", 		"_self", 2);
$Nav->addNavSeparator("Downloads", 	"downloads.php");

?>
