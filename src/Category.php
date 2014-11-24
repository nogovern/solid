<?php

class Category
{
	protected $types;

	public function __construct($type = null)
	{
		if( $type == 'play') {
			$this->types = ['호러', '코미디', '멜로'];
		} else {
			$this->types = ['발라드', '힙합', '락', '인디', '재즈'];
		}
	}

	public function get($index) 
	{
		if($index >= count($this->types) ){
			throw new Exception('정의되지 않은 카테고리 index');
		}

		return $this->types[$index];
	}

	public function __toString()
	{
		foreach ($this->types as $value) {
			$items[] = $value;
		}

		return join(', ', $items);
	}
}
