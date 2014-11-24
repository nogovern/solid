<?php

class PlayCategoryType extends CategoryTypeInterface
{
	protected $types;

	public function __construct()
	{
		parent::__construct();
	}

	function get($index)
	{

	}

	function add($item)
	{
		$this->types[] = $item;
	}
}