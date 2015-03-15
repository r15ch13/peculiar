<?php

namespace spec\Rfifteen\Peculiar\Sentry;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Rhumsaa\Uuid\Uuid;

class PeculiarGroupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rfifteen\Peculiar\Sentry\PeculiarGroup');
        $this->shouldImplement('Cartalyst\Sentry\Groups\Eloquent\Group');
    }

    function it_should_have_incrementing_turned_off()
    {
        $this->getIncrementing()->shouldReturn(false);
    }

    function it_should_generate_a_rhumsaa_uuid()
    {
        $this->generateNewId()->shouldReturnAnInstanceOf('Rhumsaa\Uuid\Uuid');
    }

    function its_primary_key_value_should_be_a_valid_uuid()
    {
        $this->getKey()->shouldMatch('/' . Uuid::VALID_PATTERN . '/');
    }
}
