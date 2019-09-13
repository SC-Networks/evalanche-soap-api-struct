<?php

namespace Scn\EvalancheSoapStruct\Struct\SmartLink;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface SmartLinkInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Smartlink
 */
interface SmartLinkInterface extends StructInterface
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
    public function getTrackingUrl(): string;
}
