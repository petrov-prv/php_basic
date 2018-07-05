<?php

$citys = [
  'Кургансая область' => ['Курган', 'Шадринск', 'Далматово', 'Катайск'],
  'Свердловская область' => ['Екатеринбург', 'Нижний Тагил', 'Каменск-Уральский', 'Первоуральск'],
  'Тюменская область' => ['Тюмень', 'Тобольск', 'Ишим', 'Ялуторовск'],
  'Челябинская область' => ['Челябинск', 'Магнитогорск', 'Миасс', 'Златоуст']
];

foreach ($citys as $key => $item) {
  echo "{$key}:<br>";
  if (is_array($item)) {
    foreach ($item as $index => $value) {
      echo "{$value} ";
    }
    unset($value);
  }
  echo "<br>";
};
unset($item);