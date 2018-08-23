<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ServiceStatusInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ServiceStatusInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @return string
     */
    public function getRandomMessage(): string;
}