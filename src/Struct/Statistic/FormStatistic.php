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

    /**
     * @param int $id
     * @param string $name
     * @param string $url
     * @param int $typeId
     * @param int $folderId
     * @param int $mandatorId
     * @param bool $isAlias
     * @param int $impressions
     * @param int $succeeded
     * @param int $identityErrorCount
     * @param int $duplicationErrorCount
     * @param int $validationErrorCount
     * @param int $mandatoryErrorCount
     */
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @return bool
     */
    public function getIsAlias(): bool
    {
        return $this->isAlias;
    }

    /**
     * @return int
     */
    public function getImpressions(): int
    {
        return $this->impressions;
    }

    /**
     * @return int
     */
    public function getSucceeded(): int
    {
        return $this->succeeded;
    }

    /**
     * @return int
     */
    public function getIdentityErrorCount(): int
    {
        return $this->identityErrorCount;
    }

    /**
     * @return int
     */
    public function getDuplicationErrorCount(): int
    {
        return $this->duplicationErrorCount;
    }

    /**
     * @return int
     */
    public function getValidationErrorCount(): int
    {
        return $this->validationErrorCount;
    }

    /**
     * @return int
     */
    public function getMandatoryErrorCount(): int
    {
        return $this->mandatoryErrorCount;
    }
}
