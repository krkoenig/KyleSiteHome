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
                    $(this).find(".expand").text("");
                } else {
                    $(this).find(".expand").text("(click to expand)");
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

        <div class="section">
            <div class="header">
                Pathfinder Tools <span class = "expand">(click to expand)</span>
            </div>
            <div class="content">
                <a href="http://www.pathfinder.kylerkoenig.com">Link to the demo</a>
            </div>
        </div>
        <div class="section">
            <div class="header">
                Linked Lists <span class = "expand">(click to expand)</span>
            </div>
            <div class="content">
                <a href="http://www.linkedlist.kylerkoenig.com">Link to the demo</a>
            </div>
        </div>
    </body>
</html>


