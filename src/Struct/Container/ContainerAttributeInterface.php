<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface ContainerAttributeInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ContainerAttributeInterface extends StructInterface
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
    public function getTypeId(): int;

    /**
     * @return int
     */
    public function getGroupId(): int;

    /**
     * @return string
     */
    public function getHelpText(): string;

    /**
     * @return string
     */
    public function getInputHelpText(): string;

    /**
     * @return bool
     */
    public function getMandatory(): bool;

    /**
     * @return bool
     */
    public function getVisible(): bool;

    /**
     * @return string
     */
    public function getReplacementVariable(): string;

    /**
     * @return bool
     */
    public function getAllowOptions(): bool;
}