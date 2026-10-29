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
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var int
     */
    private $folderId;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     *
     * @var bool Is this a form alias
     */
    private $isAlias;

    /**
     * @var int Sum of impressions
     */
    private $impressions;

    /**
     * @var int Sum of succeeded form submissions
     */
    private $succeeded;

    /**
     * @var int Sum of identity errors
     */
    private $identityErrorCount;

    /**
     * @var int Sum of duplication errors
     */
    private $duplicationErrorCount;

    /**
     * @var int Sum of of validation errors
     */
    private $validationErrorCount;

    /**
     * @var int Sum of errors becaus of not filled mandatory fields
     */
    private $mandatoryErrorCount;

    public function __construct(
        int $id = null,
        string $name = null,
        string $url = null,
        int $typeId = null,
        int $folderId = null,
        int $mandatorId = null,
        bool $isAlias = null,
        int $impressions = null,
        int $succeeded = null,
        int $identityErrorCount = null,
        int $duplicationErrorCount = null,
        int $validationErrorCount = null,
        int $mandatoryErrorCount = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->typeId = $typeId;
        $this->folderId = $folderId;
        $this->mandatorId = $mandatorId;
        $this->isAlias = $isAlias;
        $this->impressions = $impressions;
        $this->succeeded = $succeeded;
        $this->identityErrorCount = $identityErrorCount;
        $this->duplicationErrorCount = $duplicationErrorCount;
        $this->validationErrorCount = $validationErrorCount;
        $this->mandatoryErrorCount = $mandatoryErrorCount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
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
        return $this->isAlias;
    }

    public function getImpressions(): int
    {
        return $this->impressions;
    }

    public function getSucceeded(): int
    {
        return $this->succeeded;
    }

    public function getIdentityErrorCount(): int
    {
        return $this->identityErrorCount;
    }

    public function getDuplicationErrorCount(): int
    {
        return $this->duplicationErrorCount;
    }

    public function getValidationErrorCount(): int
    {
        return $this->validationErrorCount;
    }

    public function getMandatoryErrorCount(): int
    {
        return $this->mandatoryErrorCount;
    }
}
