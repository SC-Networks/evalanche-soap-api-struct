<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeOptionInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeOptionInterface extends StructInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @return int
     */
    public function getOrder(): int;
}
