<?php

namespace PhpPact\Consumer\Registry\Interaction\Part;

interface ResponseRegistryInterface extends PartRegistryInterface
{
    public function withResponse(int $status): self;
}