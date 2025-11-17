<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
class LeadpageSlotItem implements LeadpageSlotItemInterface
{
    /** @var int */
    private $articleTypeId;

    /** @var int */
    private $landingpageArticleTemplateId;

    /** @var int */
    private $webArticleTemplateId;

    /** @var list<int> */
    private $landingpageAllowedArticleTemplateIds;

    /** @var list<int> */
    private $webAllowedArticleTemplateIds;

    /**
     * @param list<int> $landingpageAllowedArticleTemplateIds
     * @param list<int> $webAllowedArticleTemplateIds
     */
    public function __construct(
        int $articleTypeId = null,
        int $landingpageArticleTemplateId = null,
        int $webArticleTemplateId = null,
        array $landingpageAllowedArticleTemplateIds = null,
        array $webAllowedArticleTemplateIds = null
    ) {
        $this->articleTypeId = $articleTypeId;
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        $this->webArticleTemplateId = $webArticleTemplateId;
        $this->landingpageAllowedArticleTemplateIds = $landingpageAllowedArticleTemplateIds;
        $this->webAllowedArticleTemplateIds = $webAllowedArticleTemplateIds;
    }

    public function getArticleTypeId(): int
    {
        return $this->articleTypeId;
    }

    public function setArticleTypeId(int $articleTypeId): LeadpageSlotItemInterface
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
    }

    public function getLandingpageArticleTemplateId(): int
    {
        return $this->landingpageArticleTemplateId;
    }

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): LeadpageSlotItemInterface
    {
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        return $this;
    }

    public function getWebArticleTemplateId(): int
    {
        return $this->webArticleTemplateId;
    }

    public function setWebArticleTemplateId(int $webArticleTemplateId): LeadpageSlotItemInterface
    {
        $this->webArticleTemplateId = $webArticleTemplateId;
        return $this;
    }

    /** @inheritdoc */
    public function getLandingpageAllowedArticleTemplateIds(): array
    {
        return $this->landingpageAllowedArticleTemplateIds;
    }

    /** @inheritdoc */
    public function setLandingpageAllowedArticleTemplateIds(array $landingpageAllowedArticleTemplateIds): LeadpageSlotItemInterface
    {
        $this->landingpageAllowedArticleTemplateIds = $landingpageAllowedArticleTemplateIds;
        return $this;
    }

    /** @inheritdoc */
    public function getWebAllowedArticleTemplateIds(): array
    {
        return $this->webAllowedArticleTemplateIds;
    }

    /** @inheritdoc */
    public function setWebAllowedArticleTemplateIds(array $webAllowedArticleTemplateIds): LeadpageSlotItemInterface
    {
        $this->webAllowedArticleTemplateIds = $webAllowedArticleTemplateIds;
        return $this;
    }
}
