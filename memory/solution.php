<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="memory.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <title>Memory of Cats</title>
</head>
<body>
<form id="gameform" action="memory-post.php" method="POST">
    <fieldset>
        <p><em>Put Name Here</em>'s Memories of Cats</p>
        <table><caption>

            </caption>
            <tbody>
            <tr>
                <td>
                    <button name="tile" value="0"><img src="images/cat5.png" alt="Cat 5" height="100" width="100"></button>
                </td>
                <td><button name="tile" value="1"><img src="images/cat1.png" alt="Cat 1" height="100" width="100"></button>
                </td>
                <td><button name="tile" value="2"><img src="images/cat2.png" alt="Cat 2" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="3"><img src="images/cat6.png" alt="Cat 6" height="100" width="100"></button>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="tile" value="4"><img src="images/cat2.png" alt="Cat 2" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="5"><img src="images/cat3.png" alt="Cat 3" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="6"><img src="images/cat4.png" alt="Cat 4" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="7"><img src="images/cat1.png" alt="Cat 1" height="100" width="100"></button>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="tile" value="8"><img src="images/cat4.png" alt="Cat 4" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="9"><img src="images/cat3.png" alt="Cat 3" height="100" width="100"></button>
                </td>
                <td>
                    <button name="tile" value="10"><img src="images/cat5.png" alt="Cat 5" height="100" width="100"></button>
                </td>
                <td><button name="tile" value="11"><img src="images/cat6.png" alt="Cat 6" height="100" width="100"></button>
                </td>
            </tr>
            </tbody>
        </table>


        <p><input type="submit" name="giveup" value="Give Up"></p>
        <p><input type="submit" name="newgame" value="New Game"></p>
        <p><a href="./index.php">Goodbye!</a></p>

    </fieldset>
</form>

</body>
</html>