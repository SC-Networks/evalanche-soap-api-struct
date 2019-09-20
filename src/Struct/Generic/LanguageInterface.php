<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface LanguageInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getText(): string;
}
