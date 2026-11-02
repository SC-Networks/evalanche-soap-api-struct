<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Statistic;

/**
 * Displays statistics about a form element.
 * Contains information about its id, name, url, number of representations, number of successful transmissions,
 * number of errors e.g. due to duplicates, validations.
 *
 * @package Scn\EvalancheSoapStruct\Struct\Statistic
 */
class FormStatistic implements FormStatisticInterface
{
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|string $url = null,
        private null|int $typeId = null,
        private null|int $folderId = null,
        private null|int $mandatorId = null,
        /**
         *
         * @var null|bool Is this a form alias
         */
        private null|bool $isAlias = null,
        /**
         * @var null|int Sum of impressions
         */
        private null|int $impressions = null,
        /**
         * @var null|int Sum of succeeded form submissions
         */
        private null|int $succeeded = null,
        /**
         * @var null|int Sum of identity errors
         */
        private null|int $identityErrorCount = null,
        /**
         * @var null|int Sum of duplication errors
         */
        private null|int $duplicationErrorCount = null,
        /**
         * @var null|int Sum of of validation errors
         */
        private null|int $validationErrorCount = null,
        /**
         * @var null|int Sum of errors becaus of not filled mandatory fields
         */
        private null|int $mandatoryErrorCount = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getUrl(): string
    {
        return (string) $this->url;
    }

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getTypeId(): int
    {
        return (int) $this->typeId;
    }

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getFolderId(): int
    {
        return (int) $this->folderId;
    }

    /**
     *
     * @deprecated Not supported in specialized method, please use `getById`
     */
    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }

    public function getIsAlias(): bool
    {
        return (bool) $this->isAlias;
    }

    public function getImpressions(): int
    {
        return (int) $this->impressions;
    }

    public function getSucceeded(): int
    {
        return (int) $this->succeeded;
    }

    public function getIdentityErrorCount(): int
    {
        return (int) $this->identityErrorCount;
    }

    public function getDuplicationErrorCount(): int
    {
        return (int) $this->duplicationErrorCount;
    }

    public function getValidationErrorCount(): int
    {
        return (int) $this->validationErrorCount;
    }

    public function getMandatoryErrorCount(): int
    {
        return (int) $this->mandatoryErrorCount;
    }
}
