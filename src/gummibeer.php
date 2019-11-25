<?php
//$s=array_values(array_filter(array_map('chr',range(32,126)),fn($c)=>strpos('\'"`\\',$c)===false));do{for($p='';strlen($p)<16;str_shuffle($p)){$p.=$s[random_int(0,count($s)-1)];}}while(!(preg_match('/[a-z]/',$p)&&preg_match('/[A-Z]/',$p)&&preg_match('/[\d]/',$p)&&preg_match('/[\!\#\$\%\&\(\)\*\+\,\-\.\/\:\;\<\=\>\? \@\[\]\^\_\{\|\}\~]/',$p)));return $p;

$s = array_values(array_filter(array_map('chr', range(32, 126)), fn ($c) => strpos('\'"`\\', $c) === false));

do {
    for ($p = ''; strlen($p) < 16; str_shuffle($p)) {
        $p .= $s[random_int(0, count($s) - 1)];
    }
} while(!(preg_match('/[a-z]/', $p) && preg_match('/[A-Z]/', $p) && preg_match('/[\d]/', $p) && preg_match('/[\!\#\$\%\&\(\)\*\+\,\-\.\/\:\;\<\=\>\? \@\[\]\^\_\{\|\}\~]/', $p)));

return $p;
