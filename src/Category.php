<?php

class Category
{
	protected $types;

	public function __construct($type = 'play')
	{
		if( $type == 'play') {
			$this->types = ['호러', '코미디', '멜로'];
		} elseif( $type == 'music') {
			$this->types = ['발라드', '힙합', '락', '인디', '재즈'];
		} else {
			// 정의되지 않았음
			$this->types = [];
		}
	}

	public function get($index) 
	{
		if( count($this->types) < 1) {
			throw new Exception('등록된 카테고리가 없습니다');
		}

		if($index >= count($this->types) ){
			throw new Exception('정의되지 않은 카테고리 index');
		}

		return $this->types[$index];
	}

	public function all()
	{
		return $this->types;
	}

	public function __toString()
	{
		foreach ($this->types as $value) {
			$items[] = $value;
		}

		return join(', ', $items);
	}

    public function greet()
    {
        return 'Hello';
    }
}
