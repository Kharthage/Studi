<?php

function additionner (int $a, int $b): int {
return $a + $b;
}

function afficher (int $n) : void {
  echo $n;
}

$c = additionner (1, 2);
  afficher ($c);
?>