<?php

namespace iutspotify\Render;

use iutspotify\InvalidArgumentException;

abstract class AudioTrackRenderer implements RenderInterface
{
    public function render(int $selector): string
    {
        return match ($selector) {
            self::COMPACT => $this->compact(),
            self::LONG => $this->long(),
            default => throw new InvalidArgumentException("Invalid selector: $selector"),
        };
    }

    abstract protected function compact(): string;

    abstract protected function long(): string;
}