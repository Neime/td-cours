<?php

namespace iutspotify\Render;
interface RenderInterface
{
    const COMPACT = 0;
    const LONG = 1;

    public function render(int $selector): string;
}