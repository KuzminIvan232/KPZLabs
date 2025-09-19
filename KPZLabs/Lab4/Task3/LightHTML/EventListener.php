<?php

namespace LightHTML;

interface EventListener
{
    public function handle(Element $element): void;
}
