<?php
$bytes = bin2hex(file_get_contents('prelim.rom'));
$cursor = 0;
while ($cursor < strlen($bytes)){
  $byte = substr($bytes, $cursor, 2);
  printf('0x%s, ', $byte);
  $cursor += 2;
  if ($cursor % 32 == 0){
    echo PHP_EOL;
  }
}
