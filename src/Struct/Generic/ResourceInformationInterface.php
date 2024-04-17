<?php

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface ResourceInformationInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getUrl(): string;

    public function getTypeId(): int;

    public function getFolderId(): int;

    public function getMandatorId(): int;
}
