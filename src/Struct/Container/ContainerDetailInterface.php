<?php

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Class ContainerDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
interface ContainerDetailInterface extends StructInterface
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
    public function getUrl(): string;

    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return int
     */
    public function getFolderId(): int;

    /**
     * @return int
     */
    public function getMandatorId(): int;

    /**
     * @return int
     */
    public function getContainerTypeId(): int;
}
