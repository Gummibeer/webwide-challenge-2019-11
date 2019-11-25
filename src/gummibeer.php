<?php

$set = array_filter(array_map('chr', range(32,126)), fn($chr) => strpos('\'"`\\', $chr) === false);

for ($p = ''; strlen($p) < 16; str_shuffle($p)) {
    $p .= $set[random_int(0, count($set) - 1)];
}

return $p;
