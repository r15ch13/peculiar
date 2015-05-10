<?php namespace Rfifteen\Peculiar;

interface UuidModelInterface
{
    /**
     * Get a new version 4 (random) UUID.
     *
     * @return \Rhumsaa\Uuid\Uuid
     */
    public function generateNewId();
}
