<?php
//$s=array_filter(array_map('chr',range(32,126)),fn($c)=>strpos('\'"`\\',$c)===false);for($p='';strlen($p)<16;str_shuffle($p)){$p.=$s[random_int(0,count($s)-1)];}return $p;

$s = array_values(array_filter(array_map('chr', range(32, 126)), fn ($c) => strpos('\'"`\\', $c) === false));

for ($p = ''; strlen($p) < 16; str_shuffle($p)) {
    $p .= $s[random_int(0, count($s) - 1)];
}

return $p;
