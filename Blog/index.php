
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<br>
<form action="index.php" method="post" enctype="multipart/form-data">
    Enter post number<br>

    <input type="text" name="id" placeholder="post">

    <br>Enter post name<br>

    <input type="text" name="postName" placeholder="post"><br>
        Enter post <br>

    <input type="text" name="post" placeholder="post">
    <br>
    <input type="submit" value="Save post" name="submit">
</form>


<h1>

</h1>
<?php
include_once 'Blog.php';
$postsList = new Blog($_POST["id"],$_POST["postName"], $_POST["post"]);
$postsList->postStore();
$postsList->postShow();
?>
</body>
</html>