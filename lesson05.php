<?php
for ($a = 4; $a >= 1; $a--) {
  if ($a == 1) {
    $b = '***';
    echo $b . $a . "\n";
    break;
  } elseif ($a == 2) {
    $b = '**';
    $c = $a - 1;
    echo  $b . $c . $a . $c . "\n";
  } elseif ($a == 3) {
    $b = '*';
    $c = $a - 1;
    $d = $c - 1;
    echo  $b . $d . $c . $a . $c . $d . "\n";
  } elseif ($a == 4) {
    $b = '';
    $c = $a - 1;
    $d = $c - 1;
    $e = $d - 1;
    echo  $b . $e . $d . $c . $a . $c . $d . $e . "\n";
  }
}
