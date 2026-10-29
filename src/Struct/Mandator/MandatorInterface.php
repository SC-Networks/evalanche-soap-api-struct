<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mandator;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MandatorInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mandator
 */
interface MandatorInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getDomain(): string;
}
