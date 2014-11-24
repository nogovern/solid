<?php 

abstract class CategoryTypeInterface
{
	public function __construct()
	{
		;
	}

	abstract function get($index);
	abstract function add($item);
}