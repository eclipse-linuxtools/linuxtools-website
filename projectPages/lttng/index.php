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
        <a href="http://lttng.org">LTTng</a> (Linux Trace Toolkit, next 
        generation) is a high performance tracing tool for Linux that
        efficiently handles large amounts of trace data. Initially aimed 
        at the Linux kernel, its technology has been extended to support 
        user space tracing (UST).
        <p>
        The scope of this project is to deliver an OS-independent Eclipse
        front-end for LTTng, in order to [1] configure and control LTTng,
        [2] collect the trace data, and [3] visualize and analyze the data
        collected.
        <p>
        It supports arbitrarily large traces that exceed available memory.
        It also provides a framework for the integration of various tracers
        and loggers (e.g. HW) as well as specialized trace analysis tools.

        <h2>Current Status</h2>
        <p>
        <h4>Tracing perspective (applies to all supported trace types)</h4>
        <ul>
            <li>Project View - Tracing project management</li>
            <li>Events View - Advanced tabular view of the raw trace events</li>
            <li>Statistics View - General traces statistics</li>
            <li>Histogram View - Event distribution analysis</li>
        </ul>

        <h4>LTTng Kernel perspective</h4>
        <ul>
            <li>Control Flow View - Processes state transition analysis</li>
            <li>Resource View - System resources state transition analysis</li>
            <li>Control View - LTTng tracer control</li>
            <li>CPU Usage View - Shows CPU usage per process</li>
        </ul>

        <h4>LTTng-UST perspective</h4>
        <ul>
            <li>Call Stack View showing function entries and exits</li>
            <li>Memory Usage view, using libc instrumentation</li>
        </ul>

        <h4>Infrastructure</h4>
        <ul>
            <li>Generic Component, Trace and Event Models</li>
            <li>Event searching, filtering, bookmarking and color coding</li>
            <li>Generic Text Parser (XML, regex)</li>
            <li>Common Trace Format (CTF) parser, using separate library</li>
            <li>Inter-component communication mechanism using signals</li>
            <li>Framework for trace event requests</li>
            <li>Source code and EMF model lookup</li>
            <li>Generic State System (GSS)</li>
            <li>Generic Time Chart View</li>
            <li>Generic Call Stack View</li>
            <li>Trace synchronization framework</li>
            <li>Generic plotting framework based on SWTChart</li>
            <li>Data-driven analyses and views</li>
        </ul>

        <h2>Future Plans</h2>
        <p>

        <h4>Infrastructure</h4>
        <ul>
            <li>More data-driven views (XY charts, sequence diagrams)</li>
            <li>Integration of dependency analysis</li>
            <li>Support for live trace reading</li>
            <li>Support for pcap traces</li>
        </ul>

        <h2>Screenshots</h2>
        <p>
        <br>
          <center>
            <a href="images/perspective.png"><img src="images/perspective_thumb.png"/></a>
            <br>
            LTTng Perspective
          </center>
          <p>
        </p>
        
        <h2>Video Demo</h2>
        <p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/AdffSOmSTQY" frameborder="0" allowfullscreen></iframe>
        </p>
        <p>
          There are other TMF-related videos in the <a href="https://www.youtube.com/user/lttng/videos">LTTng channel</a>.
        </p>

        <h2>Try it out</h2>
        <p>
        Follow the instructions <a href="http://lttng.org/eclipse">here</a>.
    </div>
    
    <div id="rightcolumn">
    </div>

EOHTML;


    # Generate the web page
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
