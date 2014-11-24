<?php namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MovieCollection');
    }

    function it_stores_a_collection_of_movie(Movie $movie)
    {
        $this->add($movie);
    }
}
