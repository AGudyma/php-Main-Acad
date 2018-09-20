<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    ROW   <input type="text" name="row" value="<?= $row?>"><br>
    COLUMN<input type="text" name="column" value="<?= $column?>">

    <input type="submit" value="Submit">
</form>

<?php
$row = 0;
if (isset($_GET['row'])){
    if ((int)($_GET['row'])) {
        $row = (int)$_GET['row'];
    }
    echo $_GET['row'];
}

$column = 0;
if (isset($_GET['column'])){
    if ((int)($_GET['column'])) {
        $column = (int)$_GET['column'];
    }
    echo $_GET['column'];
}

?>
<TABLE border="1" width = "100%">
    <?php
    $counter = 0;
    for ($i = 0; $i < $row; $i++) {
        echo "<tr>";
        for ($t = 0; $t <$column; $t++) {
            echo  "<td>". $counter++. "</td>";
        }
        echo "</tr>";
    }
    ?>

</TABLE>

</table>
</body>
