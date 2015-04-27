<?php namespace Rfifteen\Peculiar;

interface UuidModelInterface
{
    /**
     * Get a new version 4 (random) UUID.
     *
     * @return \Ramsey\Uuid\Uuid
     */
    public function generateNewId();
}
