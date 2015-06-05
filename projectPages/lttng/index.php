<?php                                                                                                                       require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
    $pageTitle     = "LTTng Integration";
    $pageKeywords  = "linux, eclipse, downloads";
    $pageAuthor    = "Francois Chouinard";

    # Paste your HTML content between the EOHTML markers!
    $html = <<<EOHTML

    <div id="midcolumn">
        <h1>$pageTitle</h1>

        <h2>Separated into <a href="https://projects.eclipse.org/projects/tools.tracecompass">Trace Compass project</a>.</h2>
    </div>
    
    <div id="rightcolumn">
    </div>

EOHTML;


    # Generate the web page
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
