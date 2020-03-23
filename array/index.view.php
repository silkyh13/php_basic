
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  h1 {
    background: salmon;
    border-style: dotted;
    text-align: center;
  }
  </style>
</head>
<body>

    <ul>
      <?php
      foreach ($names as $name) {

        echo "<li>$name</li>";
      }

      ?>
    </ul>

    <ul>
    </ul>
</body>
</html>