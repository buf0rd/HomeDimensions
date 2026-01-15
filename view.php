<?php
$file = 'data.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

if (count($data) === 0) {
  echo "<p>No items stored.</p>";
  return;
}

echo "<table><tr><th>Name</th><th>Length</th><th>Width</th><th>Height</th></tr>";
foreach ($data as $i) {
  echo "<tr>
    <td>{$i['name']}</td>
    <td>{$i['length']}</td>
    <td>{$i['width']}</td>
    <td>{$i['height']}</td>
  </tr>";
}
echo "</table>";
?>
