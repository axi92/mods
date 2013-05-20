<!DOCTYPE html>
<html lang="de-AT">
    <head>
        <meta charset="ISO-8859-1" />
        <title>Mod Collection by axi92</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="style.css" />
        <!-- <script src="js/prototype.js" type="text/javascript"></script>
        <script src="js/slider.js" type="text/javascript"></script>
        <script src="js/scroller.js" type="text/javascript"></script>     -->
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="style.css" />
        <script>
            $(function() {
            $( "#menu" ).menu();
            });
            </script>
    </head>
    <body>
        <ul id="menu" class="menue1">
            <li><a href="#">Skins -></a>
                <ul>
                    <li><a href="index.php?page=cops">Cops</a></li>
                    <li><a href="index.php?page=girl">Girl</a></li>
                    <li><a href="index.php?page=terroristen">Terroristen</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Cars</a>
                <ul>
                    <li><a href="index.php?page=terroristen">Bullet</a></li>
                    <li><a href="#">Cheetah</a></li>
                    <li><a href="#">Turismo</a></li>
                </ul>
            </li>
            <li>
            <a href="#">Sonstiges</a>
                <ul>
                    <li class="ui-state-disabled"><a href="#">Ada</a></li>
                    <li><a href="#">Saarland</a></li>
                    <li><a href="#">Salzburg</a></li>
                </ul>
            </li>
            <li><a href="#">Saarland</a></li>
            <li>
                <a href="#">Salzburg</a>
                <ul>
                    <li>
                        <a href="#">Delphi</a>
                        <ul>
                            <li><a href="#">Ada</a></li>
                            <li><a href="#">Saarland</a></li>
                            <li><a href="#">Salzburg</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Delphi</a>
                        <ul>
                            <li><a href="#">Ada</a></li>
                            <li><a href="#">Saarland</a></li>
                            <li><a href="#">Salzburg</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Perch</a></li>
                </ul>
            </li>
        </ul>
        <div class="makeScroll" id="center">
            <div class="makeScroll" id="inhalt">
<?php
error_reporting(0);
if ($_GET["page"] == 'cops')
{
    echo '<h1>Cop Skins</h1>';
    echo '
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    Inhalt <br />
    ';
}
if ($_GET["page"] == 'girl')
{
    echo '<h1>Girl Skins</h1>';
}
if ($_GET["page"] == 'terroristen')
{
    echo '<h1>Terroristen Skins</h1>';
}



?>
            </div>
        </div>
    </body>
</html>
