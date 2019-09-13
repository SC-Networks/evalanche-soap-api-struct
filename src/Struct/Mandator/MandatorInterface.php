<?php

namespace Scn\EvalancheSoapStruct\Struct\Mandator;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface MandatorInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Mandator
 */
interface MandatorInterface extends StructInterface
{
    /**
     *
     * @return int
     */
    public function getId(): int;

    /**
     *
     * @return string
     */
    public function getName(): string;

    /**
     *
     * @return string
     */
    public function getDomain(): string;
}
