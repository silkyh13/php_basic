
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
  <header>
  <h1>
    <?php
      $greeting = "Hello, ";
      echo $greeting;

      $get_name = $_GET['name'];//take api point ?name=Silin and returns Silin
      echo $get_name;
    ?>
  </h1>

  <h1>
    <?php echo "Another way of writing the same thing " . $_GET['name'];?>
  </h1>

  <h1>
    <?= "in case hacker injects bad code" . htmlspecialchars($_GET['name']);?>
  </h1>
  <h1>
    <?= $seperation_greeting; ?>
  </h1>
  <header>
</body>
</html>