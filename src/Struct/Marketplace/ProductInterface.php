<?php

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface ProductInterface extends StructInterface
{
    public function getId(): string;

    public function getPrice(): int;

    public function getTitle(): string;

    public function getText(): string;
}
