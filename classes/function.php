<?php
function dd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function goHome($val) {
  if ($val > 18) {
    echo 'old enough';
  }else {
    echo 'not old enough';
  }

}