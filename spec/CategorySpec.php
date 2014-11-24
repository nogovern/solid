<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CategorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Category');
    }

    function it_init_play_category()
    {
    	$this->assertEqual(3, $this->types);
    }
}
