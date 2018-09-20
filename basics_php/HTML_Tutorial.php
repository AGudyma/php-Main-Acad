<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    ROW   <input type="text" name="number" value="<?= $number?>"><br>
    COLUMN<input type="text" name="number" value="<?= $number?>">

    <input type="submit" value="Submit">
</form>

<?php
$number = 0;
    if (isset($_GET['number'])){
        if ((int)($_GET['number'])) {
            $number = (int)$_GET['number'];
        }
        echo $_GET['number'];
    }

?>
<TABLE border="1" width = "100%">
    <?php
    $counter = 0;
    for ($i = 0; $i < $number; $i++) {
            echo "<tr> 
                <td>". ++$counter. "</td>
                <td>". ++$counter. "</td>
                 <td>". ++$counter. "</td>
            </tr>";
    }
    ?>

</TABLE>

</table>
</body>
</html>