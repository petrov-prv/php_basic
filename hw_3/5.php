<?php

$song = "Не слышны в саду даже шорохи";

function sub ($text) {
  $sub = str_replace( ' ', '_', $text );
  return $sub;
}

echo sub($song);