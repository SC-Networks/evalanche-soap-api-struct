<?php

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface FormStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface FormStatisticInterface extends StructInterface
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
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getUrl(): string;

    /**
     * @return int
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getTypeId(): int;

    /**
     * @return int
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getFolderId(): int;

    /**
     * @return int
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getMandatorId(): int;

    /**
     * @return bool
     */
    public function getIsAlias(): bool;

    /**
     * @return int
     */
    public function getImpressions(): int;

    /**
     * @return int
     */
    public function getSucceeded(): int;

    /**
     * @return int
     */
    public function getIdentityErrorCount(): int;

    /**
     * @return int
     */
    public function getDuplicationErrorCount(): int;

    /**
     * @return int
     */
    public function getValidationErrorCount(): int;

    /**
     * @return int
     */
    public function getMandatoryErrorCount(): int;
}
