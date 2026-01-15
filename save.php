<?php
$file = 'data.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$data[] = [
  'name' => $_POST['name'],
  'length' => $_POST['length'],
  'width' => $_POST['width'],
  'height' => $_POST['height']
];

file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
header('Location: index.php');
exit;
?>
