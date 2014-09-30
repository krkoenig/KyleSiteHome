<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Kyle R. Koenig</title>

        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            $(document).on('click', '.section', function () {

                $(this).find(".content").toggle();
                if ($(this).find(".content").is(":visible")) {
                    $(this).find(".expand").text("(Click to Collapse)");
                } else {
                    $(this).find(".expand").text("(Click to Expand)");
                }
            });

        </script>
    </head>
    <body>
        <div class="intro">
            <p>
                Hello, my name is Kyle Koenig and this is my personal 
                development site. Here I have listed my personal projects along
                with descriptions, the languages used in their creation,
                and links to demo each of them and/or their source code.
            </p>
            <p>
                Feel free to look around and if you wish to email me, I can be
                contacted at <a href="mailto:kylerkoenig@gmail.com">kylerkoenig@gmail.com</a>.
            </p>
        </div>

        <div class="section" >
            <div class="header">
                Pathfinder Tools <span class = "expand">(Click to Expand)</span>
            </div>
            <div class="content">
                <p>
                    <strong>Description:</strong> Currently, this site is a shell
                    for tools I'm working on for the Pathfinder role playing 
                    game system. Users register and log into a database that 
                    stores past information that the user saved. Currently the
                    only tool implemented is that to create NPCs that are 
                    either random or generated based on several choice options.
                </p>
                <p>
                    <strong>Technical Information:</strong> The site makes use
                    of the Symfony 2 framework and as such is programmed using 
                    PHP 5.4 due to the host. TWIG is used to build templates
                    throughout the site which are then formatted based on 
                    several CSS stylesheets.
                </p>
                <a href="http://www.pathfinder.kylerkoenig.com">Demo</a>
                <a href="https://github.com/krkoenig/PathfinderSuite">Source Code on GitHub</a>
            </div>
        </div>

        <div class="section">
            <div class="header">
                Linked Lists <span class = "expand">(Click to Expand)</span>
            </div>
            <div class="content">
                <p>
                    <strong>Description:</strong> This project is an example in
                    using linked lists in PHP. As per the user, a singley or
                    doubley linked list is created and manipulated. Lists are 
                    stored in sessions so that the user can manipulate the same
                    list each refresh. 
                </p>
                <p>
                    <strong>Technical Information:</strong> The site is 
                    programmed PHP 5.4 due to the host and formatted with HTML
                    pages and CSS stylesheets.
                </p>
                <a href="http://www.linkedlist.kylerkoenig.com">Demo</a>
                <a href="https://github.com/krkoenig/LinkedLists">Source Code on GitHub</a>
            </div>
        </div>

        <div class="section">
            <div class="header">
                Strings <span class = "expand">(Click to Expand)</span>
            </div>
            <div class="content">
                <p>
                    <strong>Description:</strong> This project is an example in
                    using string manipulation in PHP. A user enters a string and
                    then using various buttons, performs several operations on
                    the strings. 
                </p>
                <p>
                    <strong>Technical Information:</strong> The site is 
                    programmed PHP 5.4 due to the host and formatted with HTML
                    pages and CSS stylesheets.
                </p>
                <a href="http://www.strings.kylerkoenig.com">Demo</a>
                <a href="https://github.com/krkoenig/Strings">Source Code on GitHub</a>
            </div>
        </div>

        <div class="section">
            <div class="header">
                An Experiment in Non-Random Shuffling <span class = "expand">(Click to Expand)</span>
            </div>
            <div class="content">
                <p>
                    <strong>Description:</strong> This site simulates several
                    different modes of shuffling a deck of cards and the returns
                    the number of replications before you reach the deck's
                    starting state. It is mostly an experiment to see how
                    effective non-random shuffling techniques really are. 
                </p>
                <p>
                    <strong>Technical Information:</strong> The site is 
                    programmed using Javascript and formatted with HTML
                    pages and CSS stylesheets.
                </p>
                <a href="http://www.shuffle.kylerkoenig.com">Demo</a>
                <a href="https://github.com/krkoenig/Shuffle_Experiment">Source Code on GitHub</a>
            </div>
        </div>
    </body>
</html>


