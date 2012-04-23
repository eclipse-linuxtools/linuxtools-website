<?php

$theme="Nova";

# Page-specific Nav bars go here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
    $Nav->addNavSeparator("Linux Tools", "/linuxtools/index.php");
 	$Nav->addCustomNav("Download", "/linuxtools/download.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "http://wiki.eclipse.org/Linux_Tools_Project", "_blank", 3);
	$Nav->addCustomNav("Support", "/linuxtools/contact.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "http://wiki.eclipse.org/Linux_Tools_Project/Getting_Involved", "_blank", 3);
	
    $Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=technology.linux-distros", "", 1);
    $Nav->addCustomNav("Plan", "http://www.eclipse.org/projects/project-plan.php?projectid=technology.linux-distros", "", 2);
    $Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/Linux_Tools_Project", "_self", 2);
    $Nav->addCustomNav("Contribute/Get Involved", "http://wiki.eclipse.org/Linux_Tools_Project/Getting_Involved", "_self", 2);
    $Nav->addCustomNav("Contact Us", "/linuxtools/contact.php", "_self", 2);
    $Nav->addCustomNav("Downloads", "/linuxtools/downloads.php");
$Nav->addNavSeparator("C/C++ Tools Projects", "/linuxtools/index.php");
	$Nav->addCustomNav("Autotools", "/linuxtools/projectPages/autotools", "_self", 2);
	$Nav->addCustomNav("Callgraph", "/linuxtools/projectPages/callgraph", "_self", 2);
	$Nav->addCustomNav("ChangeLog", "/linuxtools/projectPages/changelog", "_self", 2);
	$Nav->addCustomNav("GProf", "/linuxtools/projectPages/gprof", "_self", 2);
	$Nav->addCustomNav("Gcov", "/linuxtools/projectPages/gcov", "_self", 2);
	$Nav->addCustomNav("Libhover", "/linuxtools/projectPages/libhover", "_self", 2);
	$Nav->addCustomNav("Man Page", "/linuxtools/projectPages/manpage", "_self", 2);
	$Nav->addCustomNav("LTTng", "/linuxtools/projectPages/lttng", "_self", 2);	
	$Nav->addCustomNav("OProfile", "/linuxtools/projectPages/oprofile", "_self", 2);
	$Nav->addCustomNav("Systemtap", "/linuxtools/projectPages/systemtap", "_self", 2);
	$Nav->addCustomNav("Valgrind", "/linuxtools/projectPages/valgrind", "_self", 2);
$Nav->addNavSeparator("Packaging/Distribution Projects", "/linuxtools/index.php");
	$Nav->addCustomNav("eclipse-build", "http://wiki.eclipse.org/Linux_Tools_Project/Eclipse_Build", "_self", 2);
	$Nav->addCustomNav("RPM Stubby", "/linuxtools/projectPages/rpmstubby", "_self", 2);
	$Nav->addCustomNav("Specfile Editor", "/linuxtools/projectPages/specfile", "_self", 2);
	$Nav->addCustomNav("Distribution Packaging Status", 	"http://wiki.eclipse.org/Linux_Distributions_Packaging_Status", "_self", 2);
	$App->AddExtraHtmlHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"/linuxtools/style.css\"/>\n");
?>
