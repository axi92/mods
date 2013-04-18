<!DOCTYPE html>
<html lang="de-AT">
    <head>
        <meta charset="ISO-8859-1" />
        <title>Mod Collection by axi92</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="style.css" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="style.css" />
        <script>
            $(function() {
            $( "#menu" ).menu();
            });
            </script>
        <style>
            .ui-menu { width: 150px; }
        </style>
    </head>
    <body>
        <ul id="menu">
            <li><a href="#">Skins</a>
                <ul>
                    <li><a href="index.php?skins=cops">Cops</a></li>
                    <li><a href="#">Girl</a></li>
                    <li><a href="#">Terroristen</a></li>
                </ul>    
            </li>
            <li><a href="#">Terror</a></li>
            <li><a href="#">Sonstiges</a></li>
            <li>
            <a href="#">Delphi</a>
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
            <li class="ui-state-disabled"><a href="#">Amesville</a></li>
        </ul>
<?php 
error_reporting(0);
if ($_GET["skins"] == 'cops')
{
    echo 'Cop Skins';
}


 ?>
    </body>
</html>