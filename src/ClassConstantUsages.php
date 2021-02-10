<?php declare(strict_types = 1);

namespace PHPStan;

class ClassConstantUsages {
	public function __construct(array $disallowedConstants)
	{
		var_dump($disallowedConstants);
		exit;
	}
}
