<?php


?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php  ?>Memory of Cats Signin</title>
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <link href="memory.css" type="text/css" rel="stylesheet" />

</head>
<body>
<?php


?>
<form id="signin" action="memory-post.php" method="POST">
    <fieldset>
        <p><img src="images/banner.png" width="521" height="346" alt="Memory of Cat Banner"></p>
        <p>Welcome to Memories of Cats</p>
        <p><label for="name">Your Name: </label>
        <input type="text" name="name" id="name"></p>
        <p><input type="submit" value="Start Game"></p>
    </fieldset>
</form>
</body>
</html>