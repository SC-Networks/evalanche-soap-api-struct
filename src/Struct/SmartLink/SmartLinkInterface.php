<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface SmartLinkInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Smartlink
 */
interface SmartLinkInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getTrackingUrl(): string;
}
