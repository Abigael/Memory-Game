<?php
require 'inc.php';
$name = $_SESSION['name'];
//echo $name;

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="memory.css" type="text/css" rel="stylesheet" />
    <title>Memory of Cats</title>
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <script src="memory.js"></script>
    <script>
        // Instantiate the JavaScript object I am using.
        $(document).ready(function() {
            var memory = new Memory();
        });
    </script>

</head>
<body>
<form id="gameform" action="memory-post.php" name="catimage" method="POST">
    <fieldset>
        <p><em><?php echo $name ?></em>'s Memories of Cats</p>
        <?php
            $html = '<table>';
            $i = 0;

            for ($r = 0; $r < 3; $r++) {
                $html .= "<tr>";
                for ($c = 0; $c < 4; $c++) {
                    $html .= <<<HTML
<td><button name="tile" value="$i" id="b$i"><img id="image$i" src="images/tile.png" alt="blank" height="100" width="100"></button></td>
HTML;

                    $i++;
                }
                $html .= "</tr>";
            }

            $html .= "</table>";
            echo $html;
        ?>

        <p><input type="submit" name="giveup" value="Give Up"></p>
        <p><input type="submit" name="newgame" value="New Game"></p>
        <p><a href="./index.php">Goodbye!</a></p>

    </fieldset>
</form>

</body>
</html>