<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface FormStatisticInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
interface FormStatisticInterface extends StructInterface
{
    public function getId(): int;

    public function getName(): string;

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getUrl(): string;

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getTypeId(): int;

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getFolderId(): int;

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getMandatorId(): int;

    public function getIsAlias(): bool;

    public function getImpressions(): int;

    public function getSucceeded(): int;

    public function getIdentityErrorCount(): int;

    public function getDuplicationErrorCount(): int;

    public function getValidationErrorCount(): int;

    public function getMandatoryErrorCount(): int;
}
