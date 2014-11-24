<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CategorySpec extends ObjectBehavior
{
	function let(\Acme\Checkout $checkout)
	{
		$this->beConstructedWith($checkout);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Category');
    }

    function it_greets_with_hello()
    {
    	// $this->assertEqual(3, $this->types);
    	$this->greet()->shouldReturn('Hello');
    }

    function it_tests()
    {
    	$this->all()->shouldBeArray();		// should + isArray() = shouldBeArray
    	$a = 1;
    }
}
