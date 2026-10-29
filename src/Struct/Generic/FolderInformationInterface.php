<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface FolderInformationInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface FolderInformationInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getParentId(): int;
}
