
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
    <?php foreach($kat as $feature => $val) : ?>
      <li>
      <strong><?= $feature;?></strong> <?= $val; ?>
      </li>
    <?php endforeach; ?>
  </ul>

  <h1><?= ucwords('task for the day');?></h1>

  <?= ucwords('hello my name is kat.');?>
  <ul>
    <?php foreach($task as $assignment => $val) :?>
    <li>
    <strong><?= ucwords($assignment);?>: </strong><?= gettype($val) === 'string' ? $val : ($val === true ? 'Completed' : 'Incomplete');?>
    </li>
    <?php endforeach; ?>
  </ul>

  <ul>
    <li>
      <strong><?= ucwords('status');?></strong>
      <?php
      if ($task['completed']) {
        echo '&#9989';
      } else {
        echo '&#10060';
      }?>
    </li>
  </ul>

  <ul>
    <li>
      <strong><?= ucwords('status');?></strong>
      <?php if($task['completed']):?>
        <span class='icon'>&#9989;</span>
      <?php else :?>
        <span class='icon'>&#10060;</span>
      <?php endif; ?>
    </li>
  </ul>

</body>
</html>