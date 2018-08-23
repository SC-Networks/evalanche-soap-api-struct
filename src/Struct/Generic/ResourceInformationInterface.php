<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Class ResourceInformationInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
interface ResourceInformationInterface extends StructInterface
{
    /**
     *
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
    public function getCategoryId(): int;

    /**
     * @return int
     */
    public function getCustomerId(): int;
}