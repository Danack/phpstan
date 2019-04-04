<?php

namespace InvalidIncDec;

function ($a, int $i, ?float $j, string $str, \stdClass $std, bool $bool_1, bool $bool_2, bool $bool_3, bool $bool_4) {
	$a++;

	$b = [1];
	$b[0]++;

	date('j. n. Y')++;
	date('j. n. Y')--;

	$i++;
	$j++;
	$str++;
	$std++;
	$bool_1++;
	$bool_2--;
	++$bool_3;
	--$bool_4;

	$null = null;
	$null++;
	$null = null;
	$null--;
};
