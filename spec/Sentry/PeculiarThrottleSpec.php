<?php

namespace spec\Rfifteen\Peculiar\Sentry;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Ramsey\Uuid\Uuid;

class PeculiarThrottleSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\Rfifteen\Peculiar\Sentry\DummyPeculiarThrottle');
    }

    function it_is_initializable()
    {
        $this->shouldImplement('Rfifteen\Peculiar\UuidModelInterface');
        $this->shouldImplement('Rfifteen\Peculiar\Sentry\PeculiarThrottle');
        $this->shouldImplement('Cartalyst\Sentry\Throttling\Eloquent\Throttle');
        $this->shouldImplement('Illuminate\Database\Eloquent\Model');
    }

    function it_should_have_incrementing_turned_off()
    {
        $this->getIncrementing()->shouldReturn(false);
    }

    function it_should_generate_a_ramsey_uuid()
    {
        $this->generateNewId()->shouldReturnAnInstanceOf('Ramsey\Uuid\Uuid');
    }

    function its_primary_key_value_should_be_a_valid_uuid()
    {
        $this->getKey()->shouldMatch('/' . Uuid::VALID_PATTERN . '/');
    }
}

class DummyPeculiarThrottle extends \Rfifteen\Peculiar\Sentry\PeculiarThrottle
{
}
