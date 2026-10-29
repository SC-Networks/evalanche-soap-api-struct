<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Container;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Class ContainerDetailInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Container
 */
interface ContainerDetailInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getUrl(): string;

    public function getTypeId(): int;

    public function getFolderId(): int;

    public function getMandatorId(): int;

    public function getContainerTypeId(): int;
}
