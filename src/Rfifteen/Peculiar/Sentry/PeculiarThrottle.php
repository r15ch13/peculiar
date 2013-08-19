<?php namespace Rfifteen\Peculiar\Sentry;

use Cartalyst\Sentry\Throttling\Eloquent\Throttle as SentryThrottle;
use Rhumsaa\Uuid\Uuid;

class PeculiarThrottle extends SentryThrottle {

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $model->{$model->getKeyName()} = (string)$model->generateNewId();
        });
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
