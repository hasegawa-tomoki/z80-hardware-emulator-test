<?php
$bytes = bin2hex(file_get_contents('prelim.rom'));

printf("std::array<uint8_t, %d> virtual_memory{\n", 0x100 + (strlen($bytes) / 2));

// 0x0000-0x00ff
for ($a = 0x0000; $a < 0x0100; $a++){
  print('0x00, ');
  if ($a % 16 == 15){
    echo PHP_EOL;
  }
}
// 0x0100-
$cursor = 0;
while ($cursor < strlen($bytes)){
  $byte = substr($bytes, $cursor, 2);
  printf('0x%s, ', $byte);
  $cursor += 2;
  if ($cursor % 32 == 0){
    echo PHP_EOL;
  }
}

print('};');