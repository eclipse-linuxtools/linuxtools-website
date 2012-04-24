<?php

$theme="Nova";

# Page-specific Nav bars go here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
    $Nav->addNavSeparator("Linux Tools", "/linuxtools/index.php");
 	$Nav->addCustomNav("Download", "/linuxtools/downloads.php", "_self", 3);
	$Nav->addCustomNav("Documentation", "http://wiki.eclipse.org/Linux_Tools_Project", "_blank", 3);
	$Nav->addCustomNav("Support", "/linuxtools/contact.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "http://wiki.eclipse.org/Linux_Tools_Project/Getting_Involved", "_blank", 3);
	
   
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/linuxtools/style.css"/>');
?>
