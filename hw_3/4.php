<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
$text = 'я, я, яблоки ела';

$letters = [
  'а' => 'a',
  'б' => 'b',
  'в' => 'v',
  'г' => 'g',
  'д' => 'd',
  'е' => 'e',
  'ё' => 'yo',
  'ж' => 'zh',
  'з' => 'z',
  'и' => 'i',
  'й' => 'j',
  'к' => 'k',
  'л' => 'l',
  'м' => 'm',
  'н' => 'n',
  'о' => 'o',
  'п' => 'p',
  'р' => 'r',
  'с' => 's',
  'т' => 't',
  'у' => 'u',
  'ф' => 'f',
  'х' => 'h',
  'ц' => 'c',
  'ч' => 'ch',
  'ш' => 'sh',
  'щ' => 'shh',
  'ъ' => '#',
  'ы' => 'y',
  'ь' => '\'',
  'э' => 'e',
  'ю' => 'yu',
  'я' => 'ya',
];

$letRus = str_split($text, 1);

array_map(function ($item); )

function translit($textRus, $letters) {

  foreach ($letRus as $key => $item) {
    foreach ($letters as $index => $value) {
      if ($item == $index) {
        $item = $value;
      }
    }
  }
  echo $item;
};

translit($text, $letters);


/*Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/