<html>
<?php
$players=array(
array('id' => 1,'name' => 'abc'),
array('id' => 2,'name' => 'fff'),
array('id' => 3,'name' => 'hhh'));

echo '<table border="1">';
echo '<tr><th>No</th><th>Name</th></tr>';

foreach($players as $playarray)
{
echo '<tr>';
foreach($playarray as $val)
{
echo '<td>'.$val.'</td>';
}

echo '</tr>';
}

echo '</table>';

?>
</html>