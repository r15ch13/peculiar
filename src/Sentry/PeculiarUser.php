<?php namespace Rfifteen\Peculiar\Sentry;

use Rfifteen\Peculiar\UuidModelInterface;
use Cartalyst\Sentry\Users\Eloquent\User as SentryUser;
use Rhumsaa\Uuid\Uuid;

class PeculiarUser extends SentryUser implements UuidModelInterface {

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = array())
    {
        $this->{$this->getKeyName()} = (string)$this->generateNewId();
        parent::__construct($attributes);
    }

    /**
     * Get a new version 4 (random) UUID.
     *
     * @return \Rhumsaa\Uuid\Uuid
     */
    public function generateNewId()
    {
        return Uuid::uuid4();
    }

}
