<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home Object Dimensions</title>
<style>
body { font-family: sans-serif; margin: 40px; }
table { border-collapse: collapse; margin-top: 20px; }
th, td { border: 1px solid #aaa; padding: 6px 10px; }
</style>
</head>
<body>

<h2>Add Object</h2>

<form method="POST" action="save.php">
  <input name="name" placeholder="Object name" required>
  <input name="length" type="number" step="0.01" placeholder="Length" required>
  <input name="width" type="number" step="0.01" placeholder="Width" required>
  <input name="height" type="number" step="0.01" placeholder="Height" required>
  <button type="submit">Add</button>
</form>

<h2>Stored Items</h2>

<?php include 'view.php'; ?>

</body>
</html>
