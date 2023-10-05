<?php
if (!isset($menu))
print '<!doctype html>
<html>

    <head>
        <meta>
        <title></title>
    </head>

    <body>

        <header>
            <nav>';
               include("menu.php");
               print '
            </nav>
        </header>

        <main>';
            if ($_GET[$menu] == 1) {
                include("menu.php");
            }
            else if ($menu == 2) {
                include("about.php");
            }
            else if ($menu == 3) {
                include("contact.php");
            }
            print '
        </main>

        <footer>
            <p>Copyright &copy; Paulina Lalić</p>
        </footer>
        
    </body>

</html>'
?>