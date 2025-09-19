<?php

require_once  __DIR__ . '/../InvalidPropertyNameException.php';

class AudioTrack
{
    public function __construct(protected string $title, protected int $duration = 0)
    {
    }

    public function __get(string $name): mixed
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        throw new InvalidPropertyNameException("Unknown property $name");
    }
}