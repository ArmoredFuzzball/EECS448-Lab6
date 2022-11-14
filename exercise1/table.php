<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<?php
$cols = 101;
$rows = 101;
?>

<?php
echo "<table border=\"1\">";

for ($r = 1; $r < $rows; $r++) {

    echo '<tr>';

    for ($c = 1; $c < $cols; $c++)
        echo '<td>' . $c * $r . '</td>';
    echo '</tr>';
}

echo "</table>";
?>