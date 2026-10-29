<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Marketplace;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface CategoryInterface extends StructInterface
{
    public function getId(): int;

    public function getText(): string;
}
