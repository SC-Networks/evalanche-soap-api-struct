<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Represents the article template configuration for a certain article type in a slot
 */
class LeadpageSlotItem implements LeadpageSlotItemInterface
{
    /**
     * @param list<int> $landingpageAllowedArticleTemplateIds
     * @param list<int> $webAllowedArticleTemplateIds
     */
    public function __construct(
        private null|int $articleTypeId = null,
        private null|int $landingpageArticleTemplateId = null,
        private null|int $webArticleTemplateId = null,
        private array $landingpageAllowedArticleTemplateIds = [],
        private array $webAllowedArticleTemplateIds = []
    ) {
    }

    public function getArticleTypeId(): int
    {
        return (int) $this->articleTypeId;
    }

    public function setArticleTypeId(int $articleTypeId): LeadpageSlotItemInterface
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
    }

    public function getLandingpageArticleTemplateId(): int
    {
        return (int) $this->landingpageArticleTemplateId;
    }

    public function setLandingpageArticleTemplateId(int $landingpageArticleTemplateId): LeadpageSlotItemInterface
    {
        $this->landingpageArticleTemplateId = $landingpageArticleTemplateId;
        return $this;
    }

    public function getWebArticleTemplateId(): int
    {
        return (int) $this->webArticleTemplateId;
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
