<?php namespace Rfifteen\Peculiar\Ardent;

use Rfifteen\Peculiar\UuidModelInterface;
use LaravelBook\Ardent\Ardent as LaravelBookArdent;
use Ramsey\Uuid\Uuid;

abstract class Peculiar extends LaravelBookArdent implements UuidModelInterface  {

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
     * @return \Ramsey\Uuid\Uuid
     */
    public function generateNewId()
    {
        return Uuid::uuid4();
    }

}
