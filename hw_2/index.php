<h2>задание 1</h2>
<?php
function foo($a, $b)
{
  if ($a >= 0 && $b >= 0) {
    $res = $a - $b;
    return "Оба числа положительные, разносность чисел составляет: $res";
  } elseif ($a < 0 && $b < 0) {
    $res = $a * $b;
    return "Оба числа отрицательные, произведение чисел составляет: $res";
  } else {
    $res = $a + $b;
    return "Числа с разными знаками, сумма чисел составляет: $res";
  }
}
?>
<p><?= foo(-8, 5) ?></p>

<h2>задание 3</h2>
<?php
function sum($param1, $param2) {
  return $param1 + $param2;
}

function subtraction($param1, $param2) {
  return $param1 - $param2;
}

function multiplication($param1, $param2) {
  return $param1 * $param2;
}

function division($param1, $param2) {
  if ($param2 == 0) {
    return "На ноль делить нельзя";
  }
  return $param1 / $param2;
}
?>
<p><?= sum(5, 3) ?></p>
<p><?= subtraction(5, 3) ?></p>
<p><?= multiplication(5, 3) ?></p>
<p><?= division(5, 3) ?></p>

<h2>задание 4</h2>
<?php
function mathOperation($arg1, $arg2, $operation){
  $res = null;
  switch ($operation) {
    case 'sum':
      $res = sum($arg1, $arg2);
      break;
    case 'subtraction':
      $res = subtraction($arg1, $arg2);
      break;
    case 'multiplication':
      $res = multiplication($arg1, $arg2);
      break;
    case 'division':
      $res = division($arg1, $arg2);
      break;
  }
  return $res;
}

?>
<p><?= mathOperation(5, 3, 'division') ?></p>

<h2>задание 6</h2>
<?php
function power($val, $pow)
{
  if ($pow > 0) {
    return $val * power($val, $pow - 1);
  } elseif ($pow < 0) {
    return power(1 / $val, -$pow);
  } else return 1;
}
?>
<p><?= power(5, -3) ?></p>

<h2>задание 7</h2>
<?php
$hours = date("H");
$minutes = date("i");

$amountHours = function ($h) {
  if ($h == 1 || $h == 21) {
    return $h.' час ';
  } elseif ($h >= 2 && $h <= 4 || $h >= 22 && $h <= 23) {
    return $h.' часа ';
  } else
    return $h.' часов ';
};

$amountMinutes = function ($min) {
  if ($min == 1 || $min == 21 || $min == 31 || $min == 41 || $min == 51) {
    return $min.' минута';
  } elseif ($min >= 2 && $min <= 4 || $min >= 22 && $min <= 24 || $min >= 32 && $min <= 34 || $min >= 42 && $min <= 44
    || $min >= 52 && $min <= 54) {
    return $min.' минуты';
  } else {
    return $min.' минут';
  }
}
?>
<p><?= $amountHours($hours), $amountMinutes($minutes) ?></p>