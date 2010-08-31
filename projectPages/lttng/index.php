<?php                                                                                                                       require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
    $pageTitle     = "Linux Tools Project - LTTng Integration";
    $pageKeywords  = "linux, eclipse, downloads";
    $pageAuthor    = "Francois Chouinard";

    # Add page-specific Nav bars here
    # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
    # $Nav->addNavSeparator("My Page Links",    "downloads.php");
    # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
    # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

    # End: page-specific settings
    #

    # Paste your HTML content between the EOHTML markers!
    $html = <<<EOHTML

    <div id="midcolumn">
        <h1>$pageTitle</h1>

        <h2>Overview</h2>
        <p>
        <a href="http://lttng.org">LTTng</a> (Linux Tracing Toolkit, next 
        generation) is a high performance tracing tool for Linux that
        efficiently handles large amounts of trace data. Initially aimed 
        at the Linux kernel, its technology has been extended to support 
        user space tracing (UST).
        <p>
        LTTng comes as a set of kernel patches, to efficiently collect the
        trace data, and a suite of integrated components to [1] configure and
        control the collection of traces, and [2] visualize and analyze the
        trace data.
        <p>
        The scope of this project is to deliver an Eclipse front-end for LTTng,
        functionally equivalent to the current LTTv component, and to provide a
        framework for the integration of tracers/loggers as well as specialized
        trace analysis tools.

        <h2>Current Status</h2>
        <p>
        <h4>LTTng perspective</h4>
        <ul>
            <li>Project View - Project management</li>
            <li>Events View - Tabular view of the raw events</li>
            <li>Time Frame View - Time-based navigation in the traces</li>
            <li>Histogram View - Event distribution analysis</li> 
            <li>Control Flow View - Processes state analysis</li>
            <li>Resource View - System resources state analysis</li>
            <li>Statistics View - General traces statistics</li>
            <li>Integrated Help</li>
        </ul>

        <h4>LTTng internals</h4>
        <ul>
            <li>Integration of a Kernel State manager</li>
            <li>Integration of the LTTv parsing library</li>
            <li>Integration of distributed, multi-processor, multi-core traces</li>
        </ul>

        <h4>Infrastructure (non-LTTng specific)</h4>
        <ul>
            <li>Generic Event Model</li>
            <li>Generic Trace/Experiment Model</li>
            <li>Generic Component Model</li>
            <li>Generic, request-based, inter-component communication mechanism</li>
            <li>Generic Events View</li>
            <li>Support for arbitrarily large traces (that exceed available memory)</li>
        </ul>

        <h2>Future Plans</h2>
        <p>

        <h4>LTTng perspective</h4>
        <ul>
            <li>Control View - Tracer control (local or remote)</li>
        </ul>

        <h4>LTTng internals</h4>
        <ul>
            <li>Integration of User Space Tracing (UST)</li>
            <li>Integration of trace synchronization analysis</li>
            <li>Integration of dependency analysis</li>
        </ul>

        <h4>Infrastructure (non-LTTng)</h4>
        <ul>
            <li>Efficient retrieval and handling of trace files</li>
            <li>Trace streaming</li>
            <li>Analysis of stand-alone traces</li>
            <li>Correlation of heterogeneous traces</li>
            <li>Generic tracing project management</li>
            <li>Generic tracing tool control</li>
            <li>Generic tracing and statistical views</li>
            <li>Event filtering and color coding</li>
            <li>Trace annotation</li>
            <li>Source code lookup</li>
            <li>Toolbox of tracing widgets that can be used to assemble application specific views</li>
            <li>Toolbox of statistical widgets</li>
            <li>Wizards for tracing/logging/monitoring application integration</li>
            <li>Wizards for parser generation (CSV, XML, plain text, regular expression, ...)</li>
            <li>Wizards for analysis components integration (generic or proprietary)</li>
            <li>Support for Cut and Paste, Drag and Drop, etc</li>
        </ul>

        <h2>Screenshots</h2>
        <p>
        <br>
          <center>
            <a href="images/lttng_perspective.png"><img src="images/lttng_perspective_thumb.png"/></a>
            <br>
            LTTng Perspective
          </center>
          <p>
        </p>
        
        <h2>Video Demo</h2>
        <p>
        Coming soon.
        </p>

        <h2>Try it out</h2>
        <p>
        Follow the instructions on the <a href="http://wiki.eclipse.org/Linux_Tools_Project/LTTng">wiki</a>.
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
